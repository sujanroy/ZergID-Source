<?php defined('SYSPATH') or die('No direct script access.');

class Model_Profile extends ORM  {
    protected $_table_name = 'zid_personal_info';
    
    public function create_profile($id, $data) {
        // Create a new user record in the database
        $query = "CALL add_personal_info(".$id.", '".addslashes($data['firstname'])."', '".addslashes($data['lastname'])."', '".$data['birthyear']."', '".$data['gender']."', '".addslashes($data['bio'])."', '".$data['country']."', '".$data['is_twitter_share']."', '".$data['is_facebook_share']."', '".NULL."', '".NULL."');";
        $insert_id = DB::query(Database::INSERT, $query)->execute();
        return $insert_id;
    }

    public function update_profile($id, $data) {
        // Call store procedure to update profile
        $query = "CALL update_personal_info('".$data['email']."',".$id.", '".addslashes($data['firstname'])."', '".addslashes($data['lastname'])."', '".$data['birthyear']."', '".$data['gender']."', '".addslashes($data['bio'])."', '".$data['country']."', '".$data['is_twitter_share']."', '".$data['is_facebook_share']."', '".NULL."', '".NULL."');";
        $insert_id = DB::query(Database::UPDATE, $query)->execute();
        return $insert_id;
    }

    public function get_profile($user_id) {
        // To get personal information.
        $query = ORM::factory('profile')->where('user_id', '=', $user_id)->find();
        return $query;
    }

    public function update_profileimage($user_id, $data) {
        // Update profile image 
        $query = DB::update('zid_users')
                ->set(array('profile_image1' => $data, 'profile_image_active' => '1'))
                ->where('id', '=', $user_id)
                ->execute();
        return $query;
    }
}	
	
