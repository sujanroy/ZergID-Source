<?php defined('SYSPATH') or die('No direct script access.');

class Model_Comments extends ORM  {
    protected $_table_name = 'zid_comments';
    protected $_primary_key = 'comment_id';
    
    public function add_comments($id, $data) {
        # Add new comments in feeds screen   
        $data['is_visible']=1;
        $comment = addslashes($data['comment']);
        $query = "CALL add_comments('".$data['feed_id']."', ".$id.", '".$data['char_id']."', '".$comment."');";
        $insert_id = DB::query(Database::INSERT, $query)->execute();
        return $insert_id;
    }
    
     public function delete_comment($comment_id) {
        # Delete comments
        $query = DB::query(Database::DELETE, 'DELETE FROM zid_comments WHERE comment_id =' .$comment_id)->execute();
        return $query;
    }
}
?>
