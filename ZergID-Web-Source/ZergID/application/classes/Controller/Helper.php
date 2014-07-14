<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Helper extends Controller_Template_User {

    public static function action_save_profile_image($image, $x1, $y1, $w, $h, $upload_dir) {
        $desired_width = 150; //desired image result width
        $desired_height = 150; //desired image result height
        $img_quality = 100;

        if (isset($image) && !empty($image)) {
            $temp_file = $upload_dir . $image;

            // Check if the file was uploaded properly without any error
            if (file_exists($temp_file) && filesize($temp_file) > 0) {
                $file_size_arr = getimagesize($temp_file); // get the image detail
                if (!$file_size_arr) {
                    @unlink($temp_file); //if file size array not exits then delete it
                    return;
                }
                $mime = $file_size_arr['mime'];
                $vir_img_arr = array();
                switch ($mime) {
                    case 'image/jpg':
                        $ext = '.jpg';
                        // create a new image from file
                        $vir_img = @imagecreatefromjpeg($temp_file);
                        break;

                    case 'image/jpeg':
                        $ext = '.jpeg';
                        // create a new image from file
                        $vir_img = @imagecreatefromjpeg($temp_file);
                        break;

                    case 'image/png':
                        $ext = '.png';
                        // create a new image from file
                        $vir_img = @imagecreatefrompng($temp_file);
                        break;

                    case 'image/gif':
                        $ext = '.gif';
                        // create a new image from file
                        $vir_img = @imagecreatefromgif($temp_file);
                        break;
                    default:
                        @unlink($temp_file);
                        return;
                }
                $vir_img_arr['ext'] = $ext;
                $vir_img_arr['img'] = $vir_img;
                $virtual_img = $vir_img_arr['img'];

                // create a new true color image
                $true_color_img = @imagecreatetruecolor($desired_width, $desired_height);

                // copy and resize part of an image with resampling
                imagecopyresampled($true_color_img, $virtual_img, 0, 0, (int) $x1, (int) $y1, $desired_width, $desired_height, (int) $w, (int) $h);

                // define a result image filename
                $result = $temp_file . '.jpg';

                // upload resultant file to the folder
                imagejpeg($true_color_img, $result, $img_quality);
                @unlink($temp_file); //delete the main temporary uploaded file
                return $image . '.jpg';
            }
        }
    }
    
    public function action_save_image() {
        if (HTTP_Request::POST == $this->request->method()) {
            if (isset($_FILES['profile_image']) && $_FILES['profile_image']['size'] > 0) {
                $file = $this->_save_image($_FILES['profile_image'], $_POST['directory']);
                echo $file;
            }
        }
        $this->auto_render = FALSE;
    }
    
        protected function _save_image($image, $directory) {
        if (
                !Upload::valid($image) OR
                !Upload::not_empty($image) OR
                !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            return FALSE;
        }
       // $directory = DOCROOT . 'public/uploads/profile/';
        if ($file = Upload::save($image, NULL, $directory)) {
            $filename = strtolower(Text::random('alnum', 15));
            $img = Image::factory($file);
             if ($img->height > $img->width) {
                if ($img->height >= 400):
                    $img->resize(NULL, 400);
                endif;
            }
            else {
                if ($img->width >= 500):
                    $img->resize(500, NULL);
                endif;
            }

            $img->save($directory . $filename);
            // Delete the temporary file
            unlink($file);
            return $filename;
        }
        return FALSE;
    }
    
    public function action_crop_image_cancel() {
        if (HTTP_Request::POST == $this->request->method()) {
            $filename = Arr::get($_POST, 'file_name');
            $directory =  Arr::get($_POST, 'directory');;
            $file = $directory . $filename;
            unlink($file);
        }
        $this->auto_render = FALSE;
    }
    
    public function action_crop_profile_image() {
        if (HTTP_Request::POST == $this->request->method()) {
        $file_name = $this->action_save_profile_image($_POST['profile_image'], $_POST['x1'], $_POST['y1'], $_POST['w'], $_POST['h'], $_POST['directory']);
        echo $file_name;
        }
        $this->auto_render = FALSE;
    }
    
    public static function action_left_bar($user_id) {
        $auth_user = Auth::instance()->get_user();
        if($user_id == $auth_user) {
            $left_bar = 'user/left_bar';
        }
        else {
            $left_bar = 'user/other_left_bar';
        }
        $user = Model::factory('User')->get_user($user_id);
        $zerg_id = Model::factory('User')->get_user($auth_user->id);
        // Get characters
        $characters = Model::factory('CharacterDetail')->get_characters($auth_user->id);
        // Get profile info
        $profile = Model::factory('profile')->get_profile($user->id);
        
        $favorites = Model::factory('Favorites')->get_favorites($user->id);
        // Get friends
        $friends = Model::factory('Friends')->get_friends($user->id);
        // Get followers
        $followers = Model::factory('Followers')->get_followers($user->id);

        $char_ids = explode(',', $favorites->character_favorite);
        $guild_ids = explode(',', $favorites->guild_favorite);
        // Get favorite character's
        $character = Model::factory('CharacterDetail')->get_favorite_characters($char_ids);

        // Get favorite guild's
        $guild = Model::factory('guild')->get_favorite_guilds($guild_ids);
        $friend = ORM::factory('Friends')->where('linked_id', '=', $user_id)->and_where('user_id', '=', $auth_user->id)->find_all(1);
        $follower = ORM::factory('Followers')->where('linked_id', '=', $user->id)->where('user_id', '=', $auth_user->id)->find_all(1);
        $advs = ORM::factory('ManageContent')->where('id', '=', 1)->find();

        $view = View::factory($left_bar)
                ->bind("user", $user)
                ->bind("profile", $profile)
                ->bind("character", $character)
                ->bind("guild", $guild)
                ->bind('advs',$advs)
                ->bind('zergid', $zerg_id)
                ->bind('char_list', $characters)
                ->bind('friends', $friends)
                ->bind('followers', $followers)
                ->bind('follower', $follower)
                ->bind('friend', $friend);
        return $view; 
    }

}
