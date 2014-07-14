<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User_Token extends Model_Auth_User_Token {
    
 protected $_table_name = 'zid_user_tokens';
 protected $_primary_key = 'token_id';
	// This class can be replaced or extended

} // End User Token Model