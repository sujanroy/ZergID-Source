<?php defined('SYSPATH') or die('No direct script access.');

class Model_FeedMedia extends ORM  {
    protected $_table_name = 'zid_feed_media';
    protected $_primary_key = 'feed_media_id';
        
    public function change_mediadefaultimg($feed_id) {
        # Set default feed image
        $default_image = 'feed_default.jpg';
        $query = DB::query(Database::UPDATE, 'UPDATE zid_feed_media set file_path = "'.$default_image.'"  WHERE feed_id =' .$feed_id)->execute();
        return $query;        
    }
}
?>
