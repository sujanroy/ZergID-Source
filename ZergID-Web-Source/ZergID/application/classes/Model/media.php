<?php defined('SYSPATH') or die('No direct script access.');

class Model_Media extends ORM  {
    protected $_table_name = 'zid_media_info';
    protected $_primary_key = 'media_info_id';
    
     public function add_media($userid, $filename, $url){    
        # add media in feeds 
        $query = "CALL add_media('".$userid."', '0','".$filename."' ,'".$url."','1', @LAST_ID);";
        $result = DB::query(Database::INSERT, $query)->execute();
        $insert_id =DB::query(Database::SELECT,"SELECT @LAST_ID")->execute();
        return $insert_id[0]['@LAST_ID'];
    }

    public function get_uploaded_media($char_id, $media_id) {
        # add media in character screen
        $feed_media_id =DB::select('feed_media_id')->from(ORM::factory('feeds')->table_name())->where('character_detail_id', '=', $char_id)->execute()->as_array();
        if(count($feed_media_id) == 0) {
            $feed_media_id = array(NULL);
        }
        $feed_media = DB::select('file_path', 'youtube_url', 'created_date')->from(ORM::factory('FeedMedia')->table_name())->where('feed_media_id', 'IN', $feed_media_id)->order_by('created_date', 'DESC');
        $media = DB::select('file_path', 'youtube_url', 'created_date')->union($feed_media)->from($this->_table_name)->where('media_info_id','IN', $media_id)->and_where('is_active','=','1')->as_object()->execute();
        return $media;
    }
    
    public function get_existing_banners($user_id) {
        # To get default banners
        $query = ORM::factory('media')->where('is_default', '=', 1)->or_where('is_banner', '=', 1)->and_where('user_id', '=', $user_id)->find_all();
        return $query;
    }
    
    public function get_banner($banner_id) {
        # To get banner
        $query = ORM::factory('media')->where('media_info_id', '=', $banner_id)->find();
        return $query;
    }
    
    public function remove_existing_banner($banner_id){
        # remove existing banner image in feeds screen
        $query = DB::query(Database::DELETE, 'DELETE FROM zid_media_info WHERE media_info_id =' .$banner_id)->execute();
        return $query;
    }

}
