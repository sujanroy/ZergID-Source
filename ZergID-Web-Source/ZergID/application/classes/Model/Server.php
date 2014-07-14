<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Server extends ORM {

    protected $_table_name = 'zid_servers';

    public function get_servers($game_id) {
        # get servers list
        $query = ORM::factory("Server")->where('game_id', '=', $game_id)->and_where('is_active', '=', '1')->order_by('server_name', 'ASC')->find_all();
        return $query;
    }

    public function save_server($data,$i,$game_id) {
        # save new server name 
        $server_name = addslashes(ucfirst($data['dynfields'][$i]));
        $query = "CALL add_server(" . $game_id . ",'" . $server_name . "', @LAST_ID);";
        $result = DB::query(Database::INSERT, $query)->execute();
        $insert_id =DB::query(Database::SELECT,"SELECT @LAST_ID")->execute();
        return $insert_id[0]['@LAST_ID'];
    }
    
    public function get_all_server() {
        # To get all games
        $query = ORM::factory("Server")->where('is_active', '=', '1')->order_by('last_modified_date', 'DESC')->find_all();
        return $query;
    }
    
    public function delete_gameserver($game_id) {
        # delete server by game id
        $query = DB::query(Database::UPDATE, 'UPDATE zid_servers set is_active = 0 WHERE game_id =' .$game_id)->execute();
        return $query;
    }
    
    public function delete_server($server_id) {
        # delete server by server id
        $query = DB::query(Database::UPDATE, 'UPDATE zid_servers set is_active = 0 WHERE id =' .$server_id)->execute();
        return $query;
    }
    
     public function edit_servers($data) {
        # edit server name
        $server_name = addslashes($data['edit_servername']);
        $server_id = $data['edit_serverid'];
        $query = DB::query(Database::UPDATE, 'UPDATE zid_servers set server_name = "'.$server_name.'" WHERE id =' .$server_id)->execute();
        return $query;
    }
    
    public function alreadyexit_server($data,$i,$game_id) {
        # check server name already exist 
        $server_name = addslashes($data['dynfields'][$i]);
        $sql = "select count(*) as id from zid_servers where server_name = '$server_name' and game_id = '$game_id' and is_active = 1";
        $rs = mysql_query($sql);
        $row = mysql_fetch_array($rs);
        return $row['id'];
    }

}
