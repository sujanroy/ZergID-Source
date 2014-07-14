<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Character extends Controller_Template_User {
        
    public function action_index(){
         $this->template->title = "Character Listing";
         $user = Auth::instance()->get_user();
         // Get character full list
         $character_list = Model::factory('CharacterDetail')->get_character_full_list($user->id);
         // Get favorites
         $favorites = Model::factory('Favorites')->get_favorites($user->id);
         
         $this->template->content = View::factory('character/index')
                                    ->bind('character_list',$character_list)
                                    ->bind('user', $user) 
                                    ->bind('favorites',$favorites);
    }
    
    /* Add new character */

    public function action_add() {
        $this->template->title = "Add Character";
        $user = Auth::instance()->get_user();
        $games = ORM::factory("Game")->where('is_active', '=', '1')->order_by('game_name','ASC')->find_all();
        $character = ORM::factory("Role")->where('is_active', '=', '1')->order_by('role_name','ASC')->find_all();
        $this->template->content = View::factory('character/add')
                ->bind("games", $games)
                ->bind("character", $character);

        $view = 'Character';
        $id = NULL;
        $directory = Kohana::$config->load('myconf')->path['character'];
        $this->template->content->image_crop_view = View::factory('helper/popup/image_crop_popup')
                ->bind('view', $view)
                ->bind('directory', $directory)
                ->bind('id', $id);
       
        $this->template->content->game_request_popup = View::factory('helper/popup/game_request_popup')
                ->bind('user', $user);

        // Get character full list
        $character_list = Model::factory('CharacterDetail')->get_character_full_list($user->id);
        // Get favorites
        $favorites = Model::factory('Favorites')->get_favorites($user->id);
        // Character list gridview
        $this->template->content->grid = View::factory('character/index')
                ->bind('character_list', $character_list)
                ->bind('favorites', $favorites);
        // Media popup
        $this->template->content->media_popup_view = View::factory('helper/popup/media_popup');
    }
    
    /* Save character Info */

    public function action_save() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['server']) || $_POST['server'] == null)
                $_POST['server'] = 'NULL';
            if (!isset($_POST['faction']) || $_POST['faction'] == null)
                $_POST['faction'] = 'NULL';
            if (!isset($_POST['classid']) || $_POST['classid'] == null)
                $_POST['classid'] = 'NULL';
            if (!isset($_POST['profession1']) || $_POST['profession1'] == '0' || $_POST['profession1'] == '')
                $_POST['profession1'] = 'NULL';
            if (!isset($_POST['profession2']) || $_POST['profession2'] == '0' || $_POST['profession2'] == '')
                $_POST['profession2'] = 'NULL';
            if (!isset($_POST['profession3']) || $_POST['profession3'] == '0' || $_POST['profession3'] == '')
                $_POST['profession3'] = 'NULL';
            if (!isset($_POST['character_icon']))
                $_POST['character_icon'] = NULL;
            if ($_POST['submit'] == 'update') {
                if (!isset($_POST['character_id']) || $_POST['character_id'] == null):
                    $character = ORM::factory('CharacterDetail')->where('user_id', '=', $user->id)->find();
                    $char_id = $character->character_detail_id;
                else:
                    $char_id = $_POST['character_id'];
                endif;
                // Update character
                $data = Model::factory("CharacterDetail")->update_character($user->id, $char_id, $_POST);
                echo "update";
            } else {
                // Add character
                $data = Model::factory("CharacterDetail")->add_character($user->id, $_POST);
                $character_count = ORM::factory('CharacterDetail')->where('user_id', '=', $user->id)->and_where('is_public','=','1')->count_all();
                if($character_count < 4):                                
                $favorite_id = $data;
        $this->auto_render = FALSE;
        $user = Auth::instance()->get_user();
        // Get favorites character
        $favorites = Model::factory('Favorites')->get_favorites($user->id);
        // Set favorite limitation
        $limit = Kohana::$config->load('myconf')->favorite_char_limit;
        if ($favorites->favorite_id):
            $favorite_list = explode(",", $favorites->character_favorite);
            $check = array_search($favorite_id, $favorite_list);
            if ($check !== false) {
                unset($favorite_list[$check]);
                echo "unselected";
            } else {
                $favorite_list[] = $favorite_id;
                if (count($favorite_list) > $limit) {
                    echo "overlimit";
                    return;
                }
                echo "selected";
            }
            $favorite_list = array_filter($favorite_list);
            $list = implode(',', $favorite_list);
            // Save character favorite list
            Model::factory('Favorites')->save_character_favorites($favorites->favorite_id, $list);
        else:
            // Add new character favorite
            $favObj = ORM::factory('Favorites');
            $favObj->character_favorite = $favorite_id;
            $favObj->user_id = $user->id;
            $favObj->last_modified_date = date('y/m/d h:i:s', time());
            $favObj->save();
            echo "selected";
        endif;
        endif;   
                echo $data;
            }
        }
        $this->auto_render = FALSE;
    }
    
    /* Save character profile image */

    public function action_saveimage() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            $upload_dir = Kohana::$config->load('myconf')->path['character'];
            if (isset($_POST["profile_image"]) && !empty($_POST["profile_image"])) {
                $filename = Controller_Helper::action_save_profile_image($_POST["profile_image"], $_POST['x1'], $_POST['y1'], $_POST['w'], $_POST['h'], $upload_dir);
                Model::factory('CharacterDetail')->save_profile_image($filename, $_POST['char_id']);
                echo $filename;
            }
        }
        $this->auto_render = FALSE;
    }

    protected function _save_image($image, $media_type) {
        if (!Upload::valid($image) OR !Upload::not_empty($image) OR !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            return FALSE;
        }
        if ($media_type == 'profile_icon'):
            $directory = Kohana::$config->load('myconf')->path['character'];
        else:
            $directory = Kohana::$config->load('myconf')->path['media'];
        endif;
        $file = Upload::save($image, NULL, $directory);
        if ($file) {
            $filename = strtolower(Text::random('alnum', 20)) . '.jpg';
            $img = Image::factory($file);
            $img->save($directory . $filename);

            // Delete the temporary file
            unlink($file);
            return $filename;
        }
        return FALSE;
    }
    
  /* Save Character Media */

    public function action_savemedia() {
        $filename = NULL;
        if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
            if ($_FILES):
                $filename = $this->_save_image($_FILES['media_icon'], 'media');
            endif;
            $char_id = $_POST['char_id'];
            if ($_POST['youtube'] != ''):
                $url_string = $_POST['youtube'];
            elseif($_POST['embed_script'] != ''):
                preg_match('/<iframe.*src=\"(.*)\".*/isU', $_POST['embed_script'], $embed_string);
                        if(count($embed_string[1]) > 0):
                        $string = $embed_string[1];
                        $string_url = explode('/', $string);
                        $url_string = 'http://www.youtube.com/watch?v='.$string_url[4];
                        endif;
            else:
                $url_string = NULL;
            endif;
            $this->action_save_media($filename, $url_string, $char_id);
            $this->auto_render = FALSE;
        }
    }

    public function action_save_media($filename, $youtube_url, $char_id) {
        $user = Auth::instance()->get_user();
        // Add media
        $media_id = Model::factory('media')->add_media($user->id, $filename, $youtube_url);
        // Get character by character id
        $character = Model::factory('CharacterDetail')->get_character($char_id);
        $list = explode(",", $character->media_info_id);
        $list[] = $media_id;
        $array_list = array_filter($list);
        $list = implode(',', $array_list);
        // Save media info
        Model::factory('CharacterDetail')->save_media_info($char_id, $list);
    }

    /* Delete Character */

    public function action_delete() {
        $user = Auth::instance()->get_user();
        $char_id = Arr::get($_POST, 'delete_id');
        if ($_POST['guild_id'] != NULL) {
            // Delete character as a guild member
            Model::factory('GuildMembers')->remove_guild_member($char_id);
        }
        // Delete character messages
        $messages = Model::factory('Message')->get_character_messages($char_id);
        if (count($messages) > 0):
            foreach ($messages as $message):
                $message->delete();
            endforeach;
        endif;
        // Delete character as a event member
        $event_members = Model::factory('EventMembers')->get_event_member_character($char_id);
        if (count($event_members) > 0):
            foreach ($event_members as $event_member):
                $event_member->delete();
            endforeach;
        endif;
        // Get character by character id
        $character = ORM::factory("CharacterDetail", $char_id);
        // Get favorites character
        $favorites = Model::factory('Favorites')->get_favorites($user->id);
        $favorite_list = explode(",", $favorites->character_favorite);
        $check = array_search($char_id, $favorite_list);
        if ($check !== false) {
            // Delete character favorite
            unset($favorite_list[$check]);
            $favorite_list = array_filter($favorite_list);
            $list = implode(',', $favorite_list);
            // Save character favorite list
            Model::factory('Favorites')->save_character_favorites($favorites->favorite_id, $list);
        }
        // Delete character
        $character->delete();
        $this->auto_render = FALSE;
    }
    
    /* Save Character Favorites */

    public function action_favorite() {
        $favorite_id = Arr::get($_POST, 'id');
        $this->auto_render = FALSE;
        $user = Auth::instance()->get_user();
        // Get favorites character
        $favorites = Model::factory('Favorites')->get_favorites($user->id);
        // Set favorite limitation
        $limit = Kohana::$config->load('myconf')->favorite_char_limit;
        if ($favorites->favorite_id):
            $favorite_list = explode(",", $favorites->character_favorite);
            $check = array_search($favorite_id, $favorite_list);
            if ($check !== false) {
                unset($favorite_list[$check]);
                echo "unselected";
            } else {
                $favorite_list[] = $favorite_id;
                if (count($favorite_list) > $limit) {
                    echo "overlimit";
                    return;
                }
                echo "selected";
            }
            $favorite_list = array_filter($favorite_list);
            $list = implode(',', $favorite_list);
            // Save character favorite list
            Model::factory('Favorites')->save_character_favorites($favorites->favorite_id, $list);
        else:
            // Add new character favorite
            $favObj = ORM::factory('Favorites');
            $favObj->character_favorite = $favorite_id;
            $favObj->user_id = $user->id;
            $favObj->last_modified_date = date('y/m/d h:i:s', time());
            $favObj->save();
            echo "selected";
        endif;
    }
    
   /* Edit Character */

    public function action_edit() {
        $this->template->title = "Edit Character";
        $char_id = $this->request->param('id');
        $user = Auth::instance()->get_user();
        // Get character
        $character_detail = Model::factory('CharacterDetail')->get_character($char_id);
        if ($user->id == $character_detail->user_id) {
            // Get guild info
            $guild = Model::factory("guild")->get_guild($character_detail->guild_id);
            //to show guild member name in characeter view screen
            $guild_member = ORM::factory('GuildMembers')->where('guild_id', '=', $guild)->and_where('character_detail_id','=',$character_detail)->find();
            // Get games
            $games = ORM::factory("Game")->where('is_active', '=', '1')->find_all();
            // Get servers
            $server = Model::factory('Server')->get_servers($character_detail->game_id); 
            // Get factions
            $factions = Model::factory('Faction')->get_factions($character_detail->game_id);
            
            //get faction count based game
             $faction_count = ORM::factory("Faction")->where('game_id', '=', $character_detail->game_id)->and_where('faction_name','=','N/A')->and_where('is_active', '=', '1')->order_by('faction_name', 'ASC')->count_all();
            // Get class
            $class = Model::factory('Class')->get_class($character_detail->game_id,$character_detail->faction_id);
            // Get professions
            $professions = Model::factory('Professions')->get_professions($character_detail->game_id);
            $character = ORM::factory("Role")->where('is_active', '=', '1')->order_by('role_name','ASC')->find_all();
            $media_id = explode(',', $character_detail->media_info_id);

            // Get uploaded media
            $media = Model::factory('media')->get_uploaded_media($char_id, $media_id);

            // Get character full list
            $character_list = Model::factory('CharacterDetail')->get_character_full_list($user->id);

            $this->template->content = View::factory('character/edit')
                    ->bind("games", $games)
                    ->bind("servers", $server)
                    ->bind("class", $class)
                    ->bind("character", $character)
                    ->bind("factions", $factions)
                    ->bind("media", $media)
                    ->bind("professions", $professions)
                    ->bind("character_detail", $character_detail)
                    ->bind("guild", $guild)
                    ->bind("guild_member",$guild_member)
                    ->bind("faction_count", $faction_count)
                    ->bind('character_list', $character_list);

            $view = "Character";
            $directory = Kohana::$config->load('myconf')->path['character'];
            // Image crop view
            $this->template->content->image_crop_view = View::factory('helper/popup/image_crop_popup')
                    ->bind('view', $view)
                    ->bind('directory', $directory)
                    ->bind('id', $char_id);

            // Get favorites
            $favorites = Model::factory('Favorites')->get_favorites($user->id);
            
            // Character list grid view
            $this->template->content->grid = View::factory('character/index')
                    ->bind('character_list', $character_list)
                    ->bind('favorites', $favorites);
            
            // Media popup view
            $this->template->content->media_popup_view = View::factory('helper/popup/media_popup');
            // Youtube video script
            $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
            
            if (HTTP_Request::POST == $this->request->method()) {
                // Update character info   
                Model::factory("CharacterDetail")->update_character($user->id, $char_id, $this->request->post());
                $this->redirect('character/edit/' . $char_id);
            }
        } else {
            $this->redirect('/feeds');
        }
        if (!$char_id) {
            $this->redirect('/feeds');
        }
    }

   /* View Character */

    public function action_view() {
        $auth_user = Auth::instance()->get_user();
        $this->template->title = "Character";
        $char_id = $this->request->param('id');
        // Get character
        $character_detail = Model::factory('CharacterDetail')->get_character($char_id);
        if ($auth_user->id != $character_detail->user_id) {
            // Get guild info
            $guild = Model::factory("guild")->get_guild($character_detail->guild_id);
            $guild_member = ORM::factory('GuildMembers')->where('guild_id', '=', $guild)->and_where('character_detail_id','=',$character_detail)->and_where('is_accepted','=',1)->find();//to show guild member name in characetr view page
            $media_id = explode(',', $character_detail->media_info_id);
            // Get uploaded media
            $media = Model::factory('media')->get_uploaded_media($char_id, $media_id);
            
            $this->template->left_content = Controller_Helper::action_left_bar($character_detail->user_id);
            
            $this->template->content = View::factory('character/view')
                    ->bind('character_detail', $character_detail)
                    ->bind('guild', $guild)
                    ->bind('guild_member',$guild_member)
                    ->bind('media', $media);
             // Youtube video script
            $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
        } else {
            $this->redirect('character/edit/' . $char_id);
        }
        if (!$character_detail->character_detail_id)
            $this->redirect('character/');
    }
   
    /* Send Game Request */

    public function action_gamerequest() {
        $user = Auth::instance()->get_user();
        $username = Arr::get($_POST, 'username');
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['character_id']) || $_POST['character_id'] == NULL || $_POST['character_id'] == "")
                $_POST['character_id'] = 'NULL';
            $admin = ORM::factory('User')->where('user_type', '=', 2)->find();
            Model::factory("Message")->add_message($user->id, $admin->id, $_POST);

            $message = View::factory('template/mail/game_not_listed')
                    ->bind('username', $username) 
                    ->bind('game_req', $_POST['message']);
            $mail = array(
                'subject' => 'Game not listed',
                'body' => $message,
                'from' => array('support@zergid.com' => 'ZergID'),
                'to' => 'suggestions@zergid.com'
            );

            $email = Email::send('default', $mail['subject'], $mail['body'], $mail['from'], $mail['to'], 'text/html');
          
            echo "success";
            $this->auto_render = FALSE;
        }
    }
    
   /* Other profile character full list */

    public function action_others() {
        $auth_user = Auth::instance()->get_user();
        $this->template->title = "Character";
        $user_id = $this->request->param('id');
        if ($auth_user->id != $user_id) {
            $user = Model::factory('User')->get_user($user_id);
            // Get favorites
            $favorites = Model::factory('Favorites')->get_favorites($user->id);
            // Get other profile character list
            $character_list = Model::factory('CharacterDetail')->get_other_profile_character_list($user->id);
            $this->template->content = View::factory('character/not_your_character')
                    ->bind('character_list', $character_list)
                    ->bind('user', $user)
                    ->bind('favorites', $favorites);
            $this->template->left_content = Controller_Helper::action_left_bar($user_id);
            
        } else {
            $this->redirect('character/');
        }

        if (!$user->id)
            $this->redirect('user/');
    }
    
   /* Set Header Banner */

    public function action_set_banner() {
        $user = Auth::instance()->get_user();
        $banner_id = Arr::get($_POST, 'banner_id');
        $view_id = Arr::get($_POST, 'view_id');
        if ($view_id != NULL):
            // Get guild profile banner
            $banner = ORM::factory('guild')->where('guild_id', '=', $view_id)->find();
        else:
            // Get user profile banner
            $banner = ORM::factory('User')->where('id', '=', $user->id)->find();
        endif;
        $banner->banner_id = $banner_id;
        $banner->save();
        $this->auto_render = FALSE;
    }

    /* Select Servers */

    public function action_select_servers() {
        $this->auto_render = FALSE;
        if (HTTP_Request::POST == $this->request->method()) {
            $game_id = Arr::get($_POST, 'game_id');
            // get servers list
            $servers = Model::factory('Server')->get_servers($game_id);
            $server_list = array();
            foreach ($servers as $server):
                $server_list[$server->server_name] = $server->id;
            endforeach;
            echo json_encode($server_list);
        }
    }
    
    /* Select Factions */

    public function action_select_factions() {
        $this->auto_render = FALSE;
        if (HTTP_Request::POST == $this->request->method()) {
            $game_id = Arr::get($_POST, 'game_id');
            // get factions list
            $factions = Model::factory('Faction')->get_factions($game_id);
            $faction_list = array();
            foreach ($factions as $faction):
                $faction_list[$faction->faction_name] = $faction->faction_id;
            endforeach;
            echo json_encode($faction_list);
        }
    }
    
    /* Select Class */

    public function action_select_class() {
        $this->auto_render = FALSE;
        if (HTTP_Request::POST == $this->request->method()) {
            $faction_id = Arr::get($_POST, 'faction_id');
            // get class list
            $classes = Model::factory('Class')->get_characterfactionclass($faction_id);
            $class_list = array();
            foreach ($classes as $class):
                $class_list[$class->class_name] = $class->class_id;
            endforeach;
            echo json_encode($class_list);
        }
    }

    /* Select Professions */

    public function action_select_profession() {
        if (HTTP_Request::POST == $this->request->method()) {
            $game_id = Arr::get($_POST, 'game_id');
            // Get professions list
            $professions = Model::factory('Professions')->get_professions($game_id);
            $profession_list = array();
            foreach ($professions as $profession):
                $profession_list['Select'] = '0';
                $profession_list[$profession->profession_name] = $profession->profession_id;
            endforeach;
            echo json_encode($profession_list);
        }
        $this->auto_render = FALSE;
    }
    
    /* Validate already exist character name */

    public function action_validate_char_name(){
        $user = Auth::instance()->get_user();
         if (HTTP_Request::POST == $this->request->method()) {
            $charname =  Arr::get($_POST, 'charname');
            $gameid =  Arr::get($_POST, 'gameid');
            $serverid =  Arr::get($_POST, 'serverid');
            $factionid =  Arr::get($_POST, 'factionid');
            
            if($factionid == '')
            {
              $data = ORM::factory('CharacterDetail')->where('character_name', '=', $charname)->and_where('user_id', '=', $user->id)->and_where('game_id', '=', $gameid)->and_where('server_id', '=', $serverid)->and_where('faction_id', 'is', NULL)->and_where('is_public', '=', '1');  
            }
            else
            {
              $data = ORM::factory('CharacterDetail')->where('character_name', '=', $charname)->and_where('user_id', '=', $user->id)->and_where('game_id', '=', $gameid)->and_where('server_id', '=', $serverid)->and_where('faction_id', '=', $factionid)->and_where('is_public', '=', '1');
            }
            $total = $data->count_all();
          if ($total > 0) {
                echo '<span class="taken">Character Name Already Exists</span>';
            }           
            $this->auto_render = FALSE;
        }
    }
    
    /* Validate character name already exist on edit screen */

    public function action_edit_validate_char_name(){
        $user = Auth::instance()->get_user();
         if (HTTP_Request::POST == $this->request->method()) {
            $charname =  Arr::get($_POST, 'charname');
            $gameid =  Arr::get($_POST, 'gameid');
            $serverid =  Arr::get($_POST, 'serverid');
            $factionid =  Arr::get($_POST, 'factionid');
           $char_id = Arr::get($_POST, 'char_id');
            
            if($factionid == '')
            {
              $check = ORM::factory('CharacterDetail')->where('character_name', '=', $charname)->and_where('user_id', '=', $user->id)->and_where('game_id', '=', $gameid)->and_where('server_id', '=', $serverid)->and_where('character_detail_id','=',$char_id)->and_where('faction_id', 'is', NULL)->and_where('is_public', '=', '1')->find();  
            }
            else
            {
            $check = ORM::factory('CharacterDetail')->where('character_name', '=', $charname)->and_where('user_id', '=', $user->id)->and_where('game_id', '=', $gameid)->and_where('server_id', '=', $serverid)->and_where('character_detail_id','=',$char_id)->and_where('faction_id', '=', $factionid)->and_where('is_public', '=', '1')->find();
            }
          
            if($check->server_id == $serverid && $check->faction_id == $factionid)
            {
                echo '';
            }
            else
            {
            if($factionid == '')
            {
              $data = ORM::factory('CharacterDetail')->where('character_name', '=', $charname)->and_where('user_id', '=', $user->id)->and_where('game_id', '=', $gameid)->and_where('server_id', '=', $serverid)->and_where('faction_id', 'is', NULL)->and_where('is_public', '=', '1');  
            }
            else
            {
            $data = ORM::factory('CharacterDetail')->where('character_name', '=', $charname)->and_where('user_id', '=', $user->id)->and_where('game_id', '=', $gameid)->and_where('server_id', '=', $serverid)->and_where('faction_id', '=', $factionid)->and_where('is_public', '=', '1');
            }
            $total = $data->count_all();
          if ($total > 0) {
                echo '<span class="taken">Character Name Already Exists</span>';
            }
            }
           
            $this->auto_render = FALSE;
        }
    }

    /* Character create event */
    public function action_create_event() {
        $user = Auth::instance()->get_user();
        $this->template->title = "Create Event";
        $characters = Model::factory('CharacterDetail')->get_game_list($user->id); 
        $this->template->content = View::factory('character/create_event')
                                    ->bind('characters',$characters);
    }
   
    /* get character name */    
    public function action_select_character_name(){
        $user = Auth::instance()->get_user();
        if (HTTP_Request::POST == $this->request->method()) {
           $charid =  Arr::get($_POST, 'char_id'); 
           $gameid =  Arr::get($_POST, 'game_id'); 
           $serverid =  Arr::get($_POST, 'server_id'); 
           $factionid =  Arr::get($_POST, 'faction_id'); 
           if (!isset($_POST['char_id']) || $_POST['char_id'] == null)
                $_POST['char_id'] = NULL;
           if (!isset($_POST['game_id']) || $_POST['game_id'] == null)
                $_POST['game_id'] = NULL;
           if (!isset($_POST['server_id']) || $_POST['server_id'] == null)
                $_POST['server_id'] = NULL;
           if (!isset($_POST['faction_id']) || $_POST['faction_id'] == null)
                $_POST['faction_id'] = NULL;
           $character_friends_id = DB::select('user_id')->from('zid_friends')->where('linked_id', '=', $user->id)->and_where('is_accepted', '=', 1)->execute()->as_array(); 
           if($character_friends_id == NULL || $character_friends_id == ""):
               $character_friends_id = array(NULL);
           endif;
           $characters_sends = Model::factory('CharacterDetail')->get_characters_send($user->id,$_POST, $character_friends_id);
           $chara_send_list = array();
           $i = 1;
            foreach ($characters_sends as $characters_send):
            $chara_send_list[$characters_send->character_name.'-'.ucfirst($characters_send->username)] = $characters_send->character_detail_id;
           $i++;
            endforeach;
            echo json_encode($chara_send_list);
        }
      $this->auto_render = FALSE;
    }
    
    /* Create character event */
    public function action_create_char_event(){
        $user = Auth::instance()->get_user();
        if (HTTP_Request::POST == $this->request->method()) {
           $charid =  Arr::get($_POST, 'charid'); 
           $event_name =  Arr::get($_POST, 'event_name'); 
           $event_date =  Arr::get($_POST, 'event_date'); 
	   $event_from_date =  Arr::get($_POST, 'event_from_date'); 
           $event_to_date =  Arr::get($_POST, 'event_to_date'); 
           $event_send_to =  Arr::get($_POST, 'event_send_to'); 
           $event_rsvp =  Arr::get($_POST, 'event_rsvp'); 
           $event_desc =  Arr::get($_POST, 'event_desc'); 
       	   $create_date =  Arr::get($_POST, 'create_date'); 	
           $event_timezone =  Arr::get($_POST, 'event_timezone');	
            if (!isset($_POST['guild_id']) || $_POST['guild_id'] == '')
            $_POST['guild_id'] = 'NULL';
            // Event Next date
            if($event_from_date > $event_to_date):
            $event_next_date = date("Y-m-d", strtotime($event_date ." +1 days") );
            else:
            $event_next_date = $event_date;
            endif; 
           $explode_character_id = explode(',',$event_send_to);
           for($i=0;$i<=sizeof($explode_character_id)-1;$i++):
           $character_id_array = ORM::factory('CharacterDetail')->where('character_detail_id', '=', $explode_character_id[$i])->find();
           $character_userid[] = $character_id_array->user_id;
           endfor;
           $array_list = array_filter($character_userid);
           $character_userid = implode(',', $array_list);
           $event = Model::factory("CharacterDetail")->add_character_event($user->id,$_POST,$character_userid,$event_next_date); 
	        $now = new DateTime();
                // Send message to guild members
                $message = ORM::factory('Message');
                $message->user_id = $user->id;
                $message->character_detail_id = $charid;
                $message->guild_receiver_id = $user->id.','.$character_userid;
                $message->subject = "New Event Notification";
                $message->message = $event_desc;
                $message->event_id = $event;
                $message->is_message_parent = 1;
                $message->created_date = $create_date;
                $message->last_modified_date = $create_date;
                $message->save();                
                echo $event;
        }        
      $this->auto_render = FALSE;
    }

}
