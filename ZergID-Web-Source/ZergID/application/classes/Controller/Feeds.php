<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Feeds extends Controller_Template_User { 
   
    // User feeds screen
    public function action_index() {
        $user = Auth::instance()->get_user();
        $this->template->title = "Feeds";
        if ($user) {
            $config_path = Kohana::$config->load('myconf');
            // Get all feeds
            $feeds = Model::factory('feeds')->get_all_feeds($user->id);
             //Get characters and game name in shareas drop down
            $characters = Model::factory('CharacterDetail')->get_game_list($user->id);  
            // Get existing banners
            $existing_banners = Model::factory('media')->get_existing_banners($user->id);
            // Get banner
            $banner = Model::factory('media')->get_banner($user->banner_id);
            $zerg_id = Model::factory('User')->get_user($user->id);
            view::bind_global('config_path', $config_path);
           
            //twitter status
            $twitter_status = ORM::factory('user')->where('id', '=', $user->id)->find();
            $timezone = $twitter_status->user_timezone; 
            // Right content view
            $this->template->content = View::factory('feeds/index')
                    ->bind('zergid', $zerg_id)
                    ->bind('characters', $characters)
                    ->bind('banner', $banner)
                    ->bind('twitter_status',$twitter_status)
                    ->bind('user_id', $user_id);

            // Get feed type
            $feed_type = $this->request->action();

            // Feed view
            $this->template->content->feed_view = View::factory('feeds/feed')
                    ->bind("feeds", $feeds)
                    ->bind('user', $user)
                    ->bind('timezone',$timezone)
                    ->bind('characters', $characters)
                    ->bind('user_id', $user_id)
                    ->bind('zergid', $zerg_id)
                    ->bind('feed_type', $feed_type);

            // Media popup view
            $this->template->content->media_popup_view = View::factory('helper/popup/media_popup');

            // Youtube script
            $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');

            // Media resize script
            $this->template->content->media_resize_script_view = View::factory('helper/script/media_resize_script');
            $guild_id = NULL;

            // Banner image view
            $this->template->content->banner_image_view = View::factory('helper/view/banner')
                    ->bind('banner', $banner)
                    ->bind('guild_id', $guild_id);
        } else {
            $this->redirect("/");
        }
    }

    // Get Existing Banner 
    function action_get_existing_banner(){
        $user = Auth::instance()->get_user();
         // Get existing banners
        $existing_banners = Model::factory('media')->get_existing_banners($user->id);
        $this->template = View::factory('template/blank');
        $this->template->content = View::factory('helper/popup/banner_popup')
                                    ->bind('existing_banners', $existing_banners)
                                    ->bind('view_id', $user_id);
    }

    // Feed More 
    public function action_feed_more() {
        $this->template = View::factory('template/blank');
        $lastfeed = Arr::get($_POST, 'lastmsg'); // get last feed id
        $feed_type = Arr::get($_POST, 'feed'); // get feed type
        $user_id = $this->request->param('id'); // get user id
        if ($user_id != NULL || $user_id != "") :
            // Get user info
            $user = Model::factory('User')->get_user($user_id);
            $data = array($user->id);
        else:
            $user = Auth::instance()->get_user();
            $friends = Model::factory('Friends')->get_user_all_friends($user->id); // Get friends
            $followers = Model::factory('Followers')->get_user_all_followers($user->id); // Get followers
            $data = array_merge(array($user->id), $friends, $followers);
        endif;
           $auth_user = Auth::instance()->get_user();
            // Get characters
            $characters = Model::factory('CharacterDetail')->get_game_list($auth_user->id);          
        $zerg_id = ORM::factory('User')->where('id', '=', $auth_user->id)->find();
        $user_zone = ORM::factory('user')->where('id', '=', $user->id)->find();
        $timezone = $user_zone->user_timezone;
        if ($feed_type == 'index' || $feed_type == 'others') {
            // load more all feeds
            $feeds = Model::factory('feeds')->get_load_more_all_feeds($data, $lastfeed);
            $timezone = $user_zone->user_timezone; 
        }
        
        if ($feed_type == 'myfeed') {
            // load more myfeeds
            $feeds = Model::factory('feeds')->get_load_more_myfeeds($user->id, $lastfeed);
            $timezone = $user_zone->user_timezone;
        }

        if ($feed_type == 'most_popular_feed') {
            // load more most popular feeds
            $feeds = Model::factory('feeds')->get_load_more_most_popular_feeds($lastfeed);
            $timezone = $user_zone->user_timezone;
        }
    
        if ($feed_type == 'most_recent_feed') {
            // load more most popular feeds
            $feeds = Model::factory('feeds')->get_load_more_most_recent_feeds($lastfeed);
            $timezone = $user_zone->user_timezone;
        }

        if ($feed_type == 'mygames') {
            $all_gameuser = Model::factory('CharacterDetail')->all_game_user($user->id);
            // Get game users
            $game_users = Model::factory('CharacterDetail')->get_game_users($user->id, $all_gameuser);
            // Get load more mygames feeds
            $feeds = Model::factory('feeds')->get_load_more_mygames_feeds($user->id, $game_users, $lastfeed);
            $timezone = $user_zone->user_timezone;
        }

        $config_path = Kohana::$config->load('myconf');
        
        // Right content
        $this->template->content = View::factory('feeds/feed_more')
                ->bind("config_path", $config_path)
                ->bind("feeds", $feeds)
                ->bind('zergid', $zerg_id)
                ->bind('timezone',$timezone)
                ->bind('characters', $characters)
                ->bind('feed_type', $feed_type)
                ->bind('user', $user)
                ->bind('user_id', $user_id);
        
        // Youtube video script
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
    }
   
    //Post feeds to zergid/facebook/twitter
    public function action_post() {
        $user = Auth::instance()->get_user();
        $filename = NULL;
        $large_filename = NULL;
        $url = NULL;
        $media_id = 'NULL';
        $facebook_posturl = NULL;
        $twitter_posturl = NULL;
        if (HTTP_Request::POST == $this->request->method()) {
            
        // Get Next Auto Increment Value From Feeds Table
            $query = mysql_query("SHOW TABLE STATUS LIKE 'zid_feeds' ");
            $row = mysql_fetch_array($query);
            $get_feed_id = $row['Auto_increment']; 
            
           
            /** Post feed to Facebook **/      
            $config_path = Kohana::$config->load('myconf');
            $facebook = new Facebook(array(
                        'appId' => $config_path->facebook['appId'],
                        'secret' => $config_path->facebook['appSecret'],
                        'fileUpload' => true,
                        'cookie' => true
                    ));
            $fbuser = $facebook->getUser();
            //facebook status
            $facebook_status = ORM::factory('user')->where('id', '=', $user->id)->find();
            
            if ($fbuser && $facebook_status->facebook_active == 1) {
                 if (isset($_FILES['media_icon']) && $_FILES['media_icon']['size'] > 0):
                    $media_file = $_FILES["media_icon"]["tmp_name"];
                else:
                    $media_file = NULL;
                endif;
                if(!isset($_POST['youtube_url']))
                  $_POST['youtube_url'] = NULL;
                if (isset($_POST['embed_url']) && $_POST['embed_url'] != "" && $_POST['embed_url'] != NULL):
                    preg_match('/<iframe.*src=\"(.*)\".*/isU', $_POST['embed_url'], $embed_string);
                    preg_match('/<a.*href=\"(.*)\".*/isU',$_POST['embed_url'], $twitch_string);
                    if (count($embed_string) > 0):
                        $string = $embed_string[1];
                        $string_url = explode('/', $string);
                        if ($string_url[2] == 'www.youtube.com'):
                            $facebook_posturl = 'http://www.youtube.com/watch?v=' . $string_url[4];
                        elseif ($string_url[2] == 'player.vimeo.com'):
                            $facebook_posturl = 'http://vimeo.com/' . $string_url[4];
                          else:
                            $facebook_posturl = $_POST['embed_url'];
                        endif;
                        elseif (count($twitch_string) > 0):
                         $twitch_string = $twitch_string[1];
                        $twitch_string_path = explode('/', $twitch_string);
                        if ($twitch_string_path[2] == 'www.twitch.tv'):
                        $facebook_posturl = 'http://www.twitch.tv/'.$twitch_string_path[3];
                         endif;
                        else:
                        $facebook_posturl = $_POST['embed_url'];
                        endif;
                endif;
                $feedtext = $_POST["feedtext"];
                if (isset($_POST['feedtext']) && $_POST['feedtext'] != "" && $_POST['feedtext'] != NULL):
                    preg_match('/<iframe.*src=\"(.*)\".*/isU', $_POST['feedtext'], $embed_string);
                   preg_match('/<a.*href=\"(.*)\".*/isU',$_POST['feedtext'], $twitch_string);
                    if (count($embed_string) > 0):
                        $string = $embed_string[1];
                        $string_url = explode('/', $string);
                        if ($string_url[2] == 'www.youtube.com'):
                            $feedtext = 'http://www.youtube.com/watch?v=' . $string_url[4];
                        elseif ($string_url[2] == 'player.vimeo.com'):
                            $feedtext = 'http://vimeo.com/' . $string_url[4];
                            else:
                            $feedtext = $_POST['feedtext'];
                        endif;
                        elseif (count($twitch_string) > 0):
                        $twitch_string = $twitch_string[1];
                        $twitch_string_path = explode('/', $twitch_string);
                        if ($twitch_string_path[2] == 'www.twitch.tv'):
                        $feedtext = 'http://www.twitch.tv/'.$twitch_string_path[3];
                         endif;
                        else:
                        $feedtext = $_POST['feedtext'];
                        endif;
                    else:
                      $feedtext =  $_POST['feedtext']; 
                endif;
                $post_url = "https://www.zergid.com/feeds/view/".$get_feed_id.' ';
                $this->action_facebook_post($feedtext, $media_file, $post_url,$_POST['youtube_url'],$facebook_posturl);
            }
            
            //twitter status
            $twitter_status = ORM::factory('user')->where('id', '=', $user->id)->find();
            /** Post feed to Twitter **/
            $session = Session::instance();
            if (count($session->get('access_token')) > 0 && $twitter_status->twitter_active == 1) {
                if (isset($_FILES['media_icon']) && $_FILES['media_icon']['size'] > 0):
                    $media_file = $_FILES["media_icon"];
                else:
                    $media_file = NULL;
                endif;
                if (!isset($_POST['youtube_url']))
                    $_POST['youtube_url'] = NULL;
                if (isset($_POST['embed_url']) && $_POST['embed_url'] != "" && $_POST['embed_url'] != NULL):
                    preg_match('/<iframe.*src=\"(.*)\".*/isU', $_POST['embed_url'], $embed_string);
                    preg_match('/<a.*href=\"(.*)\".*/isU',$_POST['embed_url'], $twitch_string);
                    if (count($embed_string) > 0):
                        $string = $embed_string[1];
                        $string_url = explode('/', $string);
                        if ($string_url[2] == 'www.youtube.com'):
                            $twitter_posturl = 'http://www.youtube.com/watch?v=' . $string_url[4];
                        elseif ($string_url[2] == 'player.vimeo.com'):
                            $twitter_posturl = 'http://vimeo.com/' . $string_url[4];
                        else:
                            $twitter_posturl = $_POST['embed_url'];
                        endif;
                        elseif (count($twitch_string) > 0):
                        $twitch_string = $twitch_string[1];
                        $twitch_string_path = explode('/', $twitch_string);
                        if ($twitch_string_path[2] == 'www.twitch.tv'):
                        $twitter_posturl = 'http://www.twitch.tv/'.$twitch_string_path[3];
                         endif;
                    else:
                       $twitter_posturl = $_POST['embed_url'];
                    endif;
                endif;
                if (isset($_POST['feedtext']) && $_POST['feedtext'] != "" && $_POST['feedtext'] != NULL):
                    preg_match('/<iframe.*src=\"(.*)\".*/isU', $_POST['feedtext'], $embed_string);
                    preg_match('/<a.*href=\"(.*)\".*/isU',$_POST['feedtext'], $twitch_string);
                    if (count($embed_string) > 0):
                        $string = $embed_string[1];
                        $string_url = explode('/', $string);
                        if ($string_url[2] == 'www.youtube.com'):
                            $feedtext = 'http://www.youtube.com/watch?v=' . $string_url[4];
                        elseif ($string_url[2] == 'player.vimeo.com'):
                            $feedtext = 'http://vimeo.com/' . $string_url[4];
                        else:
                            $feedtext = $_POST['feedtext'];
                        endif;
                        elseif (count($twitch_string) > 0):
                         $twitch_string = $twitch_string[1];
                        $twitch_string_path = explode('/', $twitch_string);
                        if ($twitch_string_path[2] == 'www.twitch.tv'):
                        $feedtext = 'http://www.twitch.tv/'.$twitch_string_path[3];
                         endif;
                    else:
                        $feedtext = $_POST['feedtext'];
                    endif;
                    else:
                      $feedtext =  $_POST['feedtext']; 
                endif;
                  $post_url = " ".URL::site(NULL, TRUE)."feeds/view/".$get_feed_id.' ';
                  if(strlen($feedtext) <= 100):
                      $feedsubtext = $feedtext;
                  else:
                      $feedsubtext = Text::limit_chars($feedtext,100,'...');
                  endif;
                $this->action_twitter_post($feedsubtext, $media_file, $_POST['youtube_url'], $twitter_posturl, $post_url);
            }
            
            /** Post feed to ZergID **/
            if (!isset($_POST['media_name']) || !isset($_POST['url_string'])) {
                if ((isset($_FILES['media_icon']) && $_FILES['media_icon']['size'] > 0) || (isset($_POST['youtube_url']) && $_POST['youtube_url'] != NULL && $_POST['youtube_url'] != "") || (isset($_POST['embed_url']) && $_POST['embed_url'] != NULL && $_POST['embed_url'] != "")) {
                    $allowed_images = array('gif', 'png', 'jpg', '.jpeg');
                    $allowed_videos = array('mp4', 'ogv', 'webm');
                    $name = $_FILES['media_icon']['name'];
                    $file_extension = substr(strchr($name, '.'), 1);
                    if (in_array($file_extension, $allowed_images)):
                        $file = $this->_save_media($_FILES['media_icon']);
                        $filename = $file.'.jpg';
                        $large_filename = $file.'_large.jpg';
                    elseif (in_array($file_extension, $allowed_videos)):
                        $directory = DOCROOT . 'public/uploads/media/';
                        $file = $_FILES["media_icon"]["name"];
                        $random_digit = strtolower(Text::random('alnum', 15));
                        $filename = $random_digit . $file;
                        move_uploaded_file($_FILES["media_icon"]["tmp_name"], $directory . $filename);
                        $large_filename = NULL;
                    endif;
                    if (isset($_POST['youtube_url']) && $_POST['youtube_url'] != "" && $_POST['youtube_url'] != NULL):
                        $url = $_POST['youtube_url'];
                     elseif(isset($_POST['embed_url']) && $_POST['embed_url'] != "" && $_POST['embed_url'] != NULL):
                         preg_match('/<iframe.*src=\"(.*)\".*/isU', $_POST['embed_url'], $embed_string);
                         preg_match('/<a.*href=\"(.*)\".*/isU',$_POST['embed_url'], $twitch_string);
                         if($twitch_string>0):
                             $url = '<div style="margin-top:10px">'.$_POST['embed_url'].'</div>';  
                         endif;
                        if(count($embed_string) > 0):
                            $string = $embed_string[1];
                            $string_url = explode('/', $string);
                        if($string_url[2] == 'www.youtube.com'):
                            $url = 'http://www.youtube.com/watch?v='.$string_url[4];
                        elseif ($string_url[2] == 'player.vimeo.com'):
                           $url = '<div style="margin-top:10px">'.$_POST['embed_url'].'</div>'; 
                        elseif($string_url[2] == 'twitch.tv'):
                           $url = '<div style="margin-top:10px">'.$_POST['embed_url'].'</div>'; 
                        else:
                            $_POST['feedtext'] = $_POST['feedtext'] .'<div style="margin-top:10px">'. $_POST['embed_url'].'</div>';
                       endif;
                        else:
                            $_POST['feedtext'] = $_POST['feedtext']; 
                    endif;
                    else:
                          $url = NULL;
                    endif;
                    if($filename != NULL || $large_filename != NULL || $url != NULL):
                        $media = ORM::factory('FeedMedia');
                        $media->file_path = $filename;
                        $media->large_file_path = $large_filename;
                        $media->youtube_url = $url;
                        $media->save();
                        $media_id = $media->feed_media_id;
                        endif;
                }
                else if($_POST['feedtext'] != NULL) {
                $youtube_url = NULL;
                preg_match("/www\.youtube\.com\/watch\?v\=(.{11})/", $_POST['feedtext'], $yurl);
                preg_match('/<iframe.*src=\"(.*)\".*/isU', $_POST['feedtext'], $embed_string);
                preg_match('/<a.*href=\"(.*)\".*/isU',$_POST['feedtext'], $twitch_string);
             
                if (count($yurl) > 0 || count($embed_string) > 0 || count($twitch_string) > 0):  
                    $media = ORM::factory('FeedMedia');
                    if (count($yurl) > 0):
                        $youtube_url = $yurl[0];
                    elseif (count($embed_string) > 0):
                        $string = $embed_string[1];
                        $string_url = explode('/', $string);
                        if($string_url[2] == 'www.youtube.com'):
                        $youtube_url = 'http://www.youtube.com/watch?v='.$string_url[4];
                        elseif($string_url[2] == 'twitch.tv'):
                            $youtube_url = $_POST['feedtext'];   
                            $_POST['feedtext']='http://twitch.tv/'.$string_url[3].'/'.$string_url[4];
                        elseif ($string_url[2] == 'player.vimeo.com'):
                            $youtube_url = '<div style="margin-top:10px">'.$_POST['feedtext'].'</div>';   
                            $_POST['feedtext']='http://vimeo.com/' . $string_url[4];
                        else:
                            $_POST['feedtext'] = $_POST['feedtext'] .'<div style="margin-top:10px">'. $_POST['embed_url'].'</div>';
                        endif;
                         elseif(count($twitch_string) > 0):
                             $twitch_string_url = explode('/',$twitch_string[1]);    
                        if($twitch_string_url[2] = "www.twitch.tv"):
                             $youtube_url =  $_POST['feedtext'];
                             $_POST['feedtext'] = NULL;
                        endif;
                            $_POST['feedtext'] = $_POST['feedtext'] .'<div style="margin-top:10px">'. $_POST['embed_url'].'</div>';
                    endif;
                    if($youtube_url !=NULL):
                    $media->file_path = NULL;
                    $media->youtube_url = $youtube_url;
                    $media->feed_id = $get_feed_id;
                    $media->save();
                    $media_id = $media->feed_media_id;
                    endif;
                endif;
            }
                else {
                    $media_id = 'NULL';
                }
            } else {
                if (!isset($_POST['media_name']) || $_POST['media_name'] == NULL || $_POST['media_name'] == "")
                    $_POST['media_name'] = NULL;
                if (!isset($_POST['url_string']) || $_POST['url_string'] == NULL || $_POST['url_string'] == "")
                    $_POST['url_string'] = NULL;
                if (($_POST['media_name'] != NULL || $_POST['media_name'] != "") || ($_POST['url_string'] != NULL || $_POST['url_string'] != "")):
                    $media = ORM::factory('FeedMedia');
                    $media->file_path = $_POST['media_name'];
                    $media->youtube_url = $_POST['url_string'];
                    $media->feed_id = $get_feed_id;
                    $media->save();
                    $media_id = $media->feed_media_id;
                else:
                    $media_id = 'NULL';
                endif;
            }
            

            if (!isset($_POST['parent_id']) || $_POST['parent_id'] == null)
                $_POST['parent_id'] = 'NULL';

            if (!isset($_POST['feed_rezergtext']) || $_POST['feed_rezergtext'] == null)
                $_POST['feed_rezergtext'] = 'NULL'; 

            if (!isset($_POST['parent_guild_id']) || $_POST['parent_guild_id'] == null)                      
                $_POST['parent_guild_id'] = 'NULL';
            if($_POST['shareas'] == '' || $_POST['shareas'] == 0)
                $_POST['shareas'] = 'NULL';
            $feed_id = Model::factory("feeds")->add_feeds($user->id, $media_id, $_POST);

            if (($media_id != "" || $media_id != NULL) && !isset($_POST['media_name'])) {
                DB::update(ORM::factory('FeedMedia')->table_name())
                        ->set(array('feed_id' => $feed_id))
                        ->where('feed_media_id', '=', $media_id)
                        ->execute();
            }
                        
        }
        $this->auto_render = FALSE;
     if (!isset($_POST['parent_id']) || $_POST['parent_id'] == 'NULL'){
        $this->redirect('/feeds');
     }
     else {
         echo "success";
     }
    }

    // Save feed media
    protected function _save_media($image) {
        if (
                !Upload::valid($image) OR
                !Upload::not_empty($image) OR
                !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            return FALSE;
        }

        $directory = DOCROOT . 'public/uploads/media/';

        if ($file = Upload::save($image, NULL, $directory)) {
            $filename = strtolower(Text::random('alnum', 15));
            
             $img = Image::factory($file);
             if ($img->height > $img->width) {
                if ($img->height >= 480):
                    $img->resize(NULL, 580);
                endif;
            }
            else {
                if ($img->width >= 480):
                    $img->resize(580, NULL);
                endif;
            }
            
            $img->save($directory . $filename.'.jpg');
            
            $large_img = Image::factory($file);
            $large_img->save($directory . $filename.'_large.jpg');

            // Delete the temporary file
            unlink($file);

            return $filename;
        }

        return FALSE;
    }
    
    // post new comments to the feeds
    public function action_post_comment() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            Model::factory("Comments")->add_comments($user->id, $_POST);
            echo "success";
        }
        $this->auto_render = FALSE;
    }
    
    // My Feeds 
    public function action_myfeed() {
        $user_id = $this->request->param('id');
        if ($user_id != NULL || $user_id != "") :
            // Get user info
            $user = Model::factory('User')->get_user($user_id);
        else:
            $user = Auth::instance()->get_user();
        endif;
        $this->template = View::factory('template/blank');
        $auth_user = Auth::instance()->get_user();
        // Get characters
       $characters = Model::factory('CharacterDetail')->get_game_list($auth_user->id);
         $zerg_id = Model::factory('User')->get_user($auth_user->id);
        // Get myfeeds
        $feeds = Model::factory('feeds')->get_myfeeds($user->id);
        $this->template->content = View::factory('feeds/myfeed');
        // Get feed type
        $feed_type = $this->request->action();
     
        $userzone = ORM::factory('user')->where('id', '=', $auth_user)->find();
        $timezone = $userzone->user_timezone;

        // Right content
        $this->template->content->feed_view = View::factory('feeds/feed')
                ->bind("feeds", $feeds)
                ->bind('timezone',$timezone)   
                ->bind('zergid', $zerg_id)
                ->bind('characters', $characters)
                ->bind('user', $user)
                ->bind('feed_type', $feed_type)
                ->bind('user_id', $user_id);

        // Youtube video script                                      
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
    }
    
    // Most Popular Feeds 
    public function action_most_popular_feed() {
        $user_id = $this->request->param('id'); // user id
        if ($user_id != NULL || $user_id != "") :
            // Get user info
            $user = Model::factory('User')->get_user($user_id);
        else:
            $user = Auth::instance()->get_user();
        endif;
        $this->template = View::factory('template/blank');
        $auth_user = Auth::instance()->get_user();   
        // Get characters
        $characters = Model::factory('CharacterDetail')->get_game_list($auth_user->id);
        $zerg_id = Model::factory('User')->get_user($auth_user->id);

        // Get most popular feeds
        $feeds = Model::factory('feeds')->get_most_popular_feeds();

        $this->template->content = View::factory('feeds/most_popular_feed')
                            ->bind('user', $user);
        // Get feed type
        $feed_type = $this->request->action();

        $userzone = ORM::factory('user')->where('id', '=', $auth_user)->find();
        $timezone = $userzone->user_timezone; 
        // Right content
        $this->template->content->feed_view = View::factory('feeds/feed')
                ->bind("feeds", $feeds)
                ->bind('zergid', $zerg_id)
                ->bind('characters', $characters)
                ->bind('user', $user)
                ->bind('timezone',$timezone) 
                ->bind('feed_type', $feed_type)
                ->bind('user_id', $user_id);

        // Youtube video script
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
    }
    
    // Most Recent Feeds     
    public function action_most_recent_feed() {
        $user_id = $this->request->param('id'); // user id
        if ($user_id != NULL || $user_id != "") :
            // Get user info
            $user = Model::factory('User')->get_user($user_id);
        else:
            $user = Auth::instance()->get_user();
        endif;
        $this->template = View::factory('template/blank');
        $auth_user = Auth::instance()->get_user();   
        // Get characters
        $characters = Model::factory('CharacterDetail')->get_game_list($auth_user->id);
        $zerg_id = Model::factory('User')->get_user($auth_user->id);

        // Get most popular feeds
        $feeds = Model::factory('feeds')->get_most_recent_feeds();

        $this->template->content = View::factory('feeds/most_recent_feed')
                  ->bind('user', $user);
        // Get feed type
        $feed_type = $this->request->action();

        $userzone = ORM::factory('user')->where('id', '=', $auth_user)->find();
        $timezone = $userzone->user_timezone; 
        // Right content
        $this->template->content->feed_view = View::factory('feeds/feed')
                ->bind("feeds", $feeds)
                ->bind('zergid', $zerg_id)
                ->bind('characters', $characters)
                ->bind('user', $user)
                ->bind('timezone',$timezone) 
                ->bind('feed_type', $feed_type)
                ->bind('user_id', $user_id);

        // Youtube video script
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
    }
    
    // MY Games Feeds 
    public function action_mygames() {
        $user_id = $this->request->param('id');  // user id
        if ($user_id != NULL || $user_id != "") :
            // Get user info
            $user = Model::factory('User')->get_user($user_id);
        else:
            $user = Auth::instance()->get_user();
        endif;
        $this->template = View::factory('template/blank');
         $auth_user = Auth::instance()->get_user();
        // Get characters
        $characters = Model::factory('CharacterDetail')->get_game_list($auth_user->id);
        $zerg_id = Model::factory('User')->get_user($user->id);
        $friends = Model::factory('Friends')->get_user_all_friends($user->id); // Get friends
        $followers = Model::factory('Followers')->get_user_all_followers($user->id); // Get followers
        $data = array_merge($friends, $followers);
        if (count($data) <= 0):
            $data = array(NULL);
        endif;
         $all_gameuser = Model::factory('CharacterDetail')->all_game_user($user->id);
        // Get game users
        $game_users = Model::factory('CharacterDetail')->get_game_users($user->id, $all_gameuser);
        if (count($game_users) <= 0):
            $game_users = array(NULL);
        endif;
        // Get mygames feeds
        $feeds = Model::factory('feeds')->get_mygames_feeds($user->id, $game_users);

        $this->template->content = View::factory('feeds/mygames');
        // Get feed type                          
        $feed_type = $this->request->action();

        $userzone = ORM::factory('user')->where('id', '=', $auth_user)->find();
        $timezone = $userzone->user_timezone;
        // Right content
        $this->template->content->feed_view = View::factory('feeds/feed')
                ->bind("feeds", $feeds)
                ->bind('zergid', $zerg_id)
                ->bind('characters', $characters)
                ->bind('user', $user)
                ->bind('timezone',$timezone)
                ->bind('feed_type', $feed_type)
                ->bind('user_id', $user_id);

        // Youtube video script
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
    }
    
    // Feed View 
    public function action_view() {
        $auth_user = Auth::instance()->get_user();
        $this->template->title = "Feeds";
        $feed_id = $this->request->param('id'); // feed id
         // Get characters
        $characters = Model::factory('CharacterDetail')->get_game_list($auth_user->id);
        $zerg_id = Model::factory('User')->get_user($auth_user->id);
        $config_path = Kohana::$config->load('myconf');
        $userzone = ORM::factory('user')->where('id', '=', $auth_user)->find();
        $timezone = $userzone->user_timezone;
        $feed = ORM::factory('feeds')
                ->select('zid_users.*', 'zid_character_details.*', 'zid_feed_media.*')
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'feeds.id')
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('feeds.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->join('zid_feed_media', 'LEFT OUTER')
                ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                ->where('feeds.feed_id', '=', $feed_id)
                ->find();
        $user = ORM::factory('User')->where('id', '=', $feed->id)->find();
        
         if($feed ==""){
          $this->redirect('feeds/');
         }
        $banner = ORM::factory('media')->where('media_info_id', '=', $user->banner_id)->find();
        $comment = ORM::factory('Comments')
                ->select('zid_users.*', 'zid_character_details.*')
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'comments.user_id')
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('comments.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->where('comments.feed_id', '=', $feed_id)
                ->order_by('comments.comment_id', 'DESC');
        $comment->reset(FALSE);
        $comment_count = $comment->count_all();
        $comments = $comment->limit(10)->find_all();
        
        view::bind_global('config_path', $config_path);
        $this->template->content = View::factory('feeds/view')
                ->bind('feed', $feed)
                ->bind('comments', $comments)
                ->bind('timezone',$timezone)  
                ->bind('comment_count', $comment_count)
                ->bind('user', $auth_user)
                ->bind('zergid', $zerg_id)
                ->bind('characters', $characters)
                ->bind('banner', $banner);
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
        
        $data = ORM::factory('profile')->where('user_id', '=', $user->id)->find();
         $favorites = ORM::factory("Favorites")
                    ->where('user_id', '=', $user->id)
                    ->find();
            $zerg_id = ORM::factory('User')->where('id', '=', $auth_user->id)->find();
            $characters = ORM::factory("CharacterDetail")
                    ->where('user_id', '=', $auth_user->id)
                    ->find_all();
            
            $friends = ORM::factory('Friends')->where('linked_id', '=', $user->id)->and_where('is_accepted', '=', 1)->find_all();
            $friend = ORM::factory('Friends')->where('linked_id', '=', $user->id)->and_where('user_id', '=', $auth_user->id)->find_all(1);
            
            $followers = ORM::factory('Followers')->where('linked_id', '=', $user->id)->and_where('is_accepted', '=', 1)->find_all();
            $follower = ORM::factory('Followers')->where('linked_id', '=', $user->id)->where('user_id', '=', $auth_user->id)->find_all(1);
     
            $char_ids = explode(',', $favorites->character_favorite);
            $guild_ids = explode(',', $favorites->guild_favorite);
            $character = ORM::factory("CharacterDetail")->where('character_detail_id', 'IN', $char_ids)->where('is_public', '=', '1')->find_all();
            $guild = ORM::factory("guild")->where('guild_id', 'IN', $guild_ids)->where('is_active', '=', '1')->find_all();
        if($auth_user->id != $user->id):
        $advs = ORM::factory('ManageContent')->where('id', '=', 1)->find();  
        $this->template->left_content = View::factory('user/other_left_bar')
                    ->bind("user", $user)
                    ->bind("profile", $data)
                    ->bind("character", $character)
                    ->bind("guild", $guild)
                    ->bind('advs',$advs)
                    ->bind('zergid', $zerg_id)
                    ->bind('char_list', $characters)
                    ->bind('friends', $friends)
                    ->bind('followers', $followers)
                    ->bind('follower', $follower)
                    ->bind('friend', $friend);
        endif;
    }

    // get more feed comments
    public function action_comment_more() {
        $user = Auth::instance()->get_user();
        $this->template = View::factory('template/blank');
        $last_comment = Arr::get($_POST, 'lastmsg');
        $feed_id = Arr::get($_POST, 'feedid');

        $userzone = ORM::factory('user')->where('id', '=', $user)->find();
        $timezone = $userzone->user_timezone;
        $comments = ORM::factory('Comments')
                ->select('zid_users.*', 'zid_character_details.*')
                ->where('comments.comment_id', '<', $last_comment)
                ->join('zid_users', 'INNER')
                ->on('zid_users.id', '=', 'comments.user_id')
                ->join('zid_character_details', 'LEFT OUTER')
                ->on('comments.character_detail_id', '=', 'zid_character_details.character_detail_id')
                ->where('comments.feed_id', '=', $feed_id)
                ->order_by('comments.comment_id', 'DESC')
                ->limit(10)
                ->find_all();

        $config_path =  Kohana::$config->load('myconf');  
        $this->template->content = View::factory('feeds/comment_more')
                                   ->bind("config_path", $config_path)
                                   ->bind("comments", $comments)
                                   ->bind('timezone',$timezone)
                                   ->bind('feedid', $feed_id)
                                   ->bind('user', $user);
    }
    
    // delete comments
    public function action_delete() {
        $user = Auth::instance()->get_user();
        $feed_id = Arr::get($_POST, 'feedid');
        $comments = ORM::factory("Comments")->where('feed_id', '=', $feed_id)->find_all();
        if (count($comments) > 0):
            foreach ($comments as $comment) {
                $comment->delete();
            }
        endif;
        $feed = ORM::factory('feeds')->where('feed_id', '=', $feed_id)->find();
        if($feed->feed_media_id != NULL):
            $feed_media = ORM::factory("FeedMedia")->where('feed_id', '=', $feed_id)->find();

            $directory = Kohana::$config->load('myconf')->path['media'];
            if ($feed->feed_media_id != NULL && $feed->parent_feed_id == NULL  && $feed_media->youtube_url == NULL && $feed_media->file_path != 'feed_default.jpg') {
            if($feed_media->file_path != NULL):
            unlink($directory.$feed_media->file_path);
            endif;
            if($feed_media->large_file_path != NULL):
            unlink($directory.$feed_media->large_file_path);   
            endif;
            }
            $feed_media->delete();;
        endif;
        
        Model::factory('feeds')->delete_feeds($feed_id);
        // ORM::factory('feeds')->where('feed_id', '=', $feed_id)->find()->delete();

        $this->auto_render = FALSE;
        return $comments;
    }
    
     //Update feed text
     public function action_edit() {
        $user = Auth::instance()->get_user();
        $feed_id = Arr::get($_POST, 'feed_id');
        $feed_text = Arr::get($_POST, 'feed_text');
        DB::update(ORM::factory('feeds')->table_name())
                    ->set(array('feed_text' => $feed_text))
                    ->where('feed_id', '=', $feed_id)
                    ->execute();
        $this->redirect('feeds/view/'.$feed_id);
    }
    
    //Feed zergit
    public function action_zergit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $feed_id = Arr::get($_POST, 'feed_id');
            $feed = ORM::factory('feeds')->where('feed_id', '=', $feed_id)->find();
            $zergs_list = explode(",", $feed->zergs);
            $zergs_list[] = $user->id;
            $array_list = array_filter($zergs_list);
            $zergs_list = implode(',', $array_list);
            
            DB::update(ORM::factory('feeds')->table_name())
                    ->set(array('zergs' => $zergs_list))
                    ->where('feed_id', '=', $feed_id)
                    ->execute();
            echo "success";
        }
        $this->auto_render = FALSE;
    }
    
     //Feed unzergit
     public function action_unzergit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
        $feed_id = Arr::get($_POST, 'feed_id');
        $feed = ORM::factory('feeds')->where('feed_id', '=', $feed_id)->find();
        $zergs_list = explode(",", $feed->zergs);
        $unzerg = array_search($user->id, $zergs_list);
        if($unzerg !== FALSE):
        unset($zergs_list[$unzerg]);
        endif;
         $zergs_list= array_filter($zergs_list);
         $list=implode(',',$zergs_list);
         
         DB::update(ORM::factory('feeds')->table_name())
                    ->set(array('zergs' => $list))
                    ->where('feed_id', '=', $feed_id)
                    ->execute();
         echo "success";
        }
        $this->auto_render = FALSE;
    }
    
    //Comment zergit
    public function action_comment_zergit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $comment_id = Arr::get($_POST, 'comment_id');
            $comment = ORM::factory('Comments')->where('comment_id', '=', $comment_id)->find();
            $zergs_list = explode(",", $comment->zergs);
            $zergs_list[] = $user->id;
            $array_list = array_filter($zergs_list);
            $zergs_list = implode(',', $array_list);
            
            DB::update(ORM::factory('Comments')->table_name())
                    ->set(array('zergs' => $zergs_list))
                    ->where('comment_id', '=', $comment_id)
                    ->execute();
            echo "success";
        }
        $this->auto_render = FALSE;
    }
    
    //Comment unzergit
    public function action_comment_unzergit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
        $comment_id = Arr::get($_POST, 'comment_id');
        $comment = ORM::factory('Comments')->where('comment_id', '=', $comment_id)->find();
        $zergs_list = explode(",", $comment->zergs);
        $unzerg = array_search($user->id, $zergs_list);
        if($unzerg !== FALSE):
        unset($zergs_list[$unzerg]);
        endif;
         $zergs_list= array_filter($zergs_list);
         $list=implode(',',$zergs_list);
         
         DB::update(ORM::factory('Comments')->table_name())
                    ->set(array('zergs' => $list))
                    ->where('comment_id', '=', $comment_id)
                    ->execute();
         echo "success";
        }
        $this->auto_render = FALSE;
    }
    
    // Set banner image
    public function action_setbanner() {
         if (HTTP_Request::POST == $this->request->method()) {
            if (isset($_FILES['banner_image']) && $_FILES['banner_image']['size'] > 0) {
                $filename = $this->_save_image($_FILES['banner_image']);
                echo $filename;
            }
         }
        $this->auto_render = FALSE;
    }
    
    //Save banner image
    public function action_banner_save() {
        if (HTTP_Request::POST == $this->request->method()) {
            $user = Auth::instance()->get_user();
            $filename = Arr::get($_POST, 'file_name');
            $guild_id = Arr::get($_POST, 'guild_id');
            $media = ORM::factory('media');
            $media->user_id = $user->id;
            $media->media_type = '0';
            $media->file_path = $filename;
            $media->is_active = '1';
            $media->is_banner = '1';
            $media->save();
            if ($guild_id == NULL):
                $banner = ORM::factory('User')->where('id', '=', $user->id)->find();
                $banner->banner_id = $media->media_info_id;
                $banner->save();
                echo $filename.'/'.$banner->banner_id;
            else:
                $banner = ORM::factory('guild')->where('guild_id', '=', $guild_id)->find();
                $banner->banner_id = $media->media_info_id;
                $banner->save();
                 echo $filename.'/'.$banner->banner_id;
            endif;
        }
        $this->auto_render = FALSE;
    }
    
    // Cancel banner image popup
    public function action_banner_cancel() {
        if (HTTP_Request::POST == $this->request->method()) {
            $filename = Arr::get($_POST, 'file_name');
            $directory = DOCROOT . 'public/uploads/media/';
            $file =$directory.$filename;
            unlink($file);
        }
        $this->auto_render = FALSE;
    }
   
    //Save feed media         
    protected function _save_image($image) {
        if (
                !Upload::valid($image) OR
                !Upload::not_empty($image) OR
                !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            return FALSE;
        }
        $directory = DOCROOT . 'public/uploads/media/';
        if ($file = Upload::save($image, NULL, $directory)) {
            $filename = strtolower(Text::random('alnum', 15)) . '.jpg';
                         $img = Image::factory($file);
             if ($img->height > $img->width) {
                if ($img->height >= 365):
                    $img->resize(NULL, 365);
                endif;
            }
            else {
                if ($img->width >= 645):
                    $img->resize(645, NULL);
                endif;
            }
            $img->save($directory . $filename);
            // Delete the temporary file
            unlink($file);
            return $filename;
        }
        return FALSE;
    }
    
    
    public function action_facebook_connect() {
        $config_path = Kohana::$config->load('myconf');
        $facebook = new Facebook(array(
                    'appId' => $config_path->facebook['appId'],
                    'secret' => $config_path->facebook['appSecret'],
                    'fileUpload' => true,
                    'cookie' => true
                ));
        $loginUrl = $facebook->getLoginUrl(
                array(
                    'display' => 'popup',
                    'redirect_uri'  =>$config_path->facebook['homeurl'].'facebook_callback',
                    'scope' => $config_path->facebook['fbPermissions'],
                ));
        $this->redirect($loginUrl);
        $this->auto_render = FALSE;
    }

  public function action_facebookfeed_connect() {
        $user = Auth::instance()->get_user();
        $config_path = Kohana::$config->load('myconf');
        $facebook = new Facebook(array(
                    'appId' => $config_path->facebook['appId'],
                    'secret' => $config_path->facebook['appSecret'],
                    'fileUpload' => true,
                    'cookie' => true
                ));
        $loginUrl = $facebook->getLoginUrl(
                array(
                    'display' => 'popup',
                    'redirect_uri'  =>$config_path->facebook['homeurl'].'facebook_callback',
                    'scope' => $config_path->facebook['fbPermissions'],
                ));
        DB::query(Database::UPDATE, 'UPDATE zid_users set facebook_active = 1 WHERE id =' .$user->id)->execute();
        $this->redirect($loginUrl);
        $this->auto_render = FALSE;
    } 
    
    public function action_facebook_callback() {
	$user = Auth::instance()->get_user();
        $config_path = Kohana::$config->load('myconf');
        $facebook = new Facebook(array(
                        'appId' => $config_path->facebook['appId'],
                        'secret' => $config_path->facebook['appSecret'],
                        'fileUpload' => true,
                        'cookie' => true
                    ));
      $fbuser = $facebook->getUser();
      if($fbuser) {
        //   echo "<script type='text/javascript'>alert('Success'); window.close(); </script>";
	echo "<script type='text/javascript'>
               var htwit = window.opener.document.getElementById('hfb_unlink');
               var hfac = window.opener.document.getElementById('fb_unlink');
              if(hfac){hfac.style.display = 'none';}
               if(htwit){htwit.style.display = 'none';}
               window.opener.document.getElementById('hfb_link').style.display = 'inline-block';
                window.close(); </script>";
		DB::query(Database::UPDATE, 'UPDATE zid_users set is_facebook_linked = 1 WHERE id =' .$user->id)->execute();
      }
       $this->auto_render = FALSE; 
    }
   public static function action_facebook_post($feedposttext, $media, $post_url, $youtubeurl,$url) {
        $config_path = Kohana::$config->load('myconf');
        $facebook = new Facebook(array(
                        'appId' => $config_path->facebook['appId'],
                        'secret' => $config_path->facebook['appSecret'],
                        'fileUpload' => true,
                        'cookie' => true
                    ));
         $fbuser = $facebook->getUser();
         
         if (strlen($feedposttext) < 1) {
                //message is empty
                $feedtext = $post_url;
            }
            else{
               $feedtext = $feedposttext.' '.$post_url; 
            }
            $explode_videourl = explode('/', $feedposttext);
            if (filter_var($feedposttext, FILTER_VALIDATE_URL)):
            $filter_videourl = $explode_videourl[2];
            $post_videourl = $feedposttext;
            else:
            $filter_videourl = $feedposttext;
            $post_videourl = '';
            endif;
            
            //HTTP POST request to PAGE_ID/photos with the publish_stream	
		//posts message on page statues 
                if($media != NULL):
                $post_url = '/'.$fbuser.'/photos';    
		$msg_body = array(
		'source'=>'@'.$media,
		'message' => $feedtext,
                'link' => $youtubeurl.' '.$url.' '.$feedposttext
		);
                elseif ($youtubeurl != NULL || $url != NULL || $filter_videourl == 'www.youtube.com' || $filter_videourl == 'vimeo.com' || $filter_videourl == 'www.twitch.tv'):
                   $post_url = '/'.$fbuser.'/feed'; 
                   $msg_body = array('message' => $feedtext,'link' => $youtubeurl.' '.$url.' '.$post_videourl); 
                   else:
                    $post_url = '/'.$fbuser.'/feed'; 
                   $msg_body = array('message' => $feedtext);    
                endif;
                if ($fbuser) {
                try {
                    $postResult = $facebook->api($post_url, 'post', $msg_body);
                } catch (FacebookApiException $e) {
                    echo $e->getMessage();
                }
            } 
    }
   
  public function action_facebook_destroy_session() {
        $config_path = Kohana::$config->load('myconf');
        $user = Auth::instance()->get_user();
        if (HTTP_Request::POST == $this->request->method()) {
        $facebook_active = Arr::get($_POST, 'facebook_active');
        if($facebook_active == 'feeds' || $facebook_active == 'guild'):
        DB::query(Database::UPDATE, 'UPDATE zid_users set facebook_active = 0 WHERE id =' .$user->id)->execute();
        elseif($facebook_active == 'user'):
          DB::query(Database::UPDATE, 'UPDATE zid_users set facebook_active = 0 WHERE id =' .$user->id)->execute();
	DB::query(Database::UPDATE, 'UPDATE zid_users set is_facebook_linked = 0 WHERE id =' .$user->id)->execute();
        $facebook = new Facebook(array(
                    'appId' => $config_path->facebook['appId'],
                    'secret' => $config_path->facebook['appSecret'],
                    'fileUpload' => true,
                    'cookie' => true
                ));
        $facebook->destroySession();
        endif;
        }
        $this->auto_render = FALSE;
    }   
    public function action_twitter_connect() {
        $config_path = Kohana::$config->load('myconf');

      // Get the session instance
        $session = Session::instance();
        /* Build TwitterOAuth object with client credentials. */
        $connection = new TwitterOAuth($config_path->twitter['consumer_key'], $config_path->twitter['consumer_secret']);
      // $connection = new TwitterOAuth('uGy5aUi4VdAJ51XEebhtcQ', 'RSDA9JCYYN8G7caUBVE9V4F5s3VrS6VDguIJJxmVKPg');
	 /* Get temporary credentials. */
        $request_token = $connection->getRequestToken($config_path->twitter['oauth_callback']);
        /* Save temporary credentials to session. */
        $session->set('oauth_token', $request_token['oauth_token']);
        $session->set('oauth_token_secret', $request_token['oauth_token_secret']);
        $token = $request_token['oauth_token'];
	 /* If last connection failed don't display authorization link. */
        switch ($connection->http_code) {
            case 200:
                /* Build authorize URL and redirect user to Twitter. */
                $url = $connection->getAuthorizeURL($token);
                //$this->redirect($url);
               // echo $url;
               $this->redirect($url);
                // header('Location: ' . $url);
                break;
            default:
                /* Show notification if something went wrong. */
                echo 'Could not connect to Twitter. Refresh the page or try again later.';
        }
        $this->auto_render = FALSE;
    }
    
    public function action_twitter_callback() {
        $config_path = Kohana::$config->load('myconf');
        $user = Auth::instance()->get_user();
        // Get the session instance
        $session = Session::instance();
        /* If the oauth_token is old redirect to the connect page. */
        if (isset($_REQUEST['oauth_token']) && $session->get('oauth_token') !== $_REQUEST['oauth_token']) {
            $_SESSION['oauth_status'] = 'oldtoken';
        //    $session->set('oauth_status', 'oldtoken');
            $this->action_twitter_destroy();
        }
        /* Create TwitteroAuth object with app key/secret and token key/secret from default phase */
        $connection = new TwitterOAuth($config_path->twitter['consumer_key'], $config_path->twitter['consumer_secret'], $session->get('oauth_token'), $session->get('oauth_token_secret'));

        /* Request access tokens from twitter */
        $access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);

        /* Save the access tokens. Normally these would be saved in a database for future use. */
        $session->set('access_token', $access_token);

        /* Remove no longer needed request tokens */
        $session->delete('oauth_token');
        $session->delete('oauth_token_secret');

        /* If HTTP response is 200 continue otherwise send to connect page to retry */
        if (200 == $connection->http_code) {
            /* The user has been verified and the access tokens can be saved for future use */
            $session->set('status', 'verified');
            //$this->redirect('/feeds');
            
               echo "<script type='text/javascript'>
               var htwit = window.opener.document.getElementById('htwit_unlink');
               var twit = window.opener.document.getElementById('twit_unlink');
               if(htwit){htwit.style.display = 'none';}
               if(twit){twit.style.display = 'none';}
               window.opener.document.getElementById('htwit_link').style.display = 'inline-block';
                window.close(); </script>";
		 DB::query(Database::UPDATE, 'UPDATE zid_users set is_twitter_linked = 1 WHERE id =' .$user->id)->execute();
            
        } else {
            /* Save HTTP status for error dialog on connnect page.*/
            header('Location: ./clearsessions.php');
        }
    }
    
    public static function action_twitter_post($feedtext, $media, $youtube, $embedurl, $post_url) {
        $config_path = Kohana::$config->load('myconf');
        $session = Session::instance();
        /* Get user access tokens out of the session. */
        $access_token = $session->get('access_token');

        /* Create a TwitterOauth object with consumer/user tokens. */
        $connection = new TwitterOAuth($config_path->twitter['consumer_key'], $config_path->twitter['consumer_secret'], $access_token['oauth_token'], $access_token['oauth_token_secret']);

        
        if ($media["error"] > 0) {
            echo "Error: " . $media["error"] . "<br />";
        } else {
            $frnd = rand(1, 1000);
            $pic = $media["tmp_name"];
        }
echo $pic ;
        $auth = $session->get('access_token');
        $timestamp = time();
        $nonce = md5(uniqid(rand(), true));
        $consumer_key = $config_path->twitter['consumer_key'];
        $access_token = $auth['oauth_token']; 
        $access_secret = $auth['oauth_token_secret'];
        $consumer_secret = $config_path->twitter['consumer_secret'];

        $twitpic_url = 'http://api.twitpic.com/2/upload.json';
        $args['key'] = $config_path->twitter['twitpic_key']; //This is your twitpic api key
        $args['message'] = $feedtext;
        $args['media'] = "@{$pic}"; //Don't forget the @

        $urlz = 'https://api.twitter.com/1.1/account/verify_credentials.json';

        $oconsumer_key = "oauth_consumer_key=" . $consumer_key;
        $ononce = "oauth_nonce=" . $nonce;
        $osigmethod = "oauth_signature_method=HMAC-SHA1";
        $otimestamp = "oauth_timestamp=" . $timestamp;
        $otoken = "oauth_token=" . $access_token;
        $oversion = "oauth_version=1.0";
        $singlestring = $oconsumer_key . "&" . $ononce . "&" . $osigmethod . "&" . $otimestamp . "&" . $otoken . "&" . $oversion;
        $encsbs = rawurlencode($singlestring);
        $encurl = rawurlencode($urlz);
        $httpmode = "GET";
        $content = $httpmode . "&" . $encurl . "&" . $encsbs;
        $key = $consumer_secret . '&' . $access_secret;
        $signature = urlencode(base64_encode(hash_hmac('sha1', $content, $key, true)));
        $headers =
                <<<EOF
OAuth realm="http://api.twitter.com/", oauth_consumer_key="$consumer_key", oauth_signature_method="HMAC-SHA1", oauth_token="$access_token", oauth_timestamp="$timestamp", oauth_nonce="$nonce", oauth_version="1.0", oauth_signature="$signature"
EOF;
        $curl = curl_init();
        //We are going to call twitpic api, not twitter :
        curl_setopt($curl, CURLOPT_URL, $twitpic_url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'X-Verify-Credentials-Authorization: ' . $headers,
            'X-Auth-Service-Provider: ' . $urlz
        ));
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $args);

        $response = curl_exec($curl);
        if (!$response) {
            $response = curl_error($curl);
        }
        curl_close($curl);
        
        //Twitpic json response
        $json_out = json_decode($response, true);
        echo $response;
        $msgt = $json_out["url"];
        echo $msgt;
        $msgpic = $json_out["text"];
        $combinemsg = $feedtext." ". $youtube. " " . $embedurl. " " . $post_url. " " . $msgt;
        $connection->post('statuses/update', array('status' => "$combinemsg"));
    }
    
    public function action_twitter_destroy() {
        $session = Session::instance();
        $user = Auth::instance()->get_user();
        if (HTTP_Request::POST == $this->request->method()) {
        $twitter_active = Arr::get($_POST, 'twitter_active');
        if($twitter_active == 'feeds' || $twitter_active == 'guild'):
         DB::query(Database::UPDATE, 'UPDATE zid_users set twitter_active = 0 WHERE id =' .$user->id)->execute();
        elseif($twitter_active == 'user'):
          DB::query(Database::UPDATE, 'UPDATE zid_users set twitter_active = 0 WHERE id =' .$user->id)->execute();  
	DB::query(Database::UPDATE, 'UPDATE zid_users set is_twitter_linked = 0 WHERE id =' .$user->id)->execute(); 
         $session->delete('access_token');
         $session->delete('oauth_token');
         $session->delete('oauth_token_secret');   
        endif;
        
        }
        $this->auto_render= FALSE;
    }
    public function action_delete_banner(){
     if (HTTP_Request::POST == $this->request->method()) {
            $user = Auth::instance()->get_user();
            $bannerid = Arr::get($_POST, 'bannerid');
            $banner_path = ORM::factory('media')->where('media_info_id', '=', $bannerid)->find();
            echo $banner_path->file_path;
            Model::factory('media')->remove_existing_banner($bannerid);
            
     }
      $this->auto_render= FALSE;
}
  // Twitter Feed Connect
    public function action_feedtwitter_connect() {
        $config_path = Kohana::$config->load('myconf');
        $user = Auth::instance()->get_user();
      // Get the session instance
        $session = Session::instance();
        /* Build TwitterOAuth object with client credentials. */
        $connection = new TwitterOAuth($config_path->twitter['consumer_key'], $config_path->twitter['consumer_secret']);
        /* Get temporary credentials. */
        $request_token = $connection->getRequestToken($config_path->twitter['oauth_callback']);
        /* Save temporary credentials to session. */
        $session->set('oauth_token', $request_token['oauth_token']);
        $session->set('oauth_token_secret', $request_token['oauth_token_secret']);
        $token = $request_token['oauth_token'];
	/* If last connection failed don't display authorization link. */
        switch ($connection->http_code) {
            case 200:
                /* Build authorize URL and redirect user to Twitter. */
                DB::query(Database::UPDATE, 'UPDATE zid_users set twitter_active = 1 WHERE id =' .$user->id)->execute(); 
                $url = $connection->getAuthorizeURL($token);
                //$this->redirect($url);
               // echo $url;
               $this->redirect($url);
                // header('Location: ' . $url);
                break;
            default:
                /* Show notification if something went wrong. */
                echo 'Could not connect to Twitter. Refresh the page or try again later.';
        }
        $this->auto_render = FALSE;
    }
    
    public function action_feedtwitter_on(){
      $user = Auth::instance()->get_user(); 
      DB::query(Database::UPDATE, 'UPDATE zid_users set twitter_active = 1 WHERE id =' .$user->id)->execute();
       $this->auto_render = FALSE;
    }
    public function action_facebook_on(){
      $user = Auth::instance()->get_user(); 
      DB::query(Database::UPDATE, 'UPDATE zid_users set facebook_active = 1 WHERE id =' .$user->id)->execute();
       $this->auto_render = FALSE;
    }
    

}
