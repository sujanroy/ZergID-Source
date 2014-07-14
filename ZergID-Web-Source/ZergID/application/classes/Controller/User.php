<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template_User {

    /* view user profile */
    public function action_index() {
        $this->template->title = "Profile";
        $user = Auth::instance()->get_user();
        $user_id = $user->id;
        $config_path = Kohana::$config->load('myconf');
        $data = ORM::factory('profile')->where('user_id', '=', $user->id)->find();
        View::bind_global("user", $user);
        View::bind_global("config_path", $config_path);
        View::bind_global("profile", $data);
        $view = $this->template->title;
        $this->template->content = View::factory('user/profile');
        $directory = Kohana::$config->load('myconf')->path['profile'];
        $this->template->content->image_crop_view = View::factory('helper/popup/image_crop_popup')
                ->bind('view', $view)
                ->bind('directory', $directory)
                ->bind('id', $user_id);
        $this->template->content->change_password_popup = View::factory('helper/popup/change_password_popup');
    }

    /* Save User profile Information */

    public function action_profile() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $info_id = ORM::factory('profile')->where('user_id', '=', $user->id)->find();
            if ($info_id->personal_info_id) {
                $data = Model::factory('profile')->update_profile($user->id, $this->request->post());
                echo "update";
            } else {
                $data = Model::factory('profile')->create_profile($user->id, $this->request->post());
                echo "save";
            }
            $this->auto_render = FALSE;
        }
    }
    

    /* Save Profile Image */

    public function action_profileimage() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            $upload_dir = Kohana::$config->load('myconf')->path['profile'];
            if (isset($_POST["profile_image"]) && !empty($_POST["profile_image"])) {
                $filename = Controller_Helper::action_save_profile_image($_POST["profile_image"], $_POST['x1'], $_POST['y1'], $_POST['w'], $_POST['h'], $upload_dir);
                $user = Auth::instance()->get_user();
                Model::factory('profile')->update_profileimage($user->id, $filename);
                echo $filename;
            }
        }
        $this->auto_render = FALSE;
    }

    protected function _save_image($image) {
        if (
                !Upload::valid($image) OR
                !Upload::not_empty($image) OR
                !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            return FALSE;
        }

        $directory = DOCROOT . 'public/uploads/profile/';

        if ($file = Upload::save($image, NULL, $directory)) {
            $filename = strtolower(Text::random('alnum', 20)) . '.jpg';

            $img = Image::factory($file);
            $img->save($directory . $filename);

            // Delete the temporary file
            unlink($file);
            return $filename;
        }
        return FALSE;
    }

    public function action_logout() {

        $user = Auth::instance()->get_user();
        // Log user out
         Auth::instance()->logout();
        // Redirect to login page
        $this->redirect('/');
    }

    /* Select most popular/most recent feeds in all tab */

    public function action_select_feedtype() {
        $feed_type = Arr::get($_POST, 'feed_type');
        $user = Auth::instance()->get_user();
        $select_feedtype = ORM::factory('User')->where('id', '=', $user)->find();
        $select_feedtype->feed_type = $feed_type;
        $select_feedtype->save();
        echo $feed_type;
        $this->auto_render = FALSE;
    }

    /* Email Validation */

    public function action_profileemailvalidate() {
        if ($this->request->is_ajax()) {
            $email = Request::current()->post('Email');
            $user_id =  Request::current()->post('userid');
            $data = ORM::factory('User')->where('email', '=', $email);
            $find_userid= $data->find();
            $total = ORM::factory('User')->where('email', '=', $email)->count_all();
            if(($user_id != $find_userid->id) && ($total > 0)):
                echo '<span class="taken">Email address must be an unique</span>';
             endif;
            $this->auto_render = FALSE;
        }
    }

    /* To get other user info */

    public function action_others() {
        $auth_user = Auth::instance()->get_user();
        $user_id = $this->request->param('id');
        $user = Model::factory('User')->get_user($user_id);
        if ($auth_user->id != $user->id) {
            $this->template->title = $user->username . " profile";
            $zerg_id = Model::factory('User')->get_user($auth_user->id);
            //Get characters and game name in shareas drop down
            $characters = Model::factory('CharacterDetail')->get_game_list($auth_user->id);              
            // Get default banners
            $existing_banners = Model::factory('media')->get_existing_banners($user_id);
            // Get banner
            $banner = Model::factory('media')->get_banner($user->banner_id);
            //twitter status
            $twitter_status = ORM::factory('user')->where('id', '=', $user->id)->find();

            $feeds = ORM::factory('feeds')
                    ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                    ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                    ->add_subquery('(SELECT username FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user')
                    ->add_subquery('(SELECT id FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_id')
                    ->add_subquery('(SELECT profile_image1 FROM zid_users WHERE id = (SELECT id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_user_profile')
                    ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character')
                    ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_icon')
                    ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_feeds where feed_id = feeds.parent_feed_id)) AS original_character_id')
                    ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character')
                ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_icon')
                ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_character_details where character_detail_id = feeds.character_detail_id)) AS original_guild_character_id')
                     ->add_subquery('(SELECT character_name FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter')
                    ->add_subquery('(SELECT character_detail_id FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_id')
                    ->add_subquery('(SELECT character_icon FROM zid_character_details WHERE character_detail_id = (SELECT character_detail_id from zid_guild_feeds where feed_id = feeds.guild_parent_feed_id)) AS guildcharacter_icon') 
                    ->select('zid_users.*', 'zid_character_details.*', 'zid_feed_media.*')
                    ->join('zid_users', 'INNER')
                    ->on('zid_users.id', '=', 'feeds.id')
                    ->join('zid_character_details', 'LEFT OUTER')
                    ->on('feeds.character_detail_id', '=', 'zid_character_details.character_detail_id')
                    ->join('zid_feed_media', 'LEFT OUTER')
                    ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                    ->where('feeds.id', 'IN', array($user->id))
                    ->and_where('is_visible', '=', 1)
                    ->order_by('feeds.feed_id', 'DESC')
                    ->limit(10)
                    ->find_all();
            // Left content
            $this->template->left_content = Controller_Helper::action_left_bar($user->id);
            $user_zone = ORM::factory('user')->where('id', '=', $auth_user)->find();
            $timezone = $user_zone->user_timezone; 

            // Right content
            $this->template->content = View::factory('feeds/index')
                    ->bind('zergid', $zerg_id)
                    ->bind('characters', $characters)
                    ->bind('banner', $banner)
                    ->bind('twitter_status',$twitter_status)
                    ->bind('user_id', $user_id);

            $feed_type = $this->request->action();
            $this->template->content->feed_view = View::factory('feeds/feed')
                    ->bind("feeds", $feeds)
                    ->bind('user', $user)
                    ->bind('characters', $characters)
                    ->bind('user_id', $user_id)
                    ->bind('zergid', $zerg_id)
                    ->bind('timezone',$timezone)  
                    ->bind('feed_type', $feed_type);

            $this->template->content->banner_popup_view = View::factory('helper/popup/banner_popup')
                    ->bind('existing_banners', $existing_banners)
                    ->bind('view_id', $user_id);
            $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
            $this->template->content->media_resize_script_view = View::factory('helper/script/media_resize_script');
            $guild_id = NULL;
            $this->template->content->banner_image_view = View::factory('helper/view/banner')
                    ->bind('banner', $banner)
                    ->bind('guild_id', $guild_id);
        } else {
            $this->redirect('user/');
        }

        if (!$user->id)
            $this->redirect('user/');
    }
    
     /* Send Friend Request */

    public function action_friend_request() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['character']) || $_POST['character'] == null || $_POST['character'] == "")
                $_POST['character'] = 'NULL';
            Model::factory('Friends')->add_friends($user->id, $_POST);
            Model::factory("Message")->add_send_request_message($user->id, $_POST);
            echo "success";
            $this->auto_render = FALSE;
        }
    }
    
    /* Get Friends */
    
    public function action_friends() {
        $user = Auth::instance()->get_user();
        $user_id = $this->request->param('id');
        $this->template->title = "Friends";
        // Get friends list
        $friends = Model::factory('Friends')->get_user_friends($user->id);
        $zerg_id = Model::factory('User')->get_user($user->id);
        // Get characters
        $characters = Model::factory('CharacterDetail')->get_characters($user->id);

        $this->template->content = View::factory('user/friends')
                ->bind('friends', $friends)
                ->bind('profile_id', $user_id)
                ->bind('zergid', $zerg_id)
                ->bind('char_list', $characters);
    }
    
    /* Get other profile friends */

    public function action_profile_friends() {
        $auth_user = Auth::instance()->get_user();
        $user_id = $this->request->param('id');
        $user = Model::factory('User')->get_user($user_id);
        if ($auth_user->id != $user->id) {
            $this->template->title = $user->username . " profile";
            // Get friends list
            $friends = Model::factory('Friends')->get_user_friends($user_id);
            // Left content
            $this->template->left_content = Controller_Helper::action_left_bar($user->id);
            // Right content
            $this->template->content = View::factory('user/friends')
                    ->bind('friends', $friends)
                    ->bind('profile_id', $user_id);
        }
    }

    /* Send Follow Request */

    public function action_follow_request() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['character']))
                $_POST['character'] = 'NULL';
            $result = Model::factory('Followers')->add_followers($user->id, $_POST);
            return $result;
            $this->auto_render = FALSE;
        }
    }

    /* Get Followers */

    public function action_followers() {
        $user = Auth::instance()->get_user();
        $user_id = $this->request->param('id');
        $this->template->title = "Followers";
        // Get followers
        $followers = Model::factory('Followers')->get_user_followers($user->id);

        $this->template->content = View::factory('user/followers')
                ->bind('followers', $followers)
                ->bind('profile_id', $user_id);
    }

    /* Get Following */

    public function action_following() {
        $user = Auth::instance()->get_user();
        $this->template->title = "Following";
        // Get following list
        $following = Model::factory('Followers')->get_user_following($user->id);

        $this->template->content = View::factory('user/following')
                ->bind('following', $following);
    }
    
    /* User unfollow */

    public function action_unfollow() {
        $follower_id = Arr::get($_POST, 'follower_id');
        $follower = ORM::factory("Followers", $follower_id);
        $follower->delete();
        $this->auto_render = FALSE;
    }

    /* Other Profile unfollow */

    public function action_profile_unfollow() {
        $user = Auth::instance()->get_user();
        $follower_id = Arr::get($_POST, 'follower_id');
        $follower = ORM::factory("Followers")->where('linked_id', '=', $follower_id)->and_where('user_id', '=', $user->id)->find();
        $follower->delete();
        $this->auto_render = FALSE;
    }
    
    /* Other Profile Followers */

    public function action_profile_followers() {
        $auth_user = Auth::instance()->get_user();
        $user_id = $this->request->param('id');
        $user = Model::factory('User')->get_user($user_id);
        if ($auth_user->id != $user->id) {
            $this->template->title = $user->username . " profile";
            // Get followers list
            $followers = Model::factory('Followers')->get_user_followers($user->id);
            // Left content
            $this->template->left_content = Controller_Helper::action_left_bar($user->id);
            // Right content
            $this->template->content = View::factory('user/followers')
                    ->bind('followers', $followers)
                    ->bind('profile_id', $user_id);
        } else {
            $this->redirect('user/followers');
        }
        if (!$user->id)
            $this->redirect('feeds/');
    }
    
    /* Other Profile Following List */

    public function action_profile_following() {
        $auth_user = Auth::instance()->get_user();
        $user_id = $this->request->param('id');
        $user = Model::factory('User')->get_user($user_id);
        if ($auth_user->id != $user->id) {
            $this->template->title = $user->username . " profile";
            // Get following list
            $following = Model::factory('Followers')->get_user_following($user->id);
            // left content
            $this->template->left_content = Controller_Helper::action_left_bar($user->id);
            // Right content
            $this->template->content = View::factory('user/profile_following')
                    ->bind('following', $following)
                    ->bind('profile_id', $user_id);
        } else {
            $this->redirect('user/following');
        }
        if (!$user->id)
            $this->redirect('feeds/');
    }

    
    /* Unfriend Request */

    public function action_unfriend() {
        $user = Auth::instance()->get_user();
        $friend_id = Arr::get($_POST, 'remove_id');
        $friends = ORM::factory("Friends")->where('user_id', '=', $friend_id)->and_where('linked_id', '=', $user->id)->or_where('user_id', '=', $user->id)->and_where('linked_id', '=', $friend_id)->find_all();
        if (count($friends) > 0):
            foreach ($friends as $friend):
                $friend->delete();
            endforeach;
        endif;
        $this->auto_render = FALSE;
    }
    
    /* Check Current Password Request */

    public function action_check_current_password() {
         $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $password = Arr::get($_POST, 'password');
           if($user->password == Auth::instance()->hash_password($password)){
               echo "success";
           }
           else{
               echo "failed";
           }
        }
        $this->auto_render = FALSE;
    }
    
    /* Change Password */

    public function action_change_password() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $password = Arr::get($_POST, 'password');
            $user->password = $password;
            $user->save();
            $username = $user->username;
          $message = View::factory('template/mail/change_password')
                    ->bind('username', $username)
                    ->bind('password', $password);
            $mail = array(
                'subject' => 'Change Password',
                'body' => $message,
                'from' => array('support@zergid.com' => 'ZergID'),
                'to' => $user->email
            );

            $email = Email::send('default', $mail['subject'], $mail['body'], $mail['from'], $mail['to'], 'text/html');
            if ($email == 1) {
                echo "success";
            } else {
                echo "Not sent";
            }   
        }
        $this->auto_render = FALSE;
    }

    /* Get user current time zone */
    
    public function action_save_timezone() {
        $user_data = Arr::get($_POST, 'timezone');
        if($user_data == ""){
        $user_data = "Africa/Djibouti";
        $user = Auth::instance()->get_user();
        DB::query(Database::UPDATE, 'UPDATE zid_users set user_timezone = "'.$user_data.'" WHERE id =' .$user->id)->execute();
        } else
        {
          $user = Auth::instance()->get_user();
            DB::query(Database::UPDATE, 'UPDATE zid_users set user_timezone = "'.$user_data.'" WHERE id =' .$user->id)->execute();
          $this->auto_render = FALSE;
        }
    }

}
?>
