<?php defined('SYSPATH') or die('No direct script access.');

class Model_Faction extends ORM  {
    protected $_table_name = 'zid_factions';
    protected $_primary_key = 'faction_id';
    
    public function get_factions($game_id) {
        # get factions list
        $query = ORM::factory("Faction")->where('game_id', '=', $game_id)->and_where('is_active', '=', '1')->order_by('faction_name', 'ASC')->find_all();
        return $query;
    }
   
    public function save_faction($data,$i,$game_id){
        # save faction
        $faction_name = addslashes(ucfirst($data['factionfields'][$i]));
        $faction_game_id = $game_id;
        $query = "CALL add_faction(".$faction_game_id.",'".$faction_name."', @LAST_ID);";
        $result = DB::query(Database::INSERT, $query)->execute();
        $insert_id =DB::query(Database::SELECT,"SELECT @LAST_ID")->execute();
        return $insert_id[0]['@LAST_ID'];        
    }

    public function get_all_faction() {
        # To get all faction
        $query = ORM::factory("Faction")->where('is_active', '=', '1')->order_by('last_modified_date', 'DESC')->find_all();
        return $query;
    }
    
    public function delete_gamefaction($game_id) {
        # Delete game faction
        $query = DB::query(Database::UPDATE, 'UPDATE zid_factions set is_active = 0 WHERE game_id =' .$game_id)->execute();
        return $query;        
    }
    
    public function delete_faction($faction_id) {
        # Delete faction by faction id 
        $query = DB::query(Database::UPDATE, 'UPDATE zid_factions set is_active = 0 WHERE faction_id =' .$faction_id)->execute();
        return $query;        
    }

    public function delete_serverfaction($server_id) {
        # Delete faction by server id        
        $query = DB::query(Database::UPDATE, 'UPDATE zid_factions set is_active = 0 WHERE server_id =' .$server_id)->execute();
        return $query;
    }
    
    public function get_serverfactionid($server_id){
        # Get faction id
        $sql = "select faction_id as id from zid_factions where server_id = '$server_id'";
        $rs = mysql_query($sql);
        $row = mysql_fetch_array($rs);
        return $row['id'];
    }
    
    public function get_all_factions($game_id) {
       # get factions list
       $query = ORM::factory("Faction")->where('game_id', '=', $game_id)->and_where('is_active', '=', '1')->order_by('last_modified_date', 'DESC')->find_all();
       return $query;
    }
   
   public function get_serverfactions($server_id) {
        # get factions list
        $query = ORM::factory("Faction")->where('server_id', '=', $server_id)->and_where('is_active', '=', '1')->order_by('faction_name', 'ASC')->find_all();
        return $query;
    }
    
    public function get_gamefactions($game_id) {
        # get factions list
        $query = ORM::factory("Faction")->where('game_id', '=', $game_id)->and_where('is_active', '=', '1')->order_by('faction_name', 'ASC')->find_all();
        return $query;
    }
    
    public function edit_factions($data) {
        # edit faction
        $faction_name = addslashes($data['edit_factionname']);
        $faction_id = $data['edit_factionid'];
        $query = DB::query(Database::UPDATE, 'UPDATE zid_factions set faction_name = "'.$faction_name.'" WHERE faction_id =' .$faction_id)->execute();
        return $query;
    }
    
    public function alreadyexit_gamefaction($data,$i,$game_id) {
        # check same faction already exist
        $faction_name = addslashes($data['factionfields'][$i]);
        $sql = "select count(*) as id from zid_factions where faction_name = '$faction_name' and game_id = '$game_id'  and is_active = 1";
        $rs = mysql_query($sql);
        $row = mysql_fetch_array($rs);
        return $row['id'];
    }
    
    public function get_faction($faction_id) {
        # get faction by faction id
        $query = ORM::factory("Faction")->where('faction_id', '=', $faction_id)->and_where('is_active', '=', '1')->find_all();
        return $query;
    }

}
