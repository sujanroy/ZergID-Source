<?php defined('SYSPATH') or die('No direct script access.');

class Model_Message extends ORM  {
    protected $_table_name = 'zid_messages';
    protected $_primary_key = 'message_id';
    protected $_belongs_to = array(
                               'game' => array('model' => 'Game', 'foreign_key' => 'game_id'),
                               'guild' => array('model' => 'guild', 'foreign_key' => 'guild_id')
                               );
   
    public function add_message($userid, $admin_id, $data){
       # add new game request message
       $data['receiver'] =  $admin_id;
       $data['is_message_viewed'] = "0";
       $query = "CALL add_message('".$userid."',".$data['character_id'].", NULL, '".$data['receiver']."', NULL, '".$data['subject']."', '".addslashes($data['message'])."', '".$data['is_message_viewed']."', '1', @LAST_ID);";
       $result = DB::query(Database::INSERT, $query)->execute();
       return $result;
    }
    
    public function add_membership_message($userid, $data){
       # guild membership message
       $data['is_message_viewed'] = "0";
       $query = "CALL add_message('".$userid."', ".$data['character'].", ".$data['guild_id'].", '".$data['user_id']."', NULL, '".$data['subject']."', '".addslashes($data['summary'])."', '".$data['is_message_viewed']."', '1', @LAST_ID);";
       $insert_id = DB::query(Database::INSERT, $query)->execute();
       return $insert_id;
    }
    
     public function add_send_request_message($userid, $data){
       # send friend request     
       $data['is_message_viewed'] = "0";
       $comment = addslashes($data['comment']);
       $query = "CALL add_message('".$userid."',".$data['character'].", NULL, '".$data['linked_id']."', NULL, '".$data['subject']."', '".$comment."', '".$data['is_message_viewed']."', '1', @LAST_ID);";
       $insert_id = DB::query(Database::INSERT, $query)->execute();
        return $insert_id;
    }
    
     public function add_new_message($userid, $data){ 
         # compose new message
         $data['is_message_viewed'] = "0";
         $message = addslashes($data['message']);
         $query = "CALL add_message('".$userid."',".$data['character'].", NULL, '".$data['receiver']."', NULL, '".$data['subject']."', '".$message."', '".$data['is_message_viewed']."', '1', @LAST_ID);";
         $insert_id = DB::query(Database::INSERT, $query)->execute();
         return $insert_id;
     }
     
      public function add_reply_message($userid, $data){ 
         # add new reply message
         $data['is_message_viewed'] = "0"; 
         $message = addslashes($data['message']);
         $query = "CALL add_message('".$userid."',".$data['character'].", NULL, '".$data['receiver']."', '".$data['parent_message']."', '".$data['subject']."', '".$message."', '".$data['is_message_viewed']."', '".$data['is_message_parent']."', @LAST_ID);";
         DB::query(Database::INSERT, $query)->execute();
         $insert_id =DB::query(Database::SELECT,"SELECT @LAST_ID")->execute();
         return $insert_id[0]['@LAST_ID'];
     }
     
     public function get_friendslist($userid) {
          # get friend list in to drop down   
          $friends = ORM::factory('Friends')
                ->select('zid_users.*', 'zid_character_details.*')
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'friends.user_id')
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('friends.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->where('friends.linked_id', '=', $userid)
                ->and_where('friends.is_accepted', '=', 1)
                ->and_where('friends.is_active', '=', 0)
                ->order_by('username','ASC')  
                ->order_by('username','ASC') 
                ->find_all();
          return $friends;
     }
     
     public function get_sent_messages($userid) {
         # get all send messages
         $messages = ORM::factory('Message')
                ->select('zid_users.*', 'zid_guilds.*', 'zid_events.*', 'zid_character_details.*')
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'message.user_id')
                ->join('zid_guilds', 'LEFT OUTER')
                ->on('message.guild_id', '=', 'zid_guilds.guild_id')
                ->join('zid_events', 'LEFT OUTER')
                ->on('message.event_id', '=', 'zid_events.event_id')  
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('message.character_detail_id', '=', 'zid_character_details.character_detail_id') 
                ->where('message.user_id', '=', $userid)
                ->where_open() 
                ->and_where(DB::expr( 'NOT FIND_IN_SET(\''.$userid.'\', '), '', DB::expr('message.is_garbage_message )'))
                ->or_where('message.is_garbage_message', '=', NULL) 
                ->where_close() 
                ->and_where('message.guild_id', '=', NULL)
                ->and_where('message.is_message_parent', '=', 1)
                ->and_where('message.is_message_active', '=', 1)
                ->and_where('message.subject', '!=', 'Send Friend Request') 
                ->order_by('message.message_id', 'DESC')
                ->limit(10)
                ->find_all();
         return $messages;
     }
     
     public function get_character_messages($char_id) {
         # Get character messages
         $query = ORM::factory('Message')->where('character_detail_id', '=', $char_id)->find_all();
         return $query;
     }
     
     public function delete_guild_messages($guild_id) {
        # Delete guild messages
        $query = DB::delete($this->_table_name)->where('guild_id', '=', $guild_id)->execute();
        return $query;
    }
    
    public function delete_event_messages($event_id) {
        # Delete event messages
        $query = DB::delete($this->_table_name)->where('event_id', '=', $event_id)->execute();
        return $query;
    }
    
    public function get_garbage_messages($user_id) {
         # get all garbage messages
         $messages = ORM::factory('Message')
                ->select('zid_users.*','zid_guilds.*','zid_events.*','zid_character_details.*')
                ->select(DB::expr("CASE WHEN message.parent_message_id IS NULL THEN RAND() ELSE message.parent_message_id END AS parent_id"))
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'message.user_id')
                ->join('zid_guilds', 'LEFT OUTER')
                ->on('message.guild_id', '=', 'zid_guilds.guild_id')
                ->join('zid_events', 'LEFT OUTER')
                ->on('message.event_id', '=', 'zid_events.event_id') 
		 ->join('zid_character_details', 'LEFT OUTER')     
                ->on('message.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->and_where(DB::expr('FIND_IN_SET(\'' . $user_id . '\', '), '', DB::expr('message.is_garbage_message )'))
                ->and_where_open()
                ->and_where(DB::expr('NOT FIND_IN_SET(\'' . $user_id . '\', '), '', DB::expr('message.is_message_deleted )'))
                ->or_where('is_message_deleted', '=', NULL)
                ->and_where_close()
                ->and_where('message.is_message_parent', '=', 1)
                ->and_where('message.is_message_active', '=', 1)
                ->and_where('message.subject', '!=', 'Send Friend Request')
                ->order_by('message.message_id', 'DESC')
                ->group_by('parent_id')
                ->limit(10)
                ->find_all();
        return $messages;
     }
     
     public function get_load_more_inbox_messages($user_id, $last_msg) {
         # Get inbox more messages
         $query = ORM::factory('Message')
                ->select('zid_users.*', 'zid_guilds.*', 'zid_character_details.*')
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'message.user_id')
                ->join('zid_guilds', 'LEFT OUTER')
                ->on('message.guild_id', '=', 'zid_guilds.guild_id')  
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('message.character_detail_id', '=', 'zid_character_details.character_detail_id')
                 ->where_open()
                ->where('message.receiver_id', '=', $user_id)
                ->or_where(DB::expr( 'FIND_IN_SET(\''.$user_id.'\', '), '', DB::expr('message.guild_receiver_id )'))
                ->where_close()
                ->and_where('message.is_message_parent', '=', 1)
                ->where_open() 
                ->and_where(DB::expr( 'NOT FIND_IN_SET(\''.$user_id.'\', '), '', DB::expr('message.is_garbage_message )'))
                ->or_where('message.is_garbage_message', '=', NULL) 
                ->where_close()
                ->and_where('message.is_message_active', '=', 1)
                ->and_where('message.message_id', '<', $last_msg)         
                ->order_by('message.last_modified_date', 'DESC')
                ->limit(10)        
                ->find_all();
         return $query;
     }
     
     public function get_load_more_sent_messages($user_id, $last_msg) {
         # Get load more sent messages
         $query = ORM::factory('Message')
                ->select('zid_users.*', 'zid_character_details.*', 'zid_guilds.*')
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'message.user_id')
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('message.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->join('zid_guilds', 'LEFT OUTER')
                ->on('message.guild_id', '=', 'zid_guilds.guild_id') 
                ->where('message.user_id', '=', $user_id)
                ->where_open() 
                ->and_where(DB::expr( 'NOT FIND_IN_SET(\''.$user_id.'\', '), '', DB::expr('message.is_garbage_message )'))
                ->or_where('message.is_garbage_message', '=', NULL) 
                ->where_close()  
                ->and_where('message.guild_id', '=', NULL)
                ->and_where('message.is_message_parent', '=', 1)         
                ->and_where('message.is_message_active', '=', 1)
                ->and_where('message.subject', '!=', 'Send Friend Request') 
                ->and_where('message.message_id', '<', $last_msg)           
                ->order_by('message.message_id', 'DESC')
                ->limit(10)
                ->find_all();
         return $query;
     }
     
     public function get_load_more_garbage_messages($user_id, $last_msg) {
         # Get load more garbage messages
         $query = ORM::factory('Message')
                ->select('zid_users.*', 'zid_character_details.*', 'zid_guilds.*')
                ->select(DB::expr("CASE WHEN message.parent_message_id IS NULL THEN RAND() ELSE message.parent_message_id END AS parent_id")) 
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'message.user_id')
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('message.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->join('zid_guilds', 'LEFT OUTER')
                ->on('message.guild_id', '=', 'zid_guilds.guild_id') 
                ->and_where(DB::expr( 'FIND_IN_SET(\''.$user_id.'\', '), '', DB::expr('message.is_garbage_message )'))
                ->and_where_open()
                ->and_where(DB::expr( 'NOT FIND_IN_SET(\''.$user_id.'\', '), '', DB::expr('message.is_message_deleted )'))  
                ->or_where('is_message_deleted', '=', NULL)
                ->and_where_close()
                ->and_where('message.guild_id', '=', NULL)
                ->and_where('message.is_message_parent', '=', 1)         
                ->and_where('message.is_message_active', '=', 0)
                ->and_where('message.subject', '!=', 'Send Friend Request')
                ->and_where('message.message_id', '<', $last_msg)
                ->order_by('message.message_id', 'DESC')
                ->group_by('parent_id') 
                ->limit(10)
                ->find_all();
         return $query;
     }
     
     public function get_all_messages($user_id) {
         # Get all messages
         $query = ORM::factory('Message')
                ->select('zid_users.*', 'zid_guilds.*','zid_events.*','zid_character_details.*')
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'message.user_id')
                ->join('zid_guilds', 'LEFT OUTER')
                ->on('message.guild_id', '=', 'zid_guilds.guild_id') 
                 ->join('zid_events', 'LEFT OUTER')
                ->on('message.event_id', '=', 'zid_events.event_id')   
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('message.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->where_open()
                ->where('message.receiver_id', '=', $user_id)
                ->or_where(DB::expr( 'FIND_IN_SET(\''.$user_id.'\', '), '', DB::expr('message.guild_receiver_id )'))
                ->where_close()
                ->and_where('message.is_message_parent', '=', 1)
                ->and_where_open() 
                ->and_where(DB::expr( 'NOT FIND_IN_SET(\''.$user_id.'\', '), '', DB::expr('message.is_garbage_message )'))
                ->or_where('message.is_garbage_message', '=', NULL)
		->or_where('message.is_sent_delete', '=', 1) 
                ->and_where_close() 
                ->and_where('message.is_message_active', '=', 1)
                ->order_by('message.last_modified_date', 'DESC')
                ->limit(10)
                ->find_all();
         return $query;
     }
     
     public function get_read_unread_messages($user_id, $msg_type) {
         # Get read or unread messages
         $query = ORM::factory('Message')
                ->select('zid_users.*', 'zid_guilds.*','zid_events.*','zid_character_details.*')
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'message.user_id')
                ->join('zid_guilds', 'LEFT OUTER')
                ->on('message.guild_id', '=', 'zid_guilds.guild_id') 
                ->join('zid_events', 'LEFT OUTER')
                ->on('message.event_id', '=', 'zid_events.event_id')
		->join('zid_character_details', 'LEFT OUTER')
                ->on('message.character_detail_id', '=', 'zid_character_details.character_detail_id') 
                ->where('message.receiver_id', '=', $user_id)
                ->and_where('message.is_message_parent', '=', 1)        
                ->and_where('message.is_message_active', '=', 1)
                ->and_where_open() 
                ->and_where(DB::expr( 'NOT FIND_IN_SET(\''.$user_id.'\', '), '', DB::expr('message.is_garbage_message )'))
                ->or_where('message.is_garbage_message', '=', NULL) 
                ->and_where_close() 
                ->and_where('message.is_message_viewed', '=', $msg_type)   
                ->or_where(DB::expr( 'FIND_IN_SET(\''.$user_id.'\', '), '', DB::expr('message.is_event_message_viewed)'))
                ->and_where(DB::expr( 'FIND_IN_SET(\''.$user_id.'\', '), '', DB::expr('message.guild_receiver_id )'))         
                ->order_by('message.message_id', 'DESC')
                ->limit(10)
                ->find_all();
         return $query;
     }
     
     public function delete_message($message_id, $list) {
         # Delete message
         $query = DB::update($this->_table_name)->set(array('is_garbage_message' => $list))
                 ->where('parent_message_id', '=', $message_id)
                 ->or_where('message_id', '=', $message_id)
                 ->and_where('is_message_parent', '=', 1)->execute();
         return $query;
     }
     
     public function delete_garbage_message($message_id, $list) {
         # Delete garbage message
         $query = DB::update($this->_table_name)->set(array('is_message_deleted' => $list))
                 ->where('parent_message_id', '=', $message_id)
                 ->or_where('message_id', '=', $message_id)
                 ->and_where('is_message_parent', '=', 1)->execute();
         return $query;
     }

     public function view_message($user_id,$message_id){
          # view all messages
          $query = ORM::factory('Message')
                ->select('zid_users.*','zid_guilds.*', 'zid_guild_members.*', 'zid_events.*',  'zid_character_details.*', array('zid_friends.is_accepted', 'friends_accepted'))
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'message.user_id')
                ->join('zid_guilds', 'LEFT OUTER')
                ->on('message.guild_id', '=', 'zid_guilds.guild_id')
                ->join('zid_guild_members', 'LEFT OUTER')
                ->on('message.character_detail_id', '=', 'zid_guild_members.character_detail_id') 
                ->join('zid_events', 'LEFT OUTER')
                ->on('message.event_id', '=', 'zid_events.event_id') 
                 ->join('zid_character_details', 'LEFT OUTER')
                ->on('message.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->join('zid_friends', 'LEFT OUTER')
                ->on('message.user_id', '=', 'zid_friends.user_id')
                ->on('zid_friends.linked_id', '=', DB::expr($user_id))  
                ->where('message.message_id', '=', $message_id)
                ->or_where('message.parent_message_id', '=', $message_id)
                ->limit(10)  
                ->group_by('message.message_id')
                ->order_by('message.last_modified_date', 'ASC')
                ->find_all();
          return $query;
     }
     
}
