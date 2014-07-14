<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Guild extends Controller_Template_Guild {

    // To list all guilds
    public function action_index() {
        $this->template->title = "Guilds Listing";
        $user = Auth::instance()->get_user();
        // Get guild full list
        $guild_list = Model::factory('guild')->get_guild_list($user->id);
        // Get favorites
        $favorites = Model::factory('Favorites')->get_favorites($user->id);
        // Left content     
        $this->template->left_content = Controller_Helper::action_left_bar($user->id);
        // Right content
        $this->template->content = View::factory('guild/index')
                ->bind('guild_list', $guild_list)
                ->bind('favorites', $favorites)
                ->bind('user', $user);
    }

    // Add New Guild 
    public function action_add() {
        $user = Auth::instance()->get_user();
        $this->template->title = "Add Guild";
        // Get games list
        $games = ORM::factory("Game")->where('is_active', '=', '1')->order_by('game_name','ASC')->find_all();
        // Left content     
        $this->template->left_content = Controller_Helper::action_left_bar($user->id);
        // Right content
        $this->template->content = View::factory('guild/add')
                ->bind("games", $games);
        $view = "Guild";
        $guild_id = NULL;
        $directory = Kohana::$config->load('myconf')->path['guild'];
        // Profile image cropping popup
        $this->template->content->image_crop_view = View::factory('helper/popup/image_crop_popup')
                ->bind('view', $view)
                ->bind('directory', $directory)
                ->bind('id', $guild_id);
        $this->template->content->game_request_popup = View::factory('helper/popup/game_request_popup')
                ->bind('user', $user);
    }

    // Edit Guild       
    public function action_edit() {
        $this->template->title = "Edit Guild";
        $guild_id = $this->request->param('id'); // guild id
         $user = Auth::instance()->get_user();
        // Get guild info
        $guild = Model::factory('guild')->get_guild($guild_id);
        
        if ($user->id == $guild->user_id) {
            // Get games list
            $games = ORM::factory("Game")->where('is_active', '=', '1')->find_all();
            // Get servers
            $server = Model::factory('Server')->get_servers($guild->game_id);
            // Get factions
            $faction_count = ORM::factory("Faction")->where('game_id', '=', $guild->game_id)->and_where('faction_name','=','N/A')->and_where('is_active', '=', '1')->order_by('faction_name', 'ASC')->count_all();
             $hidden_faction_count = ORM::factory("Faction")->where('game_id', '=', $guild->game_id)->and_where('is_active', '=', '1')->order_by('faction_name', 'ASC')->count_all();
            $factions = Model::factory('Faction')->get_factions($guild->game_id);
            
            if ($user && HTTP_Request::POST == $this->request->method()) {
             
                if (!isset($_POST['pve']))
                    $_POST['pve'] = 0;
                if (!isset($_POST['pvp']))
                    $_POST['pvp'] = 0;
                if (!isset($_POST['enable_minibio']))
                    $_POST['enable_minibio'] = 0;
                if (!isset($_POST['rp']))
                    $_POST['rp'] = 0;
                if (!isset($_POST['server']))
                    $_POST['server'] = 'NULL';
                if (!isset($_POST['faction']) || $_POST['faction'] == '')
                    $_POST['faction'] = 'NULL';
                if (!isset($_POST['accept_applicant']))
                    $_POST['accept_applicant'] = 0;
                if (!isset($_POST['guild_bio']))
                    $_POST['guild_bio'] = 'NULL';
                if (!isset($_POST['game']))
                    $_POST['game'] = 'NULL';
                if (!isset($_POST['guild_name']))
                    $_POST['guild_name'] = 'NULL';
                if (!isset($_POST['url']))
                    $_POST['url'] = 'NULL';
                if (!isset($_POST['password']))
                    $_POST['password'] = 'NULL';
                if (!isset($_POST['service']))
                    $_POST['service'] = 'NULL';
                if (!isset($_POST['port']))
                    $_POST['port'] = 'NULL';
                 if (!isset($_POST['second_url']))
                    $_POST['second_url'] = 'NULL';
                 if (!isset($_POST['second_service']))
                    $_POST['second_service'] = 'NULL';
                 if (!isset($_POST['second_password']))
                    $_POST['second_password'] = 'NULL';
                 if (!isset($_POST['second_port']))
                    $_POST['second_port'] = 'NULL';
                                
                Model::factory("guild")->update_guild($user->id, $guild_id, $_POST);
            }
            // Right content
            $this->template->content = View::factory('guild/edit')
                    ->bind("games", $games)
                    ->bind("servers", $server)
                    ->bind("guild", $guild)
                    ->bind("faction_count",$faction_count)
                    ->bind("hidden_faction_count",$hidden_faction_count)
                    ->bind("factions", $factions);
            $view = "Guild";
            $directory = Kohana::$config->load('myconf')->path['guild'];
            // Profile image cropping popup
            $this->template->content->image_crop_view = View::factory('helper/popup/image_crop_popup')
                    ->bind('view', $view)
                    ->bind('directory', $directory)
                    ->bind('id', $guild_id);
            $this->template->content->game_request_popup = View::factory('helper/popup/game_request_popup')
                    ->bind('user', $user);
        }
        else {
            $this->redirect('/feeds');
        }
        if (!$guild_id) {
            $this->redirect('/feeds');
        }
    }

    // Save Profile Image 
    public function action_saveimage() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            $upload_dir = Kohana::$config->load('myconf')->path['guild'];
            if (isset($_POST["profile_image"]) && !empty($_POST["profile_image"])) {
                $filename = Controller_Helper::action_save_profile_image($_POST["profile_image"], $_POST['x1'], $_POST['y1'], $_POST['w'], $_POST['h'], $upload_dir);
                Model::factory('guild')->save_profile_image($filename, $_POST['guild_id']);
                echo $filename;
            }
        }
        $this->auto_render = FALSE;
    }

    // Save Guild Info 
    public function action_create() {
        $user = Auth::instance()->get_user();
        if (HTTP_Request::POST == $this->request->method())  {            
            if (!isset($_POST['pve']))
                    $_POST['pve'] = 0;
                if (!isset($_POST['pvp']))
                    $_POST['pvp'] = 0;
                if (!isset($_POST['enable_minibio']))
                    $_POST['enable_minibio'] = 0;
                if (!isset($_POST['rp']))
                    $_POST['rp'] = 0;
                if (!isset($_POST['server']) || $_POST['server'] == '')
                    $_POST['server'] = 'NULL';
                if (!isset($_POST['faction']) || $_POST['faction'] == '')
                    $_POST['faction'] = 'NULL';
                if (!isset($_POST['accept_applicant']))
                    $_POST['accept_applicant'] = 0;
                if (!isset($_POST['guild_bio']))
                    $_POST['guild_bio'] = 'NULL';
                if (!isset($_POST['game']))
                    $_POST['game'] = 'NULL';
                if (!isset($_POST['guild_name']))
                    $_POST['guild_name'] = 'NULL';
                if (!isset($_POST['url']))
                    $_POST['url'] = 'NULL';
                if (!isset($_POST['password']))
                    $_POST['password'] = 'NULL';
                if (!isset($_POST['service']))
                    $_POST['service'] = 'NULL';
                if (!isset($_POST['port']))
                    $_POST['port'] = 'NULL';
                 if (!isset($_POST['second_url']))
                    $_POST['second_url'] = 'NULL';
                 if (!isset($_POST['second_service']))
                    $_POST['second_service'] = 'NULL';
                 if (!isset($_POST['second_password']))
                    $_POST['second_password'] = 'NULL';
                 if (!isset($_POST['second_port']))
                    $_POST['second_port'] = 'NULL';
                                   
            $guild_name = $_POST['guild_name'];
            $gameid = $_POST['game'];
            $serverid = $_POST['server'];
            $factionid = $_POST['faction'];
            $guild_id = $_POST['guild_id'];
                      
            if ($factionid == 'NULL') {
                $data = ORM::factory('guild')->where('guild_name', '=', $guild_name)->and_where('user_id', '=', $user->id)->and_where('game_id', '=', $gameid)->and_where('server_id', '=', $serverid)->and_where('faction_id', 'is', NULL)->and_where('is_active', '=', '1');
                 $find_value = ORM::factory('guild')->where('guild_name', '=', $guild_name)->and_where('user_id', '=', $user->id)->and_where('game_id', '=', $gameid)->and_where('guild_id', '=', $guild_id)->and_where('server_id', '=', $serverid)->and_where('faction_id', 'is', NULL)->and_where('is_active', '=', '1')->find();
                  $faction_value = '';
                 } else {
                $data = ORM::factory('guild')->where('guild_name', '=', $guild_name)->and_where('user_id', '=', $user->id)->and_where('game_id', '=', $gameid)->and_where('server_id', '=', $serverid)->and_where('faction_id', '=', $factionid)->and_where('is_active', '=', '1');
              $find_value = ORM::factory('guild')->where('guild_name', '=', $guild_name)->and_where('user_id', '=', $user->id)->and_where('game_id', '=', $gameid)->and_where('guild_id', '=', $guild_id)->and_where('server_id', '=', $serverid)->and_where('faction_id', '=', $factionid)->and_where('is_active', '=', '1')->find();
              $faction_value = $factionid;
              }
             $total = $data->count_all();
           
            if(($find_value->server_id == $serverid && $find_value->faction_id == $faction_value))
            {
            $result = Model::factory("guild")->update_guild($user->id, $guild_id, $_POST);
                echo "update";
            } elseif($total > 0) {
                echo 'Failed';
            }
            else{
            
            if ($_POST['submit'] == 'Create') {
                if (!isset($_POST['guild_id']) || $_POST['guild_id'] == null):
                    $guild = ORM::factory('guild')->where('user_id', '=', $user->id)->find();
                    $guild_id = $guild->guild_id;
                else:
                    $guild_id = $_POST['guild_id'];
                endif;
                // Update guild
                $result = Model::factory("guild")->update_guild($user->id, $guild_id, $_POST);
                echo "update";
            }else {                        
                $result = Model::factory("guild")->add_guild($user->id, $_POST);
                // Add Guild Member(Guild Leader)
                $guild_leader = ORM::factory('GuildMembers');
                $guild_leader->guild_id = $result;
                $guild_leader->user_id = $user->id;
                $guild_leader->character_detail_id = $_POST['character'];
                $guild_leader->guild_role_id = '1';
                $guild_leader->is_accepted = '1';
                $guild_leader->save();
                // Save guild id
                Model::factory('CharacterDetail')->save_guild_character($result, $_POST['character']);
                echo "save";
                $guild_count = ORM::factory('guild')->where('user_id', '=', $user->id)->and_where('is_active','=','1')->count_all();
                if($guild_count < 4):
                                    
                $favorite_id = $result; // favorite guild id
                $this->auto_render = FALSE;
                $user = Auth::instance()->get_user();
                // Get favorites
                $favorites = Model::factory('Favorites')->get_favorites($user->id);
                // Favorite guild limitations
                $limit = Kohana::$config->load('myconf')->favorite_guild_limit;
                if ($favorites->favorite_id):
                    $favorite_list = explode(",", $favorites->guild_favorite);
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
                    // Save guild favorites
                    Model::factory('Favorites')->save_guild_favorites($favorites->favorite_id, $list);
                else:
                    // Add new favorite guild
                    $favObj = ORM::factory('Favorites');
                    $favObj->guild_favorite = $favorite_id;
                    $favObj->user_id = $user->id;
                    $favObj->last_modified_date = date('y/m/d h:i:s', time());
                    $favObj->save();
                    echo "selected";
                    endif;                     
                endif;                
            }
        }            
        $this->auto_render = FALSE;
      }    
    }
    

    // View Guild 
    public function action_view() {
        $guild_id = $this->request->param('id'); // guild id
        $user = Auth::instance()->get_user();
        // Get guild info
        $guild = Model::factory('guild')->get_guild($guild_id);
        // Get existing banners
        $existing_banners = Model::factory('media')->get_existing_banners($user->id);
        // Get banner
        $banner = Model::factory('media')->get_banner($guild->banner_id);
        // Get guild character
        $guild_character = Model::factory('CharacterDetail')->get_guild_character($user->id, $guild_id);
        // Get guild member role
        $guild_member_role = Model::factory('GuildMembers')->get_member_role($user->id, $guild_id);
        // Get guild profile feeds
        $feeds = Model::factory('GuildFeeds')->get_all_feeds($guild_id);
        //twitter status
            $twitter_status = ORM::factory('user')->where('id', '=', $user->id)->find();
            $timezone = $twitter_status->user_timezone;  
        // Right content
        $this->template->content = View::factory('guild/view')
                ->bind("guild", $guild)
                ->bind('guild_character', $guild_character)
                ->bind('guild_role', $guild_member_role)
                ->bind('user', $user)
                ->bind('twitter_status',$twitter_status)
                ->bind('banner', $banner);
        $feed_type = 'guild_feed';
        $this->template->content->feed_view = View::factory('guild/feeds/feed')
                ->bind("guild", $guild)
                ->bind('timezone',$timezone)    
                ->bind('guild_character', $guild_character)
                ->bind('feeds', $feeds)
                ->bind('user', $user)
                ->bind('feed_type', $feed_type);

        // Media popup
        $this->template->content->media_popup_view = View::factory('helper/popup/media_popup');

        // Existing banner popup
        $this->template->content->banner_popup_view = View::factory('helper/popup/banner_popup')
                ->bind('existing_banners', $existing_banners)
                ->bind('view_id', $guild_id);

        // Youtube video script
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');

        // Media image resize script
        $this->template->content->media_resize_script_view = View::factory('helper/script/media_resize_script');

        // Header banner view 
        $this->template->content->banner_image_view = View::factory('helper/view/banner')
                ->bind('banner', $banner)
                ->bind('guild_id', $guild_id);
    }

    // Delete Guild
    public function action_delete() {
        $user = Auth::instance()->get_user();
        $guild_id = Arr::get($_POST, 'delete_id'); // guild id
        // Delete Guild Members
        Model::factory('GuildMembers')->delete_guild_members($guild_id);

        // Get Favorites
        $favorites = Model::factory('Favorites')->get_favorites($user->id);
        $favorite_list = explode(",", $favorites->guild_favorite);
        $check = array_search($guild_id, $favorite_list);
        if ($check !== false) {
            // Delete guild favorite
            unset($favorite_list[$check]);
            $favorite_list = array_filter($favorite_list);
            $list = implode(',', $favorite_list);
            // Save guild favorites
            Model::factory('Favorites')->save_guild_favorites($favorites->favorite_id, $list);
        }

        // Remove character from guild
        Model::factory('CharacterDetail')->remove_guild_character($guild_id);

        // Delete Guild Feeds 
        $guild_feeds = Model::factory('GuildFeeds')->get_guild_feeds($guild_id);
        if (count($guild_feeds) > 0):
            foreach ($guild_feeds as $guild_feed):
                if ($guild_feed->feed_media_id != NULL):
                    // Delete Guild Feed Media             
                    $feed_media = Model::factory('GuildFeedMedia')->get_feed_media($guild_feed->feed_id);
                    $directory = Kohana::$config->load('myconf')->path['media'];
                    if ($feed_media->file_path != NULL):
                        unlink($directory . $feed_media->file_path);
                    endif;
                    $feed_media->delete();
                    if ($feed_media->large_file_path != NULL):
                        unlink($directory . $feed_media->large_file_path);
                    endif;
                endif;
                // Delete feed
                Model::factory('GuildFeeds')->delete_feed($guild_feed->feed_id);
            endforeach;
        endif;

        // Delete Guild Feeds Comments
        Model::factory('GuildComments')->delete_all_comments($guild_id);

        // Delete Guild Messages
        Model::factory('Message')->delete_guild_messages($guild_id);

        // Delete Guild Events
        $events = Model::factory('Events')->get_guild_events($guild_id); // Get events
        if (count($events) > 0):
            foreach ($events as $event):
                $event_members = Model::factory('EventMembers')->get_guild_event_members($event->event_id); // Get event members
                if (count($event_members) > 0):
                    foreach ($event_members as $event_member):
                        $event_member->delete(); // Delete event member
                    endforeach;
                endif;
                Model::factory('Events')->delete_event($event->event_id); // Delete event
            endforeach;
        endif;

        // Delete Guild Information
        ORM::factory("guild", $guild_id)->delete();
        $this->auto_render = FALSE;
    }

    // Favorite Guild 
    public function action_favorite() {
        $favorite_id = Arr::get($_POST, 'guild_id'); // favorite guild id
        $this->auto_render = FALSE;
        $user = Auth::instance()->get_user();
        // Get favorites
        $favorites = Model::factory('Favorites')->get_favorites($user->id);
        // Favorite guild limitations
        $limit = Kohana::$config->load('myconf')->favorite_guild_limit;
        if ($favorites->favorite_id):
            $favorite_list = explode(",", $favorites->guild_favorite);
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
            // Save guild favorites
            Model::factory('Favorites')->save_guild_favorites($favorites->favorite_id, $list);
        else:
            // Add new favorite guild
            $favObj = ORM::factory('Favorites');
            $favObj->guild_favorite = $favorite_id;
            $favObj->user_id = $user->id;
            $favObj->last_modified_date = date('y/m/d h:i:s', time());
            $favObj->save();
            echo "selected";
        endif;
    }

    // Not your profile guild list 
    public function action_others() {
        $this->template->title = "Guilds Listing";
        $user_id = $this->request->param('id');
        $auth_user = Auth::instance()->get_user();
        // Get user info
        $user = Model::factory('User')->get_user($user_id);
        if ($auth_user->id != $user->id) {
            $guild_list = Model::factory('guild')->get_guild_list($user->id);
            // Get favorites
            $favorites = Model::factory('Favorites')->get_favorites($user->id);
            // Left content     
            $this->template->left_content = Controller_Helper::action_left_bar($user->id);
            // Right content
            $this->template->content = View::factory('guild/not_your_guild')
                    ->bind('guild_list', $guild_list)
                    ->bind('favorites', $favorites)
                    ->bind('user', $user);
        } else {
            $this->redirect('guild/');
        }
        if (!$user->id)
            $this->redirect('feeds/');
    }

    // Not your guild profile 
    public function action_profile() {
        $guild_id = $this->request->param('id'); // guild id
        $auth_user = Auth::instance()->get_user();
        // Get guild info
        $guild = Model::factory('guild')->get_guild($guild_id);
        // Get user info
        $user = Model::factory('User')->get_user($guild->user_id);
        $user_zone = ORM::factory('user')->where('id', '=', $auth_user)->find();
        $timezone = $user_zone->user_timezone;
        if ($auth_user->id != $user->id) {
            // Get banner
            $banner = Model::factory('media')->get_banner($guild->banner_id);
            // Get guild character
            $guild_character = Model::factory('CharacterDetail')->get_guild_character($auth_user->id, $guild_id);
            // Get guild member role
            $guild_member_role = Model::factory('GuildMembers')->get_member_role($auth_user->id, $guild_id);
            // Get guild profile feeds
            $feeds = Model::factory('GuildFeeds')->get_all_feeds($guild_id);
             //twitter status
            $twitter_status = ORM::factory('user')->where('id', '=', $user->id)->find();
            // Right content
            $this->template->content = View::factory('guild/view')
                    ->bind("guild", $guild)
                    ->bind('timezone',$timezone)   
                    ->bind('guild_character', $guild_character)
                    ->bind('guild_role', $guild_member_role)
                    ->bind('user', $auth_user)
                    ->bind('twitter_status',$twitter_status)
                    ->bind('banner', $banner);
            // Feed view
            $feed_type = 'guild_feed';
            $this->template->content->feed_view = View::factory('guild/feeds/feed')
                    ->bind("guild", $guild)
                    ->bind('timezone',$timezone)       
                    ->bind('guild_character', $guild_character)
                    ->bind('feeds', $feeds)
                    ->bind('user', $auth_user)
                    ->bind('feed_type', $feed_type);

            // Media popup
            $this->template->content->media_popup_view = View::factory('helper/popup/media_popup');

            // Youtube video script
            $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');

            // Media resize script
            $this->template->content->media_resize_script_view = View::factory('helper/script/media_resize_script');

            // Banner image view
            $this->template->content->banner_image_view = View::factory('helper/view/banner')
                    ->bind('banner', $banner)
                    ->bind('guild_id', $guild_id);
        } else {
            $this->redirect('guild/');
        }
        if (!$guild->guild_id)
            $this->redirect('guild/');
    }

    // Get Existing Banner 
    function action_get_existing_Guild_banner(){
        $guild_id = $this->request->param('id'); // guild id
        $user = Auth::instance()->get_user();
         // Get existing banners
        $existing_banners = Model::factory('media')->get_existing_banners($user->id);
        $this->template = View::factory('template/blank');
        $this->template->content = View::factory('helper/popup/banner_popup')
                                    ->bind('existing_banners', $existing_banners)
                                    ->bind('view_id', $guild_id);
    }

    // Apply guild membership 
    public function action_apply_membership() {
        $user = Auth::instance()->get_user();
        if (HTTP_Request::POST == $this->request->method()) {
            // Add guild member    
            Model::factory("GuildMembers")->add_member($user->id, $this->request->post());
            // Add Membership message
            Model::factory("Message")->add_membership_message($user->id, $this->request->post());
            // Save guild character
            Model::factory('CharacterDetail')->save_guild_character($_POST['guild_id'], $_POST['character']);
            echo "success";
            $this->auto_render = FALSE;
        }
    }

    // Guild Members 
    public function action_members() {
        $guild_id = $this->request->param('id'); // guild id
        $user = Auth::instance()->get_user();
        // Get member role
        $role = Model::factory('GuildMembers')->get_member_role($user->id, $guild_id);
        // Get guild members
        $guild_members = Model::factory('GuildMembers')->get_guild_all_members($guild_id);
        // Right content
        $this->template->content = View::factory('guild/members')
                ->bind('guild_members', $guild_members)
                ->bind("user", $user)
                ->bind('role', $role);
    }

    // Promote guild member
    public function action_promote() {
        if (HTTP_Request::POST == $this->request->method()) {
            // Get guild member
            $guild_member = Model::factory('GuildMembers')->get_guild_member(Arr::get($_POST, 'memberid'));
            $role_id = $guild_member->guild_role_id;
            if ($role_id > 1) {
                $role_id--;
                if ($role_id == 1) {
                    // Update guild leader to guild officer
                    Model::factory('GuildMembers')->update_guild_officer($guild_member->guild_id, $role_id);
                    // Update guild - When promoted as guild leader
                    Model::factory('guild')->update_guild_user($guild_member->user_id, $guild_member->guild_id);
                }
                // Promote guild member as guild officer or guild leader
                Model::factory('GuildMembers')->update_guild_member(Arr::get($_POST, 'memberid'), $role_id);
                echo "success";
            }
            $this->auto_render = FALSE;
        }
    }

    // Demote guild member 
    public function action_demote() {
        if (HTTP_Request::POST == $this->request->method()) {
            $this->auto_render = FALSE;
            // Get guild member
            $guild_member = Model::factory('GuildMembers')->get_guild_member(Arr::get($_POST, 'memberid'));
            $role_id = $guild_member->guild_role_id;
            if ($role_id < 3) {
                $role_id++;
                // Demote guild member 
                Model::factory('GuildMembers')->update_guild_member(Arr::get($_POST, 'memberid'), $role_id);
                echo "success";
            } else {
                echo "overlimit";
            }
        }
    }

    // Remove guild member 
    public function action_remove() {
        // Remove Guild Member
        $guild_member_id = Arr::get($_POST, 'remove_id'); // guild member id
        $guild_member = ORM::factory("GuildMembers", $guild_member_id);
        
        // Remove Guild Favorites
        $guild_id = Arr::get($_POST, 'guild_id'); // guild id
        $user_id = Arr::get($_POST, 'user_id'); // user id
        // Get favorites
        $favorites = Model::factory('Favorites')->get_favorites($user_id);
        $favorite_list = explode(",", $favorites->guild_favorite);
        $check = array_search($guild_id, $favorite_list);
        if ($check !== false) {
            // Remove guild favorite
            unset($favorite_list[$check]);
            $favorite_list = array_filter($favorite_list);
            $list = implode(',', $favorite_list);
            // Save guild favorites
            Model::factory('Favorites')->save_guild_favorites($favorites->favorite_id, $list);
        }

        // Remove character from guild
        Model::factory('CharacterDetail')->remove_guild_member_character($guild_id, $guild_member->character_detail_id);
        $guild_member->delete();
        $this->auto_render = FALSE;
    }

    // Guild Members 
    public function action_guildmembers() {
        $this->template->title = "Guild Members";
        $guild_id = $this->request->param('id');
        $user = Auth::instance()->get_user();
        // Get member role
        $role = Model::factory('GuildMembers')->get_member_role($user->id, $guild_id);
        // Get guild members
        $guild_members = Model::factory('GuildMembers')->get_guild_all_members($guild_id);
        // Right content
        $this->template->content = View::factory('guild/members')
                ->bind('guild_members', $guild_members)
                ->bind("user", $user)
                ->bind('role', $role);
    }

    // Guild Post Feed 
    public function action_post() {
        $user = Auth::instance()->get_user();
        $filename = NULL;
        $large_filename = NULL;
        $url = NULL;
        $youtube_url = NULL;
        $media_id = 'NULL';
        $facebook_posturl = NULL;
        $twitter_posturl = NULL;
        if (HTTP_Request::POST == $this->request->method()) {
            // Get Next Auto Increment Value From Feeds Table
            $query = mysql_query("SHOW TABLE STATUS LIKE 'zid_guild_feeds' ");
            $row = mysql_fetch_array($query);
            $get_feed_id = $row['Auto_increment'];
            //Post feed to Facebook      
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
                $post_url = "https://www.zergid.com/guild/feed/".$_POST['guild_id'].'/'.$get_feed_id.' ';
                Controller_Feeds::action_facebook_post($feedtext, $media_file, $post_url,$_POST['youtube_url'],$facebook_posturl);
            }
             
             //twitter status
            $twitter_status = ORM::factory('user')->where('id', '=', $user->id)->find();
            // Post feed to Twitter
            $session = Session::instance();
            if (count($session->get('access_token')) > 0  && $twitter_status->twitter_active == 1) {
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
                if(strlen($feedtext) <= 100):
                      $feedsubtext = $feedtext;
                  else:
                      $feedsubtext = Text::limit_chars($feedtext,100,'...');
                  endif;
                $post_url = " ".URL::site(NULL, TRUE)."guild/feed/".$_POST['guild_id'].'/'.$get_feed_id.' ';
                Controller_Feeds::action_twitter_post($feedsubtext, $media_file, $_POST['youtube_url'], $twitter_posturl, $post_url);
            }

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
                        $directory = Kohana::$config->load('myconf')->path['media'];
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
                            $url = $_POST['embed_url'];  
                         endif; 
                        if(count($embed_string) > 0):
                           $string = $embed_string[1];
                           $string_url = explode('/', $string);
                        if($string_url[2] == 'www.youtube.com'):
                           $url = 'http://www.youtube.com/watch?v='.$string_url[4];
                           elseif($string_url[2] == 'twitch.tv'):
                           $url = $_POST['embed_url']; 
                        elseif ($string_url[2] == 'player.vimeo.com'):
                            $url = $_POST['embed_url'];
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
                    $media = ORM::factory('GuildFeedMedia');
                    $media->file_path = $filename;
                    $media->large_file_path = $large_filename;
                    $media->youtube_url = $url;
                    $media->save();
                    $media_id = $media->feed_media_id;
                    endif;
                }
                else if ($_POST['feedtext'] != NULL) {
                preg_match("/www\.youtube\.com\/watch\?v\=(.{11})/", $_POST['feedtext'], $yurl);
                preg_match('/<iframe.*src=\"(.*)\".*/isU', $_POST['feedtext'], $embed_string);
                preg_match('/<a.*href=\"(.*)\".*/isU',$_POST['feedtext'], $twitch_string);
                if (count($yurl) > 0 || count($embed_string) > 0 || count($twitch_string) > 0):
                    $media = ORM::factory('GuildFeedMedia');
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
                        $_POST['feedtext'] = NULL;
                           elseif(count($twitch_string) > 0):
                             $twitch_string_url = explode('/',$twitch_string[1]);    
                        if($twitch_string_url[2] = "www.twitch.tv"):
                             $youtube_url =  $_POST['feedtext'];
                             $_POST['feedtext'] = NULL;
                        endif;
                            $_POST['feedtext'] = $_POST['feedtext'] .'<div style="margin-top:10px">'. $_POST['embed_url'].'</div>';
                        endif;
                        else:
                            $_POST['feedtext'] = $_POST['feedtext'] .'<div style="margin-top:10px">'. $_POST['embed_url'].'</div>';
                    endif;
                    if($youtube_url != NULL):
                    $media->file_path = NULL;
                    $media->youtube_url = $youtube_url;
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
                    $media = ORM::factory('GuildFeedMedia');
                    $media->file_path = $_POST['media_name'];
                    $media->youtube_url = $_POST['url_string'];
                    $media->save();
                    $media_id = $media->feed_media_id;
                else:
                    $media_id = 'NULL';
                endif;
            }

            if (!isset($_POST['parent_id']) || $_POST['parent_id'] == null)
                $_POST['parent_id'] = 'NULL';
            $feed_id = Model::factory("GuildFeeds")->add_guild_feeds($user->id, $media_id, $_POST);
            if (($media_id != "" || $media_id != NULL) && !isset($_POST['media_name'])) {
                // update feed id
                Model::factory('GuildFeedMedia')->update_feed_media($feed_id, $media_id);
            }           
        }
        $this->auto_render = FALSE;
        if (!isset($_POST['parent_id']) || $_POST['parent_id'] == 'NULL') {
            $this->redirect(Request::initial()->referrer());
        } else {
            echo "success";
        }
    }

    // Save feed media 
    protected function _save_media($image) {
        if (!Upload::valid($image) OR !Upload::not_empty($image) OR !Upload::type($image, array('jpg', 'jpeg', 'png', 'gif'))) {
            return FALSE;
        }
        $directory = Kohana::$config->load('myconf')->path['media'];
        $file = Upload::save($image, NULL, $directory);
        if ($file) {
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

    // Feed more 
    public function action_feed_more() {
        $user = Auth::instance()->get_user();
        $this->template = View::factory('template/blank');
        $lastfeed = Arr::get($_POST, 'lastmsg');
        $feed_type = Arr::get($_POST, 'feed');
        $guild_id = Arr::get($_POST, 'guild_id'); // guild id
        // Get guild info
        $guild = Model::factory('guild')->get_guild($guild_id);
        // Get guild character
        $guild_character = Model::factory('CharacterDetail')->get_guild_character($user->id, $guild_id);
        $user_zone = ORM::factory('user')->where('id', '=', $user)->find();
        $timezone = $user_zone->user_timezone;

        // All feeds
        if ($feed_type == 'guild_feed') {
            $feeds = Model::factory('GuildFeeds')->get_guild_more_feeds($guild_id, $lastfeed);
            $timezone = $user_zone->user_timezone;
        }

        // Officers feeds
        if ($feed_type == 'officers_feed') {
            $feeds = Model::factory('GuildFeeds')->get_guild_members_more_feeds($guild_id, $lastfeed, array(1, 2));
            $timezone = $user_zone->user_timezone; 
        }

        // Members feeds
        if ($feed_type == 'members_feed') {
            $feeds = Model::factory('GuildFeeds')->get_guild_members_more_feeds($guild_id, $lastfeed, array(3));
            $timezone = $user_zone->user_timezone;
        }

        // Guild member role
        $guild_member_role = Model::factory('GuildMembers')->get_member_role($user->id, $guild_id);

        // Right content
        $this->template->content = View::factory('guild/feeds/feed_more');
                     
        $this->template->content->feed_view = View::factory('guild/feeds/feed')
                ->bind("guild", $guild)
                ->bind('guild_character', $guild_character)
                ->bind("feeds", $feeds)
                ->bind('user', $user)
                ->bind('timezone',$timezone)
                ->bind('guild_role', $guild_member_role)
                ->bind('feed_type', $feed_type);
        
        // Youtube video script
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
    }

    // Guild Officers Feed 
    public function action_officers_feed() {
        $user = Auth::instance()->get_user();
        $this->template = View::factory('template/blank');
        $guild_id = $this->request->param('id'); // guild id
        // Get guild info
        $guild = Model::factory('guild')->get_guild($guild_id);
        // Get guild character
        $guild_character = Model::factory('CharacterDetail')->get_guild_character($user->id, $guild_id);
        // Get officers posted feeds
        $feeds = Model::factory('GuildFeeds')->get_guild_members_feed($guild_id, array(1, 2));
        // Guild member role
        $guild_member_role = Model::factory('GuildMembers')->get_member_role($user->id, $guild_id);
        $user_zone = ORM::factory('user')->where('id', '=', $user)->find();
        $timezone = $user_zone->user_timezone;
        // Right content
        $this->template->content = View::factory('guild/feeds/officers_feed');
        $feed_type = $this->request->action();
        $this->template->content->feed_view = View::factory('guild/feeds/feed')
                ->bind("guild", $guild)
                ->bind('guild_character', $guild_character)
                ->bind("feeds", $feeds)
                ->bind('user', $user)
                ->bind('timezone',$timezone)
                ->bind('guild_role', $guild_member_role)
                ->bind('feed_type', $feed_type);
        
        // Youtube video script
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
    }

    // Guild Members Feed 
    public function action_members_feed() {
        $user = Auth::instance()->get_user();
        $this->template = View::factory('template/blank');
        $guild_id = $this->request->param('id'); // guild id
        // Get guild info
        $guild = Model::factory('guild')->get_guild($guild_id);
        // Get guild character
        $guild_character = Model::factory('CharacterDetail')->get_guild_character($user->id, $guild_id);
        // Get guild members posted feeds
        $feeds = Model::factory('GuildFeeds')->get_guild_members_feed($guild_id, array(3));
        // Guild member role
        $guild_member_role = Model::factory('GuildMembers')->get_member_role($user->id, $guild_id);
        $user_zone = ORM::factory('user')->where('id', '=', $user)->find();
        $timezone = $user_zone->user_timezone;
        // Right content
        $this->template->content = View::factory('guild/feeds/members_feed');
        
        $feed_type = $this->request->action();
        $this->template->content->feed_view = View::factory('guild/feeds/feed')
                ->bind("guild", $guild)
                ->bind('timezone',$timezone)
                ->bind('guild_character', $guild_character)
                ->bind("feeds", $feeds)
                ->bind('user', $user)
                ->bind('guild_role', $guild_member_role)
                ->bind('feed_type', $feed_type);
        
        // Youtube video script
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
    }
    
    // Guild Forum
  public function action_forum() {
         $this->template = View::factory('template/blank');
         $user = Auth::instance()->get_user();
         $guild_id = $this->request->param('id');
         
         $character = Model::factory('CharacterDetail')->get_guildcharacter_forum($guild_id);
         $character_name = $character->character_name;
         $character_icon = $character->character_icon;
         
         $guild = Model::factory('guild')->get_guild($guild_id);
         $guild_name = $guild->guild_name;
         $guild_image = $guild->guild_logo;
         
         // Right content
        $this->template->content = View::factory('guild/feeds/forum')
                                    ->bind('guild_id',$guild_id)
                                    ->bind('guild_image',$guild_image)
                                    ->bind('guild_name',$guild_name)
                                    ->bind('character_icon',$character_icon) 
                                    ->bind('character_name',$character_name);
    }

    // Post Comment 
    public function action_post_comment() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            Model::factory("GuildComments")->add_comments($user->id, $_POST);
            echo "success";
        }
        $this->auto_render = FALSE;
    }

    // View Guild Feed 
    public function action_feed() {
        $user = Auth::instance()->get_user();
        $this->template->title = "Feeds";
        $guild_id = $this->request->param('id'); // guild id
        $feed_id = $this->request->param('id1'); // feed id
        // Get feed
        $feed = Model::factory('GuildFeeds')->get_feed($guild_id, $feed_id);
        // Get feed comments
        $comment = Model::factory('GuildComments')->get_comments($feed_id);
        $comment->reset(FALSE);
        $comment_count = $comment->count_all(); // comment count
        $comments = $comment->limit(10)->find_all();
        // Get guild character
        $guild_character = Model::factory('CharacterDetail')->get_guild_character($user->id, $guild_id);
        // Guild member role
        $guild_member_role = Model::factory('GuildMembers')->get_member_role($user->id, $guild_id);
        $user_zone = ORM::factory('user')->where('id', '=', $user)->find();
        $timezone = $user_zone->user_timezone;
        // Right content
        $this->template->content = View::factory('guild/feeds/feed_view')
                ->bind('feed', $feed)
                ->bind('comments', $comments)
                ->bind('timezone',$timezone)
                ->bind('comment_count', $comment_count)
                ->bind('user', $user)
                ->bind('guild_character', $guild_character)
                ->bind('guild_role', $guild_member_role);

        // Youtube embed video script
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
    }

    // Feed comment more 
    public function action_comment_more() {
        $user = Auth::instance()->get_user();
        $this->template = View::factory('template/blank');
        $last_comment = Arr::get($_POST, 'lastmsg'); // last comment id
        $feed_id = Arr::get($_POST, 'feedid'); // feed id
        // Get feed comments
        $comments = Model::factory('GuildComments')->get_comments_more($feed_id, $last_comment);
        $user_zone = ORM::factory('user')->where('id', '=', $user)->find();
        $timezone = $user_zone->user_timezone;
        // Right content
        $this->template->content = View::factory('guild/feeds/comment_more')
                ->bind("comments", $comments)
                ->bind('feedid', $feed_id)
                ->bind('timezone',$timezone) 
                ->bind('user', $user);
    }

    // Delete Guild Feed 
    public function action_delete_feed() {
        $feed_id = Arr::get($_POST, 'feedid'); // feed id
        // Delete feed comments
        Model::factory('GuildComments')->delete_feed_comments($feed_id);
        $feed = ORM::factory('GuildFeeds')->where('feed_id', '=', $feed_id)->find();
        if ($feed->feed_media_id != NULL) {
            $feed_media = Model::factory('GuildFeedMedia')->get_feed_media($feed_id);
            $directory = Kohana::$config->load('myconf')->path['media'];
            if ($feed->feed_media_id != NULL && $feed->parent_feed_id == NULL  && $feed_media->youtube_url == NULL && $feed_media->file_path != 'feed_default.jpg') {
            if($feed_media->file_path != NULL):
            unlink($directory . $feed_media->file_path);
            endif;
            if($feed_media->large_file_path != NULL):
            unlink($directory.$feed_media->large_file_path);   
            endif;
            }
            $feed_media->delete();
        }
        // Delete feed
        Model::factory('GuildFeeds')->delete_feed($feed_id);
        $this->auto_render = FALSE;
    }

    // Select Characters 
    public function action_select_characters() {
        $this->auto_render = FALSE;
        if (HTTP_Request::POST == $this->request->method()) {
            $server_id = Arr::get($_POST, 'server_id'); // server id
            $faction_id = Arr::get($_POST, 'faction_id'); // faction id
            if ($server_id == "null"):
                $server_id = NULL;
            endif;
            if ($faction_id == "null" || $faction_id == ""):
                $faction_id = NULL;
            endif;
            $user = Auth::instance()->get_user();
            // Get characters list
            $characters = Model::factory('CharacterDetail')
                    ->get_chracters_list($user->id, $server_id, $faction_id);
            $character_list = array();
            foreach ($characters as $character):
                $character_list[$character->character_name] = $character->character_detail_id;
            endforeach;
            echo json_encode($character_list);
        }
    }

    // Feed Zergit 
    public function action_zergit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $feed_id = Arr::get($_POST, 'feed_id'); // feed id
            // Get feed
            $feed = ORM::factory('GuildFeeds')->where('feed_id', '=', $feed_id)->find();
            $zergs_list = explode(",", $feed->zergs);
            $zergs_list[] = $user->id;
            $array_list = array_filter($zergs_list);
            $zergs_list = implode(',', $array_list);
            // Update zergit list
            Model::factory('GuildFeeds')->update_zergit_list($feed_id, $zergs_list);
            echo "success";
        }
        $this->auto_render = FALSE;
    }

    // Feed Unzergit
    public function action_unzergit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $feed_id = Arr::get($_POST, 'feed_id'); // feed id
            // Get feed
            $feed = ORM::factory('GuildFeeds')->where('feed_id', '=', $feed_id)->find();
            $zergs_list = explode(",", $feed->zergs);
            $unzerg = array_search($user->id, $zergs_list);
            if ($unzerg !== FALSE):
                unset($zergs_list[$unzerg]);
            endif;
            $zergs_list = array_filter($zergs_list);
            $list = implode(',', $zergs_list);
            // Update zergit list
            Model::factory('GuildFeeds')->update_zergit_list($feed_id, $list);
            echo "success";
        }
        $this->auto_render = FALSE;
    }

    // Comment Zergit 
    public function action_comment_zergit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $comment_id = Arr::get($_POST, 'comment_id'); // comment id
            // Get comment
            $comment = Model::factory('GuildComments')->get_comment($comment_id);
            $zergs_list = explode(",", $comment->zergs);
            $zergs_list[] = $user->id;
            $array_list = array_filter($zergs_list);
            $zergs_list = implode(',', $array_list);
            // Save zergit list
            Model::factory('GuildComments')->update_zergit_list($comment_id, $zergs_list);
            echo "success";
        }
        $this->auto_render = FALSE;
    }

    // Comment Unzergit 
    public function action_comment_unzergit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            $comment_id = Arr::get($_POST, 'comment_id'); // comment id
            // Get comment
            $comment = Model::factory('GuildComments')->get_comment($comment_id);
            $zergs_list = explode(",", $comment->zergs);
            $unzerg = array_search($user->id, $zergs_list);
            if ($unzerg !== FALSE):
                unset($zergs_list[$unzerg]);
            endif;
            $zergs_list = array_filter($zergs_list);
            $list = implode(',', $zergs_list);
            // Save zergit list
            Model::factory('GuildComments')->update_zergit_list($comment_id, $list);
            echo "success";
        }
        $this->auto_render = FALSE;
    }

    // Edit Feed 
    public function action_feed_edit() {
        $guild_id = $this->request->param('id'); // guild id
        $feed_id = $this->request->param('id1'); // feed id
        $feed_text = Arr::get($_POST, 'feed_text');
        // Update Feed Info
        Model::factory('GuildFeeds')->update_feed($feed_id, $feed_text);
        $this->redirect('guild/feed/' . $guild_id . '/' . $feed_id);
    }

     // Validate same guild name exist
     public function action_validate_guild_name(){
        $user = Auth::instance()->get_user();
         if (HTTP_Request::POST == $this->request->method()) {
            $guildname =  Arr::get($_POST, 'guildname');
           
            $data = ORM::factory('guild')->where('guild_name', '=', $guildname)->and_where('user_id', '=', $user->id)->and_where('is_active', '=', '1');
           $total = $data->count_all();
          if ($total > 0) {
                echo '<span class="taken">Guild Name Already Exists</span>';
            }
           
            $this->auto_render = FALSE;
        }
    }
}
