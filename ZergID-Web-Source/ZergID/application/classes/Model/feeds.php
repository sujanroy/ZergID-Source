<?php defined('SYSPATH') or die('No direct script access.');

class Model_Feeds extends ORM  {
    protected $_table_name = 'zid_feeds';
    protected $_primary_key = 'feed_id';
    protected $_belongs_to = array(
                               'user' => array('model' => 'User', 'foreign_key' => 'id'),
                               'character'=> array('model' => 'CharacterDetail', 'foreign_key' => 'character_detail_id')
                               );
    
    public function add_feeds($id, $media_id, $data) {
        # add new feeds  
        $data['is_visible']=1;
        $feedtext = addslashes($data['feedtext']);
        $feed_rezergtext = addslashes($data['feed_rezergtext']);
        $query = "CALL add_feeds(".$id.", ".$data['shareas'].", $media_id, '".$feedtext."', '".$data['is_visible']."', ".$data['parent_id']." , ".$data['parent_guild_id'].",'".$feed_rezergtext."' , @LAST_ID);";
        $result = DB::query(Database::INSERT, $query)->execute();
        $insert_id =DB::query(Database::SELECT,"SELECT @LAST_ID")->execute();
        return $insert_id[0]['@LAST_ID'];
    }
    
    public function delete_feeds($feed_id) {
        # delete feeds   
        $query = DB::query(Database::DELETE, 'DELETE FROM zid_feeds WHERE feed_id =' .$feed_id)->execute();
        return $query;
    }
    
   public function get_all_feeds($user_id) {
        # Get all feeds from friends and followers
        $friends = DB::select('linked_id')->from(ORM::factory('Friends')->table_name())->where('user_id', '=', $user_id)->and_where('is_accepted', '=', 1)->execute()->as_array();
        $followers = DB::select('linked_id')->from(ORM::factory('Followers')->table_name())->where('user_id', '=', $user_id)->and_where('is_accepted', '=', 1)->execute()->as_array();
        $data = array_merge(array($user_id), $friends, $followers); // Frinds and followers id's
        $query = ORM::factory('feeds')
                ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                ->add_subquery('(SELECT username FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user')
                ->add_subquery('(SELECT id FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_id')
                ->add_subquery('(SELECT profile_image1 FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_profile')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_id')
                 ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_icon')
                ->select('zid_feed_media.*')
                ->join('zid_feed_media', 'LEFT OUTER')
                ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                ->where('feeds.id', 'IN', $data)
                ->and_where('is_visible','=','1')
                ->limit(10)
                ->order_by('feeds.feed_id', 'DESC')
                ->find_all();
        return $query;
    }
    
    public function get_myfeeds($user_id) {
        # Get myfeeds
        $query = ORM::factory('feeds')
                 ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                 ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                 ->add_subquery('(SELECT username FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user')
                ->add_subquery('(SELECT id FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_id')
                ->add_subquery('(SELECT profile_image1 FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_profile')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_id')
                 ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_icon') 
                 ->select('zid_feed_media.*')
                 ->join('zid_feed_media', 'LEFT OUTER')
                 ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                 ->where('feeds.id', '=', $user_id)
                 ->and_where('is_visible','=','1')
                 ->order_by('feeds.feed_id', 'DESC')
                 ->limit(10)
                 ->find_all();
        return $query;
    }
    
    public function get_most_popular_feeds() {
        # Get Most Popular Feeds
        $query = ORM::factory('feeds')
                ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                ->add_subquery('(SELECT username FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user')
                ->add_subquery('(SELECT id FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_id')
                ->add_subquery('(SELECT profile_image1 FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_profile')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_id') 
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_icon')
                ->select('zid_feed_media.*')
                ->join('zid_feed_media', 'LEFT OUTER')
                ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                ->where('is_visible','=','1')
                ->order_by(DB::expr('LENGTH(feeds.zergs)'), 'DESC')
                ->limit(10)
                ->find_all();
        return $query;
    }
   
    public function get_most_recent_feeds() {
        # Get Most Recent Feeds
        $query = ORM::factory('feeds')
                ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                ->add_subquery('(SELECT username FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user')
                ->add_subquery('(SELECT id FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_id')
                ->add_subquery('(SELECT profile_image1 FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_profile')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_id') 
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_icon')
                ->select('zid_feed_media.*')
                ->join('zid_feed_media', 'LEFT OUTER')
                ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                ->where('is_visible','=','1')
                ->order_by('feeds.feed_id', 'DESC')
                ->limit(10)
                ->find_all();
        return $query;
    }
     
    public function get_mygames_feeds($user_id, $game_users) {
        # Get my games feeds
        $query = ORM::factory('feeds')
                 ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                 ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                 ->add_subquery('(SELECT username FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user')
                ->add_subquery('(SELECT id FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_id')
                ->add_subquery('(SELECT profile_image1 FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_profile')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_id')
                 ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_icon')
                 ->select('zid_feed_media.*')
                 ->join('zid_feed_media', 'LEFT OUTER')
                 ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                 ->where('feeds.character_detail_id', 'IN', $game_users)
                 ->and_where('is_visible','=','1')
                 ->order_by('feeds.feed_id', 'DESC')
                 ->limit(10)
                 ->find_all();
        return $query;
    }

    public function get_load_more_all_feeds($data, $lastfeed) {
        # Get load more all feeds
        $query = ORM::factory('feeds')
                 ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                 ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                 ->add_subquery('(SELECT username FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user')
                ->add_subquery('(SELECT id FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_id')
                ->add_subquery('(SELECT profile_image1 FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_profile')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_id')
                  ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_icon')  
                 ->select('zid_feed_media.*')
                 ->join('zid_feed_media', 'LEFT OUTER')
                 ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                 ->where('feeds.id', 'IN', $data)
                 ->and_where('feeds.feed_id', '<', $lastfeed)
                 ->and_where('is_visible','=','1') 
                 ->order_by('feeds.feed_id', 'DESC')
                 ->limit(10)
                 ->find_all();
        return $query;
    }
    
    public function get_load_more_myfeeds($user_id, $lastfeed) {
        # Get load more myfeeds
        $query =  ORM::factory('feeds')
                 ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                 ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                 ->add_subquery('(SELECT username FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user')
                ->add_subquery('(SELECT id FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_id')
                ->add_subquery('(SELECT profile_image1 FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_profile')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_id')
                 ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_icon')
                 ->select('zid_feed_media.*')
                 ->join('zid_feed_media', 'LEFT OUTER')
                 ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                 ->where('feeds.id', '=', $user_id)
                 ->and_where('feeds.feed_id', '<', $lastfeed)
                 ->and_where('is_visible','=','1') 
                 ->order_by('feeds.feed_id', 'DESC')
                 ->limit(10)
                 ->find_all();
        return $query;
    }
    
    public function get_load_more_most_popular_feeds($lastfeed) {
        # Get load more most popular feeds
        $query = ORM::factory('feeds')
                 ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')    
                 ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                 ->add_subquery('(SELECT username FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user')
                ->add_subquery('(SELECT id FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_id')
                ->add_subquery('(SELECT profile_image1 FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_profile')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_id')
                 ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_icon')
                 ->select('zid_feed_media.*')
                 ->join('zid_feed_media', 'LEFT OUTER')
                 ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                 ->where('feeds.feed_id', '<', $lastfeed)
                 ->and_where('is_visible','=','1') 
                 ->order_by(DB::expr('LENGTH(feeds.zergs)'), 'DESC')
                 ->limit(10)
                 ->find_all();
        return $query;
    }
   
    public function get_load_more_most_recent_feeds($lastfeed) {
        # Get load more most popular feeds
        $query = ORM::factory('feeds')
                 ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')    
                 ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                 ->add_subquery('(SELECT username FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user')
                ->add_subquery('(SELECT id FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_id')
                ->add_subquery('(SELECT profile_image1 FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_profile')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_id')
                 ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_icon')
                 ->select('zid_feed_media.*')
                 ->join('zid_feed_media', 'LEFT OUTER')
                 ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                 ->where('feeds.feed_id', '<', $lastfeed)
                 ->and_where('is_visible','=','1') 
                 ->order_by('feeds.feed_id', 'DESC')
                 ->limit(10)
                 ->find_all();
        return $query;
    }
     
    public function get_load_more_mygames_feeds($user_id, $game_users, $lastfeed) {
        # Get load more mygames feeds
         $query = ORM::factory('feeds')
                 ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                 ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                 ->add_subquery('(SELECT username FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user')
                ->add_subquery('(SELECT id FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_id')
                ->add_subquery('(SELECT profile_image1 FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_profile')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character')
                ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_id') 
                 ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_id')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_icon') 
                 ->select('zid_feed_media.*')
                 ->join('zid_feed_media', 'LEFT OUTER')
                 ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                 ->where('feeds.id', 'IN', $game_users)
                 ->and_where('feeds.id', '!=', $user_id)
                 ->and_where('feeds.feed_id', '<', $lastfeed)
                 ->and_where('is_visible','=','1')
                 ->order_by('feeds.feed_id', 'DESC')
                 ->limit(10)
                 ->find_all();
         return $query;
    }
    
    public function manage_feeds($user_id) {       
        # manage all feeds in admin 
        $query = ORM::factory('feeds')
                ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                ->select('zid_feed_media.*')
                ->join('zid_feed_media', 'LEFT OUTER')
                ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')               
                ->limit(50)
                ->order_by('feeds.feed_id', 'DESC')
                ->find_all();
        return $query;
    }
    
    public function get_more_feeds($lastfeed) {
        # load more feeds in admin
        $query = ORM::factory('feeds')
                 ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                 ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                 ->select('zid_feed_media.*')
                 ->join('zid_feed_media', 'LEFT OUTER')
                 ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')          
                 ->where('feeds.feed_id', '<', $lastfeed)
                 ->order_by('feeds.feed_id', 'DESC')
                 ->limit(10)
                 ->find_all();
        return $query;
    }
    
     public function edit_feed_text($data) {
        # edit feed text
        $feed_text = $data['feed_text'];
        $feed_id = addslashes($data['feed_id']);
        $query = DB::query(Database::UPDATE, 'UPDATE zid_feeds set feed_text = "'.$feed_text.'" WHERE feed_id =' .$feed_id)->execute();
        return $query;
     }
     
     public function delete_games($feed_id) {
        # Delete feed from admin screen
        $query = DB::query(Database::UPDATE, 'UPDATE zid_feeds set is_visible = 0 WHERE feed_id =' .$feed_id)->execute();
        return $query;
    }
}
