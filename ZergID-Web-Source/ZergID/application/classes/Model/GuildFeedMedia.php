<?php

defined('SYSPATH') or die('No direct script access.');

class Model_GuildFeedMedia extends ORM {

    protected $_table_name = 'zid_guild_feed_media';
    protected $_primary_key = 'feed_media_id';

    public function delete_feed_media($feed_id) {
        # Delete feed media by feed id
        $query = DB::delete($this->_table_name)->where('feed_id', '=', $feed_id)->execute();
        return $query;
    }

    public function update_feed_media($feed_id, $media_id) {
        # Update feed media by feed id
        $query = DB::update($this->_table_name)->set(array('feed_id' => $feed_id))->where('feed_media_id', '=', $media_id)->execute();
        return $query;
    }
    
    public function get_feed_media($feed_id) {
        # Get feed media by feed id
        $query = ORM::factory("GuildFeedMedia")->where('feed_id', '=', $feed_id)->find();
        return $query;
    }
    
    public function change_mediadefaultimg($feed_id) {
        # chang default feed image
        $default_image = 'feed_default.jpg';
        $query = DB::query(Database::UPDATE, 'UPDATE zid_guild_feed_media set file_path = "'.$default_image.'"  WHERE feed_id =' .$feed_id)->execute();
        return $query;     
    }

}

?>
