<?php defined('SYSPATH') or die('No direct script access.');

class Model_GuildComments extends ORM  {
    protected $_table_name = 'zid_guild_comments';
    protected $_primary_key = 'comment_id';
    
    public function add_comments($id, $data) {
        # add new in guild feeds  
        $data['is_visible']=1;        
        $query = "CALL add_guild_comments('".$data['feed_id']."', ".$id.",  '".$data['guild_id']."', '".$data['char_id']."', '".addslashes($data['comment'])."');";
        $insert_id = DB::query(Database::INSERT, $query)->execute();
        return $insert_id;
    }
    
    public function get_comments($feed_id) {
        # get all comments
        $comment = ORM::factory('GuildComments')
                   ->select('zid_users.*','zid_character_details.*')
                   ->join('zid_users', 'INNER')
                   ->on('zid_users.id', '=', 'guildcomments.user_id')
                   ->join('zid_character_details', 'LEFT OUTER')
                   ->on('guildcomments.character_detail_id', '=', 'zid_character_details.character_detail_id')
                   ->where('guildcomments.feed_id', '=', $feed_id)
                   ->order_by('guildcomments.comment_id', 'DESC'); 
        return $comment;
    }
    
    public function get_comments_more($feed_id, $last_comment) {
        # get more comments
        $comments = ORM::factory('GuildComments')
                    ->select('zid_users.*','zid_character_details.*')
                    ->where('guildcomments.comment_id', '<', $last_comment)
                    ->join('zid_users', 'INNER')
                    ->on('zid_users.id', '=', 'guildcomments.user_id')
                    ->join('zid_character_details', 'LEFT OUTER')
                    ->on('guildcomments.character_detail_id', '=', 'zid_character_details.character_detail_id')
                    ->where('guildcomments.feed_id', '=', $feed_id)
                    ->order_by('guildcomments.comment_id', 'DESC')
                    ->limit(10)
                    ->find_all();
        return $comments;
    }
    
    public function delete_all_comments($guild_id) {
        # Delete all comments from guild
        $query = DB::delete($this->_table_name)->where('guild_id', '=', $guild_id)->execute();
        return $query;
    }
    
    public function delete_feed_comments($feed_id) {
        # Delete feed comments by feed id
        $query = DB::delete($this->_table_name)->where('feed_id', '=', $feed_id)->execute();
        return $query;
    }

    public function get_guild_comments($feed_id) {
        # Get guild comments
        $query = ORM::factory("GuildComments")->where('feed_id', '=', $feed_id)->find_all();
        return $query;
    }
    
    public function get_comment($comment_id) {
        # Get guild feed comment
        $query = ORM::factory('GuildComments')->where('comment_id', '=', $comment_id)->find();
        return $query;
    }
    
    public function update_zergit_list($comment_id, $list) {
        # Update comment zergit list
        $query =  DB::update($this->_table_name)->set(array('zergs' => $list))->where('comment_id', '=', $comment_id)->execute();
        return $query;
    }
    
    public function delete_guildcomment($comment_id) {
        # delete guild comments in admin
        $query = DB::query(Database::DELETE, 'DELETE FROM zid_guild_comments WHERE comment_id =' .$comment_id)->execute();
        return $query;
    }
}
?>
