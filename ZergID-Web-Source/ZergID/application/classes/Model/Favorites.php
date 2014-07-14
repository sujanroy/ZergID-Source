<?php defined('SYSPATH') or die('No direct script access.');

class Model_Favorites extends ORM  {
    protected $_table_name = 'zid_favorites';
    protected $_primary_key = 'favorite_id';
    protected $_belongs_to = array(
                               'character' => array('model' => 'CharacterDetail', 'foreign_key' => 'character_detail_id'));
    public function get_favorites($user_id) {
        # Get favorites
        $query = ORM::factory("Favorites")->where('user_id','=',$user_id)->find();
        return $query;
    }
    
    public function save_character_favorites($favorite_id, $list) {
        # Save character_favorites
          $query = DB::update($this->_table_name)
                ->set(array('character_favorite' => $list))
                ->where('favorite_id', '=', $favorite_id)
                ->execute();
        return $query;
    }
    
    public function save_guild_favorites($favorite_id, $list) {
        # Save guild favorites
        $query = DB::update($this->_table_name)
                ->set(array('guild_favorite' => $list))
                ->where('favorite_id', '=', $favorite_id)
                ->execute();
        return $query;
    }
    
    public function get_admin_favorites() {
        # Get favorites
        $query = ORM::factory("Favorites")->find();
        return $query;
    }
}