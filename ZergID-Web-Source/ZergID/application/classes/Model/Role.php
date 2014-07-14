<?php defined('SYSPATH') or die('No direct script access.');

class Model_Role extends ORM  {
    protected $_table_name = 'zid_roles';
    protected $_primary_key = 'role_id';
  
   public function add_role($rolename){   
        # add new role in admin 
        $query = "CALL add_role('".$rolename."',@LAST_ID);";
        $result = DB::query(Database::INSERT, $query)->execute();
        $insert_id =DB::query(Database::SELECT,"SELECT @LAST_ID")->execute();
        return $insert_id[0]['@LAST_ID'];
    }
    
    public function edit_role($data) {
        # edit role
        $role_name = addslashes($data['edit_rolename']);
        $role_id = $data['edit_roleid'];
        $query = DB::query(Database::UPDATE, 'UPDATE zid_roles set role_name = "'.$role_name.'" WHERE role_id =' .$role_id)->execute();
        return $query;
    }

}
