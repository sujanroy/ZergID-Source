<?php defined('SYSPATH') or die('No direct script access.');

class Model_Professions extends ORM  {
    protected $_table_name = 'zid_professions';
    protected $_primary_key = 'profession_id';
   
    public function get_professions($game_id) {
        # Get professions list
        $query = ORM::factory("Professions")->where('game_id', '=', $game_id)->and_where('is_active', '=', '1')->order_by('profession_name', 'ASC')->find_all();
        return $query;
    }
    
    public function save_professions($data,$i,$game_id) {
        # save new profession
        $profession_name = addslashes(ucfirst($data['professionfields'][$i]));
        $profession_game_id = $game_id;
        $query = "CALL add_profession(" . $profession_game_id . ",'" . $profession_name . "');";
        $result = DB::query(Database::INSERT, $query)->execute();
        return $result;
    }

    public function get_all_profession() {
        # To get all games
        $query = ORM::factory("Professions")->where('is_active', '=', '1')->order_by('last_modified_date', 'DESC')->find_all();
        return $query;
    }
    
    public function delete_gameprofession($game_id) {
        # delete profession by game id 
        $query = DB::query(Database::UPDATE, 'UPDATE zid_professions set is_active = 0 WHERE game_id =' .$game_id)->execute();
        return $query;
    }
    
    public function delete_profession($profession_id) {
        # delete profession by profession id
        $query = DB::query(Database::UPDATE, 'UPDATE zid_professions set is_active = 0 WHERE profession_id =' .$profession_id)->execute();
        return $query;
    }

    public function get_all_professions($game_id) {
       # get factions list
       $query = ORM::factory("Professions")->where('game_id', '=', $game_id)->and_where('is_active', '=', '1')->order_by('profession_name', 'ASC')->find_all();
       return $query;
   }
   
   public function edit_profession($data) {
       # edit profession
        $profession_name = addslashes($data['edit_professionname']);
        $profession_id = $data['edit_professionid'];
        $query = DB::query(Database::UPDATE, 'UPDATE zid_professions set profession_name = "'.$profession_name.'" WHERE profession_id =' .$profession_id)->execute();
        return $query;
    }

    public function alreadyexit_profession($data,$i,$game_id) {
        # check same profession already exist
        $profession_name = addslashes($data['professionfields'][$i]);
        $sql = "select count(*) as id from zid_professions where profession_name = '$profession_name' and game_id = '$game_id' and is_active = 1";
        $rs = mysql_query($sql);
        $row = mysql_fetch_array($rs);
        return $row['id'];
    }
}
