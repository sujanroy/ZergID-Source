<?php defined('SYSPATH') or die('No direct script access.');

class Model_Class extends ORM  {
    protected $_table_name = 'zid_class';
    protected $_primary_key = 'class_id';
    
    public function get_class($game_id,$faction_id) {
        # get class list
        $query = ORM::factory("Class")->where('game_id', '=', $game_id)->and_where('is_active', '=', '1')->and_where('faction_id', '=', $faction_id)->order_by('class_name','ASC')->find_all();
        return $query;
    }
    
    public function save_class($data,$i,$game_id,$faction_data) {
        # Save class Information
        $class_name = addslashes(ucfirst($data['classfields'][$i]));
        $class_game_id = $game_id;
        $class_faction_id = $faction_data;
        $query = "CALL add_class(" . $class_game_id . ",'" .$class_name . "'," .  $class_faction_id . ");";
        $result = DB::query(Database::INSERT, $query)->execute();
        return $result;
    }
    
    public function get_all_class($game_id) {
        # To get all games
        $query = ORM::factory("Class")->where('game_id', '=', $game_id)->and_where('is_active', '=', '1')->order_by('last_modified_date', 'DESC')->find_all();
        return $query;
    }
    
    public function delete_gameclass($game_id) {
        # Delete class from game list
        $query = DB::query(Database::UPDATE, 'UPDATE zid_class set is_active = 0 WHERE game_id =' .$game_id)->execute();
        return $query;       
    }
    
    public function get_faction_class($faction_id) {
        # Get faction class
       $query = ORM::factory('Class')->where('faction_id', '=', $faction_id)->order_by('class_name', 'ASC')->find_all(); 
       return $query;
    }
    
    public function get_serverclass($server_id) {
        # Get faction class
        $query = ORM::factory("Class")->where('server_id', '=', $server_id)->and_where('faction_id', '=', NULL)->and_where('is_active', '=', '1')->order_by('class_name', 'ASC')->find_all();  
        return $query;
    }
  
    public function get_factionclass($faction_id) {
        # Get     
          $query = ORM::factory("Class")->where('faction_id', '=', $faction_id)->and_where('is_active', '=', '1')->order_by('class_name', 'ASC')->find_all();
          return $query;
      }
    
    public function alreadyexit_factionclass($data,$i,$faction_id) {
        # Check same faction name already exist 
        $class_name = addslashes($data['classfields'][$i]);
        $sql = "select count(*) as id from zid_class where class_name = '$class_name' and faction_id = '$faction_id'  and is_active = 1";  
        $rs = mysql_query($sql);
        $row = mysql_fetch_array($rs);
        return $row['id'];
    }
    
    public function edit_class($data) {
        # Edit class name 
        $class_name = addslashes($data['edit_classname']);
        $class_id = $data['class_id'];
        $query = DB::query(Database::UPDATE, 'UPDATE zid_class set class_name = "'.$class_name.'" WHERE class_id =' .$class_id)->execute();
        return $query;        
    }
    
    public function delete_class($class_id) {
        # Delete class 
        $query = DB::query(Database::UPDATE, 'UPDATE zid_class set is_active = 0 WHERE class_id =' .$class_id)->execute();
        return $query;        
    } 
      
    public function delete_serverclass($server_id) {
       # Delete server class 
        $query = DB::query(Database::UPDATE, 'UPDATE zid_class set is_active = 0 WHERE server_id =' .$server_id)->execute();
        return $query;                
    }
 
    public function delete_serverfactionclass($faction_id) {
       # Delete faction class     
        $query = DB::query(Database::UPDATE, 'UPDATE zid_class set is_active = 0 WHERE faction_id =' .$faction_id)->execute();
        return $query;
    } 
      
    public function get_characterfactionclass($faction_id) {
        # get class list
        $query = ORM::factory("Class")->where('faction_id', '=', $faction_id)->and_where('is_active', '=', '1')->order_by('class_name', 'ASC')->find_all();
        return $query;
    }
}
