<?php

defined('SYSPATH') or die('No direct script access.');

class Model_GuildFeeds extends ORM {

    protected $_table_name = 'zid_guild_feeds';

    public function add_guild_feeds($id, $media_id, $data) {
        # add new feeds
        $data['is_visible'] = 1;
        $feedtext = addslashes($data['feedtext']);
        $query = "CALL add_guild_feeds(" . $id . ", '" . $data['guild_id'] . "', '" . $data['shareas'] . "', '" . $data['guild_role_id'] . "', $media_id, '" . $feedtext . "', '" . $data['is_visible'] . "' , " . $data['parent_id'] . ", @LAST_ID);";
        $result = DB::query(Database::INSERT, $query)->execute();
        $insert_id = DB::query(Database::SELECT, "SELECT @LAST_ID")->execute();
        return $insert_id[0]['@LAST_ID'];
    }

    public function delete_feed($feed_id) {
        # Delete guild feed
        $query = DB::delete($this->_table_name)->where('feed_id', '=', $feed_id)->execute();
        return $query;
    }

    public function get_all_feeds($guild_id) {
        # get all feeds   
        $feeds = ORM::factory('GuildFeeds')
                ->add_subquery('(SELECT COUNT(comment_id) FROM zid_guild_comments AS comment WHERE comment.feed_id=guildfeeds.feed_id) AS comments_count')
                ->add_subquery('(SELECT COUNT(*) FROM zid_guild_feeds WHERE parent_feed_id= guildfeeds.feed_id ) AS rezergs_count')
                ->select('zid_character_details.*', 'zid_guild_feed_media.*')
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('guildfeeds.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->join('zid_guild_feed_media', 'LEFT OUTER')
                ->on('guildfeeds.feed_media_id', '=', 'zid_guild_feed_media.feed_media_id')
                ->where('guildfeeds.guild_id', '=', $guild_id)
                ->where('guildfeeds.is_visible', '=', 1)
                ->order_by('guildfeeds.feed_id', 'DESC')
                ->limit(10)
                ->find_all();
        return $feeds;
    }

    public function get_feed($guild_id, $feed_id) {
        # get feed by feed id
        $feed = ORM::factory('GuildFeeds')
                ->select('zid_character_details.*', 'zid_guild_feed_media.*')
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('guildfeeds.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->join('zid_guild_feed_media', 'LEFT OUTER')
                ->on('guildfeeds.feed_media_id', '=', 'zid_guild_feed_media.feed_media_id')
                ->where('guildfeeds.feed_id', '=', $feed_id)
                ->and_where('guildfeeds.guild_id', '=', $guild_id)
                ->find();
        return $feed;
    }

    public function get_guild_members_feed($guild_id, $roles) {
        # guild member feeds
        $feeds = ORM::factory('GuildFeeds')
                ->add_subquery('(SELECT COUNT(comment_id) FROM zid_guild_comments AS comment WHERE comment.feed_id=guildfeeds.feed_id) AS comments_count')
                ->add_subquery('(SELECT COUNT(*) FROM zid_guild_feeds WHERE parent_feed_id= guildfeeds.feed_id ) AS rezergs_count')
                ->select('zid_character_details.*', 'zid_guild_feed_media.*')
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('guildfeeds.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->join('zid_guild_feed_media', 'LEFT OUTER')
                ->on('guildfeeds.feed_media_id', '=', 'zid_guild_feed_media.feed_media_id')
                ->where('guildfeeds.guild_id', '=', $guild_id)
                ->and_where('guildfeeds.guild_role_id', 'IN', $roles)
                ->and_where('guildfeeds.is_visible', '=', 1)
                ->order_by('guildfeeds.feed_id', 'DESC')
                ->limit(10)
                ->find_all();
        return $feeds;
    }

    public function get_guild_more_feeds($guild_id, $lastfeed) {
        # get all more feeds    
        $feeds = ORM::factory('GuildFeeds')
                ->add_subquery('(SELECT COUNT(comment_id) FROM zid_guild_comments AS comment WHERE comment.feed_id=guildfeeds.feed_id) AS comments_count')
                ->add_subquery('(SELECT COUNT(*) FROM zid_guild_feeds WHERE parent_feed_id= guildfeeds.feed_id ) AS rezergs_count')
                ->select('zid_character_details.*', 'zid_guild_feed_media.*')
                ->where('guildfeeds.feed_id', '<', $lastfeed)
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('guildfeeds.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->join('zid_guild_feed_media', 'LEFT OUTER')
                ->on('guildfeeds.feed_media_id', '=', 'zid_guild_feed_media.feed_media_id')
                ->where('guildfeeds.guild_id', '=', $guild_id)
                ->and_where('guildfeeds.is_visible', '=', 1)
                ->order_by('guildfeeds.feed_id', 'DESC')
                ->limit(10)
                ->find_all();
        return $feeds;
    }

    public function get_guild_members_more_feeds($guild_id, $lastfeed, $roles) {
        # guild member more feeds
        $feeds = ORM::factory('GuildFeeds')
                ->add_subquery('(SELECT COUNT(comment_id) FROM zid_guild_comments AS comment WHERE comment.feed_id=guildfeeds.feed_id) AS comments_count')
                ->add_subquery('(SELECT COUNT(*) FROM zid_guild_feeds WHERE parent_feed_id= guildfeeds.feed_id ) AS rezergs_count')
                ->select('zid_character_details.*', 'zid_guild_feed_media.*')
                ->where('guildfeeds.feed_id', '<', $lastfeed)
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('guildfeeds.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->join('zid_guild_feed_media', 'LEFT OUTER')
                ->on('guildfeeds.feed_media_id', '=', 'zid_guild_feed_media.feed_media_id')
                ->where('guildfeeds.guild_id', '=', $guild_id)
                ->and_where('guildfeeds.guild_role_id', 'IN', $roles)
                ->and_where('guildfeeds.is_visible', '=', 1)
                ->order_by('guildfeeds.feed_id', 'DESC')
                ->limit(10)
                ->find_all();
        return $feeds;
    }

    public function delete_all_feeds($guild_id) {
        # Delete all guild feeds
        $query = DB::delete($this->_table_name)->where('guild_id', '=', $guild_id)->execute();
        return $query;
    }

    public function get_guild_feeds($guild_id) {
        # Get guild feeds by guild id
        $query = ORM::factory('GuildFeeds')->where('guild_id', '=', $guild_id)->find_all();
        return $query;
    }
    
    public function update_zergit_list($feed_id, $list) {
        # Update zergit list
        $query = DB::update($this->_table_name)->set(array('zergs' => $list))->where('feed_id', '=', $feed_id)->execute();
        return $query;
    }
    
    public function update_feed($feed_id, $feed_text) {
        # Update feed
        $query = DB::update($this->_table_name)->set(array('feed_text' => $feed_text))->where('feed_id', '=', $feed_id)->execute();
        return $query;
    }
    
     public function get_all_guild_feeds() {
        # get all feeds in admin
        $feeds = ORM::factory('GuildFeeds')
                ->add_subquery('(SELECT COUNT(comment_id) FROM zid_guild_comments AS comment WHERE comment.feed_id=guildfeeds.feed_id) AS comments_count')
                ->add_subquery('(SELECT COUNT(*) FROM zid_guild_feeds WHERE parent_feed_id= guildfeeds.feed_id ) AS rezergs_count')
                ->select('zid_character_details.*', 'zid_guild_feed_media.*')
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('guildfeeds.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->join('zid_guild_feed_media', 'LEFT OUTER')
                ->on('guildfeeds.feed_media_id', '=', 'zid_guild_feed_media.feed_media_id')
                ->where('guildfeeds.is_visible', '=', 1)
                ->order_by('guildfeeds.feed_id', 'DESC')
                ->limit(10)
                ->find_all();
        return $feeds;
    }
    
    public function get_admin_guild_more_feeds($lastfeed) {
        # get all more feeds in admin
        $feeds = ORM::factory('GuildFeeds')
                ->add_subquery('(SELECT COUNT(comment_id) FROM zid_guild_comments AS comment WHERE comment.feed_id=guildfeeds.feed_id) AS comments_count')
                ->add_subquery('(SELECT COUNT(*) FROM zid_guild_feeds WHERE parent_feed_id= guildfeeds.feed_id ) AS rezergs_count')
                ->select('zid_character_details.*', 'zid_guild_feed_media.*')
                ->where('guildfeeds.feed_id', '<', $lastfeed)
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('guildfeeds.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->join('zid_guild_feed_media', 'LEFT OUTER')
                ->on('guildfeeds.feed_media_id', '=', 'zid_guild_feed_media.feed_media_id')
                ->where('guildfeeds.is_visible', '=', 1)
                ->order_by('guildfeeds.feed_id', 'DESC')
                ->limit(10)
                ->find_all();
        return $feeds;
    }
    
     public function guild_feeddelete($feed_id) {
        # delete feed
        $query = DB::query(Database::UPDATE, 'UPDATE zid_guild_feeds set is_visible = 0 WHERE feed_id =' .$feed_id)->execute();
        return $query;
    }

}
