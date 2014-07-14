<?php defined('SYSPATH') or die('No direct script access.');

class Model_Friends extends ORM  {
    protected $_table_name = 'zid_friends';
    protected $_primary_key = 'friend_id';
    
     protected $_belongs_to = array(
                               'server' => array('model' => 'Server', 'foreign_key' => 'server_id'),
                               'game' => array('model' => 'Game', 'foreign_key' => 'game_id'),
                               'class' => array('model' => 'Class', 'foreign_key' => 'class_id'),
                               'faction' => array('model' => 'Faction', 'foreign_key' => 'faction_id'),
                               'character' => array('model' => 'Character', 'foreign_key' => 'character_id'),
                               'profession' => array('model' => 'Professions', 'foreign_key' => 'profession1_id'),
                               'media' => array('model' => 'media', 'foreign_key' => 'media_info_id')
                               );
    
    public function add_friends($userid, $data) {
        # add new friends 
        $comment = addslashes($data['comment']);
        $query = "CALL add_friends('".$userid."','".$data['character']."','".$data['linked_id']."', '".$comment."');";
        $insert_id = DB::query(Database::INSERT, $query)->execute();
        return $insert_id;
    }
    
    public function get_friends($user_id) {
        # get all friends 
        $friends = DB::select('*')->from($this->_table_name)->where('linked_id', '=', $user_id)->and_where('is_accepted', '=', 1)->and_where('is_active', '=', 0)->as_object()->execute();
        return $friends;
    }


    public function select_friend($userid, $linkedid) {
       # select friends from list
       $query = DB::query(Database::SELECT, 'SELECT * FROM zid_friends where user_id ='.$userid.' AND linked_id ='.$linkedid)->as_object()->execute()->current();
       return $query;
    }
    
    public function get_user_friends($user_id) {
       # get current user friends
       $query = ORM::factory('Friends')
                ->select('zid_users.*', 'zid_character_details.*')
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'friends.user_id')
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('friends.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->where('friends.linked_id', '=', $user_id)
                ->and_where('friends.is_accepted', '=', 1)
                ->and_where('friends.is_active', '=', 0)
                ->find_all();
         return $query;
    }
    
    public function get_user_all_friends($user_id) {
        # Get all friends
        $query = DB::select('linked_id')->from($this->_table_name)
                ->where('user_id','=', $user_id)
                ->and_where('is_accepted', '=', 1)
                ->execute()
                ->as_array();
        return $query;
    }

}
