<?php

defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends Model_Auth_User {

    protected $_table_name = 'zid_users';

    public function get_user($id) {
        $query = ORM::factory('User')->where('id', '=', $id)->and_where('is_active', '=', NULL)->and_where('is_deleted','=',1)->find();
        return $query;
    }

}

// End User Model
