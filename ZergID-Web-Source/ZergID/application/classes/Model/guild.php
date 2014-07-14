<?php defined('SYSPATH') or die('No direct script access.');

class Model_Guild extends ORM  {
    protected $_table_name = 'zid_guilds';
    protected $_primary_key = 'guild_id';
    protected $_belongs_to = array(
                               'server' => array('model' => 'Server', 'foreign_key' => 'server_id'),
                               'game' => array('model' => 'Game', 'foreign_key' => 'game_id'),
                               'faction' => array('model' => 'Faction', 'foreign_key' => 'faction_id'),
                               'user' => array('model' => 'User', 'foreign_key' => 'user_id'), 
                               );
    
    public function add_guild($userid, $data){
        # add new guild
        $guild_name = addslashes($data['guild_name']);
        $query = "CALL add_guild('".$userid."',".$data['game'].", ".$data['server'].", ".$data['faction'].",
                 '".ucfirst($guild_name)."', '".$data['profileimage']."', '".addslashes($data['guild_bio'])."', '".$data['accept_applicant']."',
                 '".$data['pvp']."','".$data['pve']."', '".$data['rp']."', '".addslashes($data['url'])."', '".addslashes($data['password'])."', '".addslashes($data['service'])."',
                 '".addslashes($data['port'])."','".addslashes($data['second_url'])."','".addslashes($data['second_password'])."','".addslashes($data['second_service'])."'
                  ,'".addslashes($data['second_port'])."','1',@LAST_ID);";
        $result = DB::query(Database::INSERT, $query)->execute();
        $insert_id =DB::query(Database::SELECT,"SELECT @LAST_ID")->execute();
        return $insert_id[0]['@LAST_ID'];
    }

    public function update_guild($userid, $guild_id, $data){
        # edit guild details
        $guild_name = addslashes($data['guild_name']);
        $query = "CALL update_guild('".$userid."','".$guild_id."',".$data['game'].", ".$data['server'].", ".$data['faction'].",
                 '".ucfirst($guild_name)."', '".addslashes($data['guild_bio'])."', '".$data['accept_applicant']."',
                 '".$data['pvp']."','".$data['pve']."', '".$data['rp']."', '".addslashes($data['url'])."', '".addslashes($data['password'])."', 
                 '".addslashes($data['service'])."','".addslashes($data['port'])."','".addslashes($data['second_url'])."','".addslashes($data['second_password'])."',
                 '".addslashes($data['second_service'])."','".addslashes($data['second_port'])."','1');";
        $insert_id = DB::query(Database::INSERT, $query)->execute();
        return $insert_id;
    } 
    
    public function select_characters($userid) {
        # get all character 
        $query = DB::select()->from('zid_character_details')->where('user_id', '=', $userid)->and_where('guild_id', '=', null)->execute();
        return $query;
    }
    
    public function get_guild_list($userid) {
        # get guild full list
        $char_list = DB::select('character_detail_id')->from(ORM::factory('GuildMembers')->table_name())->where('user_id', '=', $userid)->and_where('is_accepted', '=', 1)->execute()->as_array();
       if(count($char_list) > 0):
           $data = $char_list;
       else:
           $data = array(NULL);
       endif;
        
          $guild_list = ORM::factory("guild")
                 ->select('zid_guild_members.guild_member_id', 'zid_guild_members.guild_role_id', 'zid_guild_members.character_detail_id')
                 ->join('zid_guild_members', 'INNER')
                 ->on('guild.guild_id', '=', 'zid_guild_members.guild_id')
                 ->where('zid_guild_members.character_detail_id', 'IN', $data)
                  ->and_where('is_active', '=', 1)
                 ->order_by('guild.guild_name', 'ASC')
                ->find_all();
        return $guild_list;
    }
    
    public function save_profile_image($filename, $guild_id) {
        # save guild profile image
        $query = DB::update(ORM::factory('guild')->table_name())
                ->set(array('guild_logo' => $filename))
                ->where('guild_id', '=', $guild_id)
                ->execute();
        return $query;
    }
    
    public function get_favorite_guilds($guild_ids) {
        # To get favorite guild's
        $query = ORM::factory("guild")->where('guild_id', 'IN', $guild_ids)->where('is_active', '=', '1')->find_all();
        return $query;
    }
    
    public function get_guild($guild_id) {
        # To get guild info
        $query = ORM::factory('guild')->where('guild_id', '=', $guild_id)->and_where('is_active', '=', 1)->find();
        return $query;
    }
    
    public function update_guild_user($user_id, $guild_id) {
        # Update guild user - When promoted as guild leader
        $query = DB::update($this->_table_name)->set(array('user_id' => $user_id))->where('guild_id', '=', $guild_id)->execute();
        return $query;
    }
    
    public function get_admin_guild_list() {
        # get guild full list for admin
        $char_list = DB::select('character_detail_id')->from(ORM::factory('GuildMembers')->table_name())->where('is_accepted', '=', 1)->execute()->as_array();
        if(count($char_list) > 0):
           $data = $char_list;
        else:
           $data = array(NULL);
        endif;
        
        $guild_list = ORM::factory("guild")
                      ->add_subquery('(SELECT COUNT(guild_member_id) FROM zid_guild_members AS guild_member WHERE guild_member.guild_id=guild.guild_id and is_accepted = 1) AS guild_member_count') 
                      ->select('zid_guild_members.guild_member_id', 'zid_guild_members.guild_role_id', 'zid_guild_members.character_detail_id','zid_favorites.guild_favorite')
                      ->join('zid_guild_members', 'INNER')
                      ->on('guild.guild_id', '=', 'zid_guild_members.guild_id')
                      ->join('zid_favorites', 'LEFT OUTER')
                      ->on('zid_favorites.user_id', '=', 'guild.user_id')
                      ->where('zid_guild_members.character_detail_id', 'IN', $data)
                      ->and_where('is_active', '=', 1)
                      ->group_by('guild.guild_id')
                      ->order_by('guild.guild_id', 'DESC')
                      ->find_all();
            return $guild_list;
     }
    
    public function delete_guild($guild_id) {
        # Update guild id
        $query = DB::update($this->_table_name)->set(array('is_active' => 0))->where('guild_id', '=', $guild_id)->execute();
        return $query;
    }
    
    public function change_guilddefaultimg($guild_id) {
        # default image for guild profile
        $default_image ='default.jpeg';
        $query = DB::query(Database::UPDATE, 'UPDATE zid_guilds set guild_logo = "'.$default_image.'" WHERE guild_id =' .$guild_id)->execute();
        return $query;
      } 
      
    public function update_guilddetails($userid, $guild_id, $data){
        # edit guild information in admin 
        $guild_name = addslashes($data['guild_name']);
        $query = "CALL update_guild('".$userid."','".$guild_id."',".$data['guild_game'].", ".$data['guildserver_id'].", ".$data['guildfaction_id'].",
                 '".ucfirst($guild_name)."', '".addslashes($data['guild_bio'])."', '".$data['accept_applicant']."',
                 '".$data['guild_pvp']."','".$data['guild_pve']."', '".$data['guild_rp']."', '".addslashes($data['url_server'])."', '".addslashes($data['password'])."', 
                 '".addslashes($data['service'])."','".addslashes($data['port'])."','".addslashes($data['second_url'])."','".addslashes($data['second_password'])."',
                 '".addslashes($data['second_service'])."','".addslashes($data['second_port'])."','1');";
        $insert_id = DB::query(Database::INSERT, $query)->execute();
        return $insert_id;
    }
      
}   
