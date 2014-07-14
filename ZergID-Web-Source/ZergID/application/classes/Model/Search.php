<?php defined('SYSPATH') or die('No direct script access.');

class Model_Search extends ORM  {
    protected $_table_name = 'zid_characters';
    protected $_primary_key = 'character_id';
   
    public function getZergiId($keyword) {
        # keyword search query
        $query = DB::query(Database::SELECT, 'SELECT zid_users.id, zid_users.username, zid_favorites.favorite_id, GROUP_CONCAT(zid_character_details.character_name) AS char_name FROM zid_users LEFT OUTER JOIN zid_favorites ON (zid_favorites.user_id = zid_users.id) LEFT OUTER JOIN zid_character_details ON FIND_IN_SET(zid_character_details.character_detail_id, zid_favorites.character_favorite) WHERE zid_users.username LIKE "%'.$keyword.'%" GROUP BY  zid_favorites.favorite_id')->as_object()->execute();
        return $query;
    }

}
?>
