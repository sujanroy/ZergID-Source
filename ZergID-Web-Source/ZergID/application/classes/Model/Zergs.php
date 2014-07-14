<?php defined('SYSPATH') or die('No direct script access.');

class Model_Zergs extends ORM  {
    protected $_table_name = 'zid_zergs';
    protected $_primary_key = 'zerg_id';
    
     public function add_zergs($id, $data) {
        # update feed zergs count        
        $query = "CALL add_zergs('".$data['feed_id']."', ".$id.", '".$data['char_id']."', '1');";
        $insert_id = DB::query(Database::INSERT, $query)->execute();
        return $insert_id;
    }
}
