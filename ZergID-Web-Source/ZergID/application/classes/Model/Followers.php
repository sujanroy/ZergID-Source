<?php defined('SYSPATH') or die('No direct script access.');

class Model_Followers extends ORM  {
    protected $_table_name = 'zid_followers';
    protected $_primary_key = 'follower_id';
    protected $_belongs_to = array(
                               'member' => array('model' => 'guildroles', 'foreign_key' => 'guild_role_id'));
    
     public function add_followers($userid, $data) {
        // Add new followers 
        $query = "CALL add_followers('".$userid."','".$data['character']."','".$data['linked_id']."', '".$data['guild_id']."');";
        $insert_id = DB::query(Database::INSERT, $query)->execute();
        return $insert_id;
    }
    
    public function get_followers($user_id) {
        // To get followers
        $followers = DB::select('*')->from($this->_table_name)->where('linked_id', '=', $user_id)->and_where('is_accepted', '=', 1)->as_object()->execute();
        return $followers;
    }
       
      public function select_follower($userid, $linkedid) {
       $query = DB::query(Database::SELECT, 'SELECT * FROM zid_followers where user_id ='.$userid.' AND linked_id ='.$linkedid)->execute()->current();
       return $query;
    }
    
    public function get_user_followers($user_id) {
        // To get user followers
        $query = ORM::factory('Followers')
                ->select('zid_users.*')
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'followers.user_id')
                ->where('followers.linked_id', '=', $user_id)
                ->and_where('followers.is_accepted', '=', 1)
                ->find_all();
        return $query;        
    }
    
    public function get_user_following($user_id) {
        // To get following list
        $query = ORM::factory('Followers')
                ->select('zid_users.*', 'zid_guild_members.*')
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'followers.linked_id')
                ->join('zid_guild_members', 'LEFT OUTER')
                ->on('followers.character_detail_id', '=', 'zid_guild_members.character_detail_id')
                ->where('followers.user_id', '=', $user_id)
                ->and_where('followers.is_accepted', '=', 1)
                ->find_all();
        return $query;
    }
    
    public function get_user_all_followers($user_id) {
        // Get user followers
        $query = DB::select('linked_id')->from($this->_table_name)
                ->where('user_id','=', $user_id)
                ->and_where('is_accepted', '=', 1)
                ->execute()->as_array();
        return $query;
    }
    
}
