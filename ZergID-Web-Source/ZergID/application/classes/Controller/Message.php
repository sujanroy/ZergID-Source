<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Message extends Controller_Template_User {
    
    # Message center screen
    public function action_index(){
        $this->template->title = "Message Center";
        $user = Auth::instance()->get_user();
        $message_id = $this->request->param('id');
          if (HTTP_Request::POST == $this->request->method()) {
            $keyword = $_POST['message_sort'];
            if ($keyword == '0') {
                // Get all urread messages
                $messages = $messages = Model::factory('Message')->get_read_unread_messages($user->id, 0);
            } elseif ($keyword == '1') {
                // Get all read messages
                $messages = Model::factory('Message')->get_read_unread_messages($user->id, 1);
            } elseif ($keyword == 'all' || $keyword == '') {
                // Get all messages
                $messages = Model::factory('Message')->get_all_messages($user->id);
            }
        } else {
            // Get all default messages
            $messages = Model::factory('Message')->get_all_messages($user->id);
        }
         // Get all messages count 
        $message_count = ORM::factory('Message')->where('receiver_id', '=', $user->id)->and_where('is_message_viewed', '=', 0)->and_where('is_message_active', '=', 1)->or_where(DB::expr( 'NOT FIND_IN_SET(\''.$user->id.'\', '), '', DB::expr('is_event_message_viewed)'))->and_where(DB::expr( 'FIND_IN_SET(\''.$user->id.'\', '), '', DB::expr(' guild_receiver_id )'))->or_where(DB::expr( 'FIND_IN_SET(NULL, '), '', DB::expr('is_event_message_viewed)'))->count_all();
              
         if($message_id != ""):
        	$view_message = Model::factory('Message')->view_message($user->id,$message_id);       
          endif;
        
          $zerg_id = ORM::factory('User')->where('id', '=', $user->id)->find();
          $characters = ORM::factory("CharacterDetail")
                        ->where('user_id', '=', $user->id)
                        ->find_all(); 
          //Get game name in sendas drop down
         $characters = Model::factory('CharacterDetail')->get_game_list($user->id);  
         
         $action = $this->request->action();

         //Get friend name in Send To drop down
         $friends = Model::factory('Message')->get_friendslist($user->id);
         $userzone = ORM::factory('user')->where('id', '=', $user)->find();
         $timezone = $userzone->user_timezone;          
         $this->template->left_content = View::factory('message/left_bar')
                                       ->bind('messages', $messages) 
                                       ->bind('zergid', $zerg_id)
                                       ->bind('char_list', $characters)
                                       ->bind('friends', $friends)
                                       ->bind('characters',$characters)
                                       ->bind('msg_sort', $keyword)
                                       ->bind('action', $action)
                                       ->bind('user', $user);
         
        $this->template->left_content->message_view_block = View::factory('message/message')
                                       ->bind('messages', $messages)
                                       ->bind('timezone',$timezone)
                                       ->bind('action', $action)
                                       ->bind('user', $user);
         
          $this->template->content = View::factory('message/index')
                                       ->bind('messagecount', $message_count)
                                       ->bind('view_message', $view_message)
                                       ->bind('timezone',$timezone)
                                       ->bind('message_type', $action)
                                       ->bind('user', $user);
       
    }
    
    # Compose new message
    public function action_send_message() {
         $user = Auth::instance()->get_user();
          if ($user && HTTP_Request::POST == $this->request->method()) {
              if(!isset($_POST['character']) || $_POST['character'] == NULL || $_POST['character'] == "")
                  $_POST['character'] = 'NULL';
              Model::factory("Message")->add_new_message($user->id, $_POST);
              echo "sent";
          }
         $this->auto_render = FALSE;
        
    }
    
    # Send reply message
    public function action_replymessage() {
         $user = Auth::instance()->get_user();
          if ($user && HTTP_Request::POST == $this->request->method()) {
              $message_id = Arr::get($_POST, 'message_id');
              $parent_message_id = Arr::get($_POST, 'parent_message_id');
              if (!isset($_POST['character']) || $_POST['character'] == null)
              $_POST['character'] = 'NULL';
              if($parent_message_id == NULL || $parent_message_id == "") {
                  $_POST['parent_message'] = $message_id;
                  $_POST['is_message_parent'] = '1';
              }
              else {
                  $messages = ORM::factory('Message')->where('message_id', '=', $parent_message_id)->or_where('user_id', '=', $user->id)->and_where('parent_message_id', '=', $parent_message_id)->and_where('is_message_active', '=', 1)->find_all();
                    foreach ($messages as $message):
                        $message->is_message_parent = '0';
                        $message->save();  
                    endforeach;
                  $_POST['parent_message'] = $parent_message_id;
                  $_POST['is_message_parent'] = '1';
              }
               $reply_message = Model::factory("Message")->add_reply_message($user->id, $_POST);
               
                $message = ORM::factory('Message')
                          ->select('zid_users.*', 'zid_character_details.*')
                          ->join('zid_users', 'INNER')
                          ->on('zid_users.id', '=', 'message.user_id')
                          ->join('zid_character_details', 'LEFT OUTER')
                          ->on('message.character_detail_id', '=', 'zid_character_details.character_detail_id')
                          ->where('message.message_id', '=', $reply_message)
                          ->find();
         }
        $user_zone = ORM::factory('user')->where('id', '=', $user)->find();
        $timezone = $user_zone->user_timezone;
        $this->template = View::factory('template/blank');     
        $this->template->content = View::factory('message/reply_message')
                ->bind('timezone',$timezone) 
                ->bind('message', $message);
        
    }
    
    # To read messages
    public function action_readmessage() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $message_id = Arr::get($_POST, 'message_id');
            $message_type = Arr::get($_POST, 'message_type');
            $parent_message_id = Arr::get($_POST, 'parent_message_id');
            if(!isset($_POST['event_id']) || $_POST['event_id'] == NULL || $_POST['event_id'] == ""):
            $messages = ORM::factory('Message')->where('message_id', '=', $message_id)->or_where('parent_message_id', '=', $parent_message_id)->find_all();
            foreach ($messages as $message):
                if($message->receiver_id == $user->id):
                $message->is_message_viewed = 1;
                $message->save();
                endif;
            endforeach;
            else:
            $event_message = ORM::factory('Message')->where('message_id', '=', $message_id)->find();    
            $user_list = explode(",", $event_message->is_event_message_viewed);
            $userid = in_array($user->id, $user_list);
            if($user->id != $userid){
                $user_list[] = $user->id;
                $array_list = array_filter($user_list);
                $user_list = implode(',', $array_list);
            
                DB::update(ORM::factory('Message')->table_name())
                        ->set(array('is_event_message_viewed' => $user_list))
                        ->where('message_id', '=', $message_id)
                        ->execute(); 
            }
            endif;
            
            $view_message = ORM::factory('Message')
                            ->select('zid_users.*', 'zid_character_details.*', 'zid_guild_members.*', 'zid_events.*', 'zid_guilds.*', array('zid_friends.is_accepted', 'friends_accepted'))
                            ->add_subquery('(SELECT user_timezone FROM zid_users AS user_zid WHERE user_zid.id=message.user_id) AS user_time_zone')
                            ->join('zid_users', 'INNER')
                            ->on('zid_users.id', '=', 'message.user_id')
                            ->join('zid_character_details', 'LEFT OUTER')
                            ->on('message.character_detail_id', '=', 'zid_character_details.character_detail_id')
                            ->join('zid_guild_members', 'LEFT OUTER')
                            ->on('message.character_detail_id', '=', 'zid_guild_members.character_detail_id') 
                            ->join('zid_events', 'LEFT OUTER')
                            ->on('message.event_id', '=', 'zid_events.event_id') 
                            ->join('zid_guilds', 'LEFT OUTER')
                            ->on('message.guild_id', '=', 'zid_guilds.guild_id')
                            ->join('zid_friends', 'LEFT OUTER')
                            ->on('message.user_id', '=', 'zid_friends.user_id')
                            ->on('zid_friends.linked_id', '=', DB::expr($user->id))  
                            ->where('message.message_id', '=', $parent_message_id)
                            ->or_where('message.parent_message_id', '=', $parent_message_id)
                            ->group_by('message.message_id')
                            ->order_by('message.last_modified_date', 'DESC')
                            ->limit(10)     
                            ->find_all()->as_array();

        $message_count = ORM::factory('Message')->where('receiver_id', '=', $user->id)->and_where('is_message_viewed', '=', 0)->or_where(DB::expr( 'NOT FIND_IN_SET(\''.$user->id.'\', '), '', DB::expr('is_event_message_viewed)'))->and_where(DB::expr( 'FIND_IN_SET(\''.$user->id.'\', '), '', DB::expr(' guild_receiver_id )'))->or_where(DB::expr( 'FIND_IN_SET(NULL, '), '', DB::expr('is_event_message_viewed)'))->count_all();     
        $user_zone = ORM::factory('user')->where('id', '=', $user)->find();
        $timezone = $user_zone->user_timezone;
        $this->template = View::factory('template/blank');     
        $this->template->content = View::factory('message/index')
                                  ->bind('messagecount', $message_count)
                                  ->bind('timezone',$timezone) 
                                  ->bind('view_message', $view_message)
                                  ->bind('message_type', $message_type)
                                  ->bind('user', $user);
        }
    }
    
     # Send friend request
     public function action_friend_request_accept() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $request_id = Arr::get($_POST, 'request_id');
            $friend = ORM::factory('Friends')->where('user_id', '=', $request_id)->and_where('linked_id', '=', $user->id)->find();
            if ($friend->is_accepted == 0) {
                $friend->is_accepted = 1;
                $friend->save();
                $lnk_friend = ORM::factory('Friends');
                $lnk_friend->user_id = $user->id;
                $lnk_friend->linked_id = $request_id;
                $lnk_friend->is_accepted = 1;
                $lnk_friend->save();
                $message_id = Arr::get($_POST, 'message_id');
                $message = ORM::factory("Message", $message_id);
                $message->delete();
            }
        }
        $this->auto_render = FALSE;
    }
    
     # Guild membership request
     public function action_membership_request_accept() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $request_id = Arr::get($_POST, 'request_id');
            $char_id = Arr::get($_POST, 'char_id');
            $member = ORM::factory('GuildMembers')->where('user_id', '=', $request_id)->and_where('character_detail_id', '=', $char_id)->find();
            if ($member->is_accepted == 0) {
                $member->is_accepted = 1;
                $member->save();
                $message_id = Arr::get($_POST, 'message_id');
                $message = ORM::factory("Message", $message_id);
                $message->delete();
            }
            $guild = ORM::factory('guild')->select('guild_name')->where('guild_id', '=', $member->guild_id)->find();
            $message = ORM::factory('Message');
            $message->user_id = $user->id;
            $message->guild_id = $member->guild_id;
            $message->receiver_id = $request_id;
            $message->subject = "Membership Accepted";
            $message->message = "Congratulations, your application to ".$guild->guild_name." has been accepted";
            $message->is_message_parent = 1;
            $message->last_modified_date = date('y/m/d h:i:s', time());
            $message->save();
            $this->auto_render = FALSE;
        }
    }
    
    # To delete message
    public function action_delete() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
        $message_id = Arr::get($_POST, 'message_id');
        $message_type = Arr::get($_POST, 'message_type');
        $message = ORM::factory("Message")->where('message_id', '=', $message_id)->find();
        if($message_type != "garbage") {
        if($message->event_id == NULL){  
                $list = explode(",", $message->is_garbage_message);
                $list[] = $user->id;
                $array_list = array_filter($list);
                $list = implode(',', $array_list); 
                Model::factory('Message')->delete_message($message_id, $list);
                $messages = ORM::factory('Message')->where('message_id', '=', $message_id)->find_all();
            foreach ($messages as $message):
                if($message->receiver_id == $user->id):
                $message->is_message_viewed = 1;
                $message->save();
                endif;
            endforeach;                 
        }
        else {
        $event_message = ORM::factory('Message')->where('message_id', '=', $message_id)->find();   //update read message flag starts here 
        $user_list = explode(",", $event_message->is_event_message_viewed);
        $userid = in_array($user->id, $user_list);
        if($user->id != $userid){
        $user_list[] = $user->id;
        $array_list = array_filter($user_list);
        $user_list = implode(',', $array_list);
            
        DB::update(ORM::factory('Message')->table_name())
                    ->set(array('is_event_message_viewed' => $user_list))
                    ->where('message_id', '=', $message_id)
                    ->execute(); 
         } //update read message end here
  
        $receiver_list = explode(",", $message->guild_receiver_id);
        $delete_message = array_search($user->id, $receiver_list);
        if($delete_message !== FALSE):
        unset($receiver_list[$delete_message]);
        endif;
	$garbage_list = explode(",", $message->is_garbage_message);
        $garbage_list[] = $user->id;
        $garbage_array_list = array_filter($garbage_list);
        $garbage_list = implode(',', $garbage_array_list);
        $receiver_list= array_filter($receiver_list);
        $list=implode(',',$receiver_list);

        //update status for sent message
	if($message_type == "sent"):	
	$message->is_garbage_message = $garbage_list;
        $message->is_sent_delete = 1;
        else:
        $message->is_garbage_message = $garbage_list; 
        $message->is_sent_delete = 0;
        endif;
        $message->save();
        }
        }
        else {
            if($message->is_message_deleted == NULL):
            $list = explode(",", $message->is_message_deleted);
            $list[] = $user->id;
            $array_list = array_filter($list);
            $list = implode(',', $array_list); 
            Model::factory('Message')->delete_garbage_message($message_id, $list);
            else:
            $messages = ORM::factory("Message")->where('message_id', '=', $message_id)->or_where('parent_message_id', '=', $message_id)->find_all();
                foreach($messages as $active_message):
                     $active_message->delete();
                endforeach;  
            endif;
        }
         $this->auto_render = FALSE;
        }
    }

    # Deny friend request    
    public function action_friend_deny_request() {
         $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
           $request_id = Arr::get($_POST, 'request_id');
           $friend = ORM::factory('Friends')->where('user_id', '=', $request_id)->and_where('linked_id', '=', $user->id)->find();
           $friend->delete();
           echo "success";
        }  
        $this->auto_render = FALSE;
    }
    
    # To deny guild member request
    public function action_member_deny_request() {
         $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $request_id = Arr::get($_POST, 'request_id');
            $char_id = Arr::get($_POST, 'char_id');
            $member = ORM::factory('GuildMembers')->where('user_id', '=', $request_id)->and_where('character_detail_id', '=', $char_id)->find();
            $member->delete();
            $character = ORM::factory('CharacterDetail')->where('character_detail_id', '=', $char_id)->find();
            $character->guild_id = NULL;
            $character->save();
        }
         $this->auto_render = FALSE;
    }
    
    # get send message in sent tab 
    public function action_sent() {
         $user_id = $this->request->param('id');
         if($user_id != NULL || $user_id != "") :
            $user = ORM::factory('User')->where('id', '=', $user_id)->find();
         else:
            $user = Auth::instance()->get_user();
         endif;
         $timezone = $user->user_timezone; 
         $this->template = View::factory('template/blank_left');
         $messages = Model::factory('Message')->get_sent_messages($user_id);
         $action = $this->request->action();
         $this->template->left_content = View::factory('message/message')
                                       ->bind('messages', $messages)
                                       ->bind('timezone',$timezone)  
                                       ->bind('action', $action)
                                       ->bind('user', $user);
     }
 
     # get load more view messages
     public function action_load_more_old_messages() {
          $user = Auth::instance()->get_user();
          $last_msg = Arr::get($_POST, 'last_msg_id');
          $message_id = Arr::get($_POST, 'message_id');
          $messages = ORM::factory('Message')
                     ->select('zid_users.*', 'zid_character_details.*')
                     ->join('zid_users', 'INNER')
                     ->on('zid_users.id', '=', 'message.user_id')
                     ->join('zid_character_details', 'LEFT OUTER')
                     ->on('message.character_detail_id', '=', 'zid_character_details.character_detail_id')
                     ->where_open()              
                     ->where('message.message_id', '=', $message_id)
                     ->or_where('message.parent_message_id', '=', $message_id)
                     ->where_close()
                     ->and_where('message.message_id', '<', $last_msg)
                     ->group_by('message.message_id')
                     ->order_by('message.last_modified_date', 'DESC')
                     ->limit(10)     
                     ->find_all()->as_array();
           $this->template = View::factory('template/blank');     
           $user_zone = ORM::factory('User')->where('id', '=', $user)->find();
           $timezone = $user_zone->user_timezone;
           $this->template->content = View::factory('message/load_more_old_messages')
                                     ->bind('messages', $messages)
                                     ->bind('timezone',$timezone)        
                                     ->bind('user', $user);
      }
 
     # get messages in garbage tab
     public function action_garbage() {
         $user_id = $this->request->param('id');
          if($user_id != NULL || $user_id != "") :
              $user = ORM::factory('User')->where('id', '=', $user_id)->find();
          else:
              $user = Auth::instance()->get_user();
          endif;
          $timezone = $user->user_timezone; 
          $this->template = View::factory('template/blank_left');
          $messages = Model::factory('Message')->get_garbage_messages($user->id);
          $action = $this->request->action();
          $this->template->left_content = View::factory('message/message')
                                         ->bind('messages', $messages)
                                         ->bind('timezone',$timezone)
                                         ->bind('action', $action)
                                         ->bind('user', $user);
     }
 
     # get load more messages in left panel
     public function action_load_more_messages() {
          $last_msg = Arr::get($_POST, 'last_msg_id');
          echo $last_msg;
          $msg_type = Arr::get($_POST, 'msg_type');
          echo $msg_type;
          $user = Auth::instance()->get_user();
          $user_zone = ORM::factory('User')->where('id', '=', $user)->find();  
          if ($msg_type == 'index') {
              $messages = Model::factory('Message')->get_load_more_inbox_messages($user->id, $last_msg);
              $timezone = $user_zone->user_timezone;
          } elseif ($msg_type == 'sent') {
              $messages = Model::factory('Message')->get_load_more_sent_messages($user->id, $last_msg);
              $timezone = $user_zone->user_timezone;
          } elseif ($msg_type == 'garbage') {
              $messages = Model::factory('Message')->get_load_more_garbage_messages($user->id, $last_msg);
              $timezone = $user_zone->user_timezone; 
          }
          $this->template = View::factory('template/blank');
          $this->template->content = View::factory('message/load_more_messages')
                                    ->bind('messages', $messages)
                                    ->bind('timezone',$timezone)  
                                    ->bind('action', $msg_type)
                                    ->bind('user', $user);
      }
    
     # get reply user name in reply popup
     public function action_get_replyuser() {
          $user_id = Arr::get($_POST, 'user_id');
          $user = Model::factory('User')->get_user($user_id);
          echo $user->username;
          $this->auto_render = FALSE;
     }
}
?>
