<?php defined('SYSPATH') or die('No direct script access.');

class Model_Game extends ORM  {
    protected $_table_name = 'zid_games';
    
    public function save_game($userid, $data){
        # Save new game name 
        $game_name = addslashes(ucfirst($data['text_name']));
        $server_id = 0;
        $game_description = 'testing';
        if($game_name!='NULL'){
            $query = "CALL add_game('".$userid."',".$server_id.",'".trim($game_name)."', '".$game_description."', @LAST_ID);";
            $result = DB::query(Database::INSERT, $query)->execute();
            $insert_id =DB::query(Database::SELECT,"SELECT @LAST_ID")->execute();
            return $insert_id[0]['@LAST_ID'];
        }
    }
    public function get_all_games() {
        # To get all games
       $query = ORM::factory("Game")->where('is_active', '=', '1')->order_by('last_modified_date', 'DESC')->find_all();
       return $query;
    }
    
     public function get_all_alpgames() {
        # To get all games
       $query = ORM::factory("Game")->where('is_active', '=', '1')->order_by('game_name', 'ASC')->find_all();
       return $query;
     }
    
     public function delete_games($game_id) {
        # delete game name    
        $query = DB::query(Database::UPDATE, 'UPDATE zid_games set is_active = 0 WHERE id =' .$game_id)->execute();
        return $query;
    }
        
    public function get_GameId($game_name) {
        # get game id
        $sql = "select id from zid_games where game_name = '$game_name'";
        $rs = mysql_query($sql);
        $row = mysql_fetch_array($rs);
        return $row[0];
     }
   
     public function edit_games($data) {
        # edit game name
        $game_name = addslashes($data['game_name']);
        $game_id = addslashes($data['game_id']);
        $query = DB::query(Database::UPDATE, 'UPDATE zid_games set game_name = "'.trim($game_name).'" WHERE id =' .$game_id)->execute();
        return $query;
     }

     public function getgamelist($game_name) {
        # search game name in admin         
        $query = ORM::factory("Game")->where('game_name', 'LIKE', '%' . $game_name . '%')->find_all();
       return $query;
    }
}
