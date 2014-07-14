<?php defined('SYSPATH') or die('No direct script access.');

class Model_CharacterDetail extends ORM  {
    protected $_table_name = 'zid_character_details';
    protected $_primary_key = 'character_detail_id';
    protected $_belongs_to = array(
                               'server' => array('model' => 'Server', 'foreign_key' => 'server_id'),
                               'game' => array('model' => 'Game', 'foreign_key' => 'game_id'),
                               'class' => array('model' => 'Class', 'foreign_key' => 'class_id'),
                               'faction' => array('model' => 'Faction', 'foreign_key' => 'faction_id'),
                               'character' => array('model' => 'Character', 'foreign_key' => 'character_id'),
                               'profession' => array('model' => 'Professions', 'foreign_key' => 'profession1_id'),
                               'profession2' => array('model' => 'Professions', 'foreign_key' => 'profession2_id'),
                               'profession3' => array('model' => 'Professions', 'foreign_key' => 'profession3_id'),
                               'media' => array('model' => 'media', 'foreign_key' => 'media_info_id'),
                               'user' => array('model' => 'User', 'foreign_key' => 'user_id')
                               );
    
    public function add_character($userid, $data){
        # Add new character
        $character_name = addslashes($data['character_name']);
        $query = "CALL add_character('".$userid."',".$data['character'].",".$data['game'].", ".$data['server'].", ".$data['faction'].", ".$data['classid'].", ".$data['profession1'].", ".$data['profession2'].", ".$data['profession3'].", '".$data['character_icon']."', '".ucfirst(trim($character_name))."', '".$data['pve']."','".$data['pvp']."','".$data['rp']."','".$data['level']."','".addslashes($data['bio'])."','".$data['enable_minibio']."', @LAST_ID);";
        $result = DB::query(Database::INSERT, $query)->execute();
        $insert_id =DB::query(Database::SELECT,"SELECT @LAST_ID")->execute();
        return $insert_id[0]['@LAST_ID'];
    }
    public function update_character($userid, $character_id, $data){
        # Edit character detail  
        $query = "CALL update_character('".$userid."',".$character_id.",".$data['character'].", ".$data['server'].", ".$data['faction'].", ".$data['classid'].", ".$data['profession1'].", ".$data['profession2'].", ".$data['profession3'].", '".$data['character_icon']."', '".$data['pve']."','".$data['pvp']."','".$data['rp']."','".$data['level']."','".addslashes($data['bio'])."','".$data['enable_minibio']."');";
        $insert_id = DB::query(Database::UPDATE, $query)->execute();
        return $insert_id;
    }
    
    public function save_profile_image($filename, $charid) {
        # Save Profile image
      $query =  DB::update(ORM::factory('CharacterDetail')->table_name())
                ->set(array('character_icon' => $filename))
                ->where('character_detail_id', '=', $charid)
                ->execute();
      return $query;
    }
    
    public function get_character_full_list($user_id) {
        # To get character full list
        $query = ORM::factory("CharacterDetail")
                ->select('zid_guild_members.*')
                ->join('zid_guild_members', 'LEFT OUTER')
                ->on('zid_guild_members.character_detail_id', '=', 'characterdetail.character_detail_id')
                ->where('characterdetail.user_id', '=', $user_id)
                 ->and_where('is_public', '=', '1')
                ->order_by('characterdetail.character_detail_id', 'DESC')
                ->find_all();
        return $query;
    }
    
    public function get_game_list($user_id) {
        # To get game information in share as and send to drop-down
        $query = ORM::factory("CharacterDetail")
                ->select('zid_games.*')
                ->join('zid_games', 'LEFT OUTER')
                ->on('zid_games.id', '=', 'characterdetail.game_id')
                ->where('characterdetail.user_id', '=', $user_id)
                ->and_where('is_public', '=', '1')       
                ->order_by('character_name', 'ASC')  
                ->find_all();
        return $query;
    }
    
    public function get_characters($user_id) {
        # To get characters
        $query = ORM::factory("CharacterDetail")
                 ->where('user_id','=', $user_id)
                 ->and_where('is_public','=', 1)
                 ->order_by('character_detail_id', 'DESC')
                 ->find_all();
         return $query;
     }
    
    public function get_favorite_characters($char_ids) {
        # To get favorite characters
        $query = ORM::factory("CharacterDetail")->where('character_detail_id', 'IN', $char_ids)->and_where('is_public', '=', '1')->find_all();
        return $query;
    }
    
    public function get_character($char_id) {
        # To get character by character id
        $query = ORM::factory('CharacterDetail')->where('character_detail_id', '=', $char_id)->find();
        return $query;
    }
    
    public function save_media_info($char_id, $list) {
        # Save media info
      $query = DB::update($this->_table_name)
                ->set(array('media_info_id' => $list))
                ->where('character_detail_id', '=', $char_id)
                ->execute();
      return $query;
    }
    
    public function get_other_profile_character_list($user_id) {
        # To get other profile character list
        $query = ORM::factory("CharacterDetail")
                  ->where('user_id','=', $user_id)
                  ->and_where('is_public','=', 1)
                  ->order_by('character_detail_id', 'DESC')
                  ->find_all();
         return $query;
    }
    
    public function save_guild_character($guild_id, $char_id) {
        # Update guild id 
       $query = DB::update($this->_table_name)
                ->set(array('guild_id' => $guild_id))
                ->where('character_detail_id', '=', $char_id)
                ->execute();
       return $query;
    }
    
    public function get_guild_character($user_id, $guild_id) {
        # Get guild character
        $query = ORM::factory('CharacterDetail')->where('guild_id', '=', $guild_id)->and_where('user_id', '=', $user_id)->find();
        return $query;
    }
    
    public function remove_guild_character($guild_id) {
        # Remove character from guild
        $query =  DB::update($this->_table_name)
                   ->set(array('guild_id' => null))
                   ->where('guild_id', '=', $guild_id)
                   ->execute();
        return $query;
    }
    
     public function remove_guild_member_character($guild_id, $char_id) {
        # Remove character member from guild
        $query =  DB::update($this->_table_name)
                   ->set(array('guild_id' => null))
                   ->where('guild_id', '=', $guild_id)
                   ->and_where('character_detail_id', '=', $char_id)
                   ->execute();
        return $query;
    }
    
    public function get_chracters_list($user_id, $server_id, $faction_id) {
        # Get all characters
        $query = ORM::factory('CharacterDetail')
                ->where('server_id', '=', $server_id)
                ->and_where('faction_id', '=', $faction_id)
                ->and_where('user_id', '=', $user_id)
                ->and_where('guild_id', '=', NULL)
                ->order_by('character_name', 'ASC')
                ->find_all();
        return $query;
    }
   
    public function all_game_user($user_id) {
       # To get game_id
       $game_id = DB::select('game_id')->from($this->_table_name)->where('user_id', '=', $user_id)->and_where('is_public','=','1')->execute()->as_array();
       # To select user_id in game_id     
       $query = DB::select('user_id')->from($this->_table_name)->where('game_id', 'IN', $game_id)->execute()->as_array();
        return $query;
    }
    

    public function get_game_users($user_id, $all_gameuser) {
        # Get same game users        
       $query = DB::select('character_detail_id')->from($this->_table_name)
                ->where('game_id', 'IN', DB::select('game_id')->from($this->_table_name)
                ->where('user_id', '=', $user_id)->execute()->as_array())->and_where('user_id', 'IN', $all_gameuser)->execute()->as_array();
        return $query;
    }
    
     public function get_admin_character_list() {
        # To get favorite characters
        $query = ORM::factory("CharacterDetail")
                ->select('zid_favorites.*')
                ->join('zid_favorites', 'LEFT OUTER')
                ->on('zid_favorites.user_id', '=', 'characterdetail.user_id')
                ->where('is_public', '=', '1')
                ->order_by('characterdetail.character_detail_id', 'DESC')      
                ->find_all();
        return $query;
    }

     public function change_chardefaultimg($character_id) {
        # Set default character image in admin
        $default_image ='default.jpeg';
        $query = DB::query(Database::UPDATE, 'UPDATE zid_character_details set character_icon = "'.$default_image.'" WHERE character_detail_id =' .$character_id)->execute();
        return $query;
      }
 
       public function delete_character($character_id) {
        # Delete character in admin
        $query = DB::query(Database::UPDATE, 'UPDATE zid_character_details set is_public = 0 WHERE character_detail_id =' .$character_id)->execute();
        return $query;
      } 

      public function edit_characterdetails($data,$character_id,$userid) {
       # Edit character details in admin
         $query = "CALL update_character('".$userid."',".$character_id.",".$data['characterrole_id'].", ".$data['characterserver_id'].", ".$data['characterfaction_id'].", ".$data['characterclass_id'].", ".$data['characterprofession_id1'].", ".$data['characterprofession_id2'].", ".$data['characterprofession_id3'].",'".$data['character_icon']."', '".$data['character_pve']."','".$data['character_pvp']."','".$data['character_rp']."','".$data['character_level']."','".addslashes($data['character_bio'])."','".$data['characterenable_mini_bio']."');";
         $insert_id = DB::query(Database::UPDATE, $query)->execute();
         echo $insert_id;
      } 

      public function get_characters_send($user_id,$data,$friend_character_id){
          # To get SendTo characters for event
          $query = ORM::factory("CharacterDetail")
                ->select('zid_users.*') 
                ->join('zid_users', 'LEFT OUTER')
                ->on('zid_users.id', '=', 'characterdetail.user_id')      
                ->where('characterdetail.game_id', '=', $data['game_id'])
                ->and_where('characterdetail.server_id', '=', $data['server_id'])
                ->and_where('characterdetail.faction_id', '=', $data['faction_id'])
                ->and_where('characterdetail.user_id', 'IN', $friend_character_id)
                ->and_where('characterdetail.is_public', '=', 1) 
                ->order_by('characterdetail.user_id', 'ASC')        
                ->find_all();
         return $query;   
      }

      public function add_character_event($id,$data,$character_userid,$event_next_date) {
          # Save character create event
          $description = addslashes($data['event_desc']);
          //for character event creation guild id will be Zero
          $guild_id = "NULL";
          $event_attendance = 0;
          $event_officers = 0;
          $event_members = 0;
          $sendto_user = $id.','.$character_userid;
          $query = "CALL add_event(".$id.", ".$data['guild_id'].", '".$data['charid']."', '".ucfirst(addslashes($data['event_name']))."', '".$description."', '".$data['event_date']."', '".$event_next_date."',  '".$data['event_from_date']."', '".$data['event_to_date']."', '".$event_attendance."', '".$event_officers."', '".$event_members."','".$sendto_user."','".$data['event_send_to']."', '".$data['event_rsvp']."','".$data['event_timezone']."', @LAST_ID);";
          $result = DB::query(Database::INSERT, $query)->execute();
          $insert_id =DB::query(Database::SELECT,"SELECT @LAST_ID")->execute();
          return $insert_id[0]['@LAST_ID'];
    }
    
    public function get_guildcharacter_forum($guild_id) {
        # Get guild character
        $query = ORM::factory('CharacterDetail')->where('guild_id', '=', $guild_id)->find();
        return $query;
    }
}
