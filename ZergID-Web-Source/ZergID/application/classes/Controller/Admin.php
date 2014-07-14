<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Template_Admin {

    public function action_index() {
        $this->template->title = "Admin";
        $this->template->content = View::factory('admin/index');
    }

    public function action_add() {
        $this->template->title = "Add Game";
        $game_list = Model::factory('Game')->get_all_games();
        $games = ORM::factory("Game")->where('is_active', '=', '1')->find_all();
        $gamename_list = Model::factory('Game')->get_all_alpgames();
        $this->template->content = View::factory('admin/add')
                ->bind('gamenames', $gamename_list)
                ->bind('games', $game_list);
       
    }
    
     public function action_game_grid_details() {
        $this->template->title = "Add Game";
        $game_list = Model::factory('Game')->get_all_games();
        $this->template = View::factory('template/blank');
        $this->template->content = View::factory('admin/get_game_grid_details')
                                ->bind('games', $game_list);
       
    }
    public function action_game_add_details() {
        $this->template->title = "Add Game";
       $gamename_list = Model::factory('Game')->get_all_alpgames();
        $this->template = View::factory('template/blank');
        $this->template->content = View::factory('admin/game_add')
                                ->bind('gamenames', $gamename_list);
       
    }

    public function action_manage_user() {
        $this->template->title = "Manage User";        
        $user_list = ORM::factory('User')->where('is_deleted','=',1)->find_all();
        $this->template->content = View::factory('admin/manage_user')
                                  ->bind('user_list',$user_list);
    }
    
     public function action_deactivate_user() {
        $user_id = Arr::get($_POST, 'userid');
        $user = ORM::factory('User')->where('id', '=', $user_id)->find();
        $user->is_active = '1';
        $user->save();
        DB::query(Database::UPDATE, 'UPDATE zid_feeds set is_visible = 0 WHERE id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_guild_feeds set is_visible = 0 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_friends set is_active = 1 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_character_details set is_public = 0 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_guilds set is_active = 0 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_guild_members set is_accepted = 0 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_messages set is_message_active = 0 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_events set is_active = 0 WHERE user_id =' .$user_id)->execute();
        echo "deactive";
        $this->auto_render = FALSE;
    }
    
     public function action_activate_user() {
        $user_id = Arr::get($_POST, 'userid');
        $user = ORM::factory('User')->where('id', '=', $user_id)->find();
        $user->is_active = NULL;
        $user->save();
        DB::query(Database::UPDATE, 'UPDATE zid_feeds set is_visible = 1 WHERE id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_guild_feeds set is_visible = 1 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_friends set is_active = 0 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_character_details set is_public = 1 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_guilds set is_active = 1 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_guild_members set is_accepted = 1 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_messages set is_message_active = 1 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_events set is_active = 1 WHERE user_id =' .$user_id)->execute();
        echo "active";
        $this->auto_render = FALSE;
    }
   
    public function action_delete_user() {
        $user_id = Arr::get($_POST, 'userId');
        $user = ORM::factory('User')->where('id', '=', $user_id)->find();
        $user->is_deleted = '0';
        $user->save();
        DB::query(Database::UPDATE, 'UPDATE zid_feeds set is_visible = 0 WHERE id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_guild_feeds set is_visible = 0 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_friends set is_active = 1 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_character_details set is_public = 0 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_guilds set is_active = 0 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_guild_members set is_accepted = 0 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_messages set is_message_active = 0 WHERE user_id =' .$user_id)->execute();
        DB::query(Database::UPDATE, 'UPDATE zid_events set is_active = 0 WHERE user_id =' .$user_id)->execute();
        echo "Success";
        $this->auto_render = FALSE;
    }
    
    public function action_deleted_user() {
        $this->template->title = "Deleted User";        
        $user_list = ORM::factory('User')->where('is_deleted','=',0)->find_all();
        $this->template = View::factory('template/blank');
        $this->template->content = View::factory('admin/deleted_user')
                                  ->bind('user_list',$user_list);
    }

    public function action_manage_roles() {
        $this->template->title = "Manage Roles";        
        $role_list = ORM::factory('Role')->where('is_active','=',1)->order_by('role_id','desc')->find_all();
        $this->template->content = View::factory('admin/manage_roles')
                                  ->bind('role_list',$role_list);
    }
    
     public function action_add_roles() {
        if (HTTP_Request::POST == $this->request->method()) {
             $rolename = $_POST['role_name'];
            
        $data = Model::factory("Role")->add_role($rolename);
        echo 'Successfully Added';
                    }
        $this->auto_render = FALSE;
         //$this->redirect('admin/add');
    }
    
      public function action_role_edit_validate() {
        if (HTTP_Request::POST == $this->request->method()) {
            $rolename =  Arr::get($_POST, 'rolename');         
            $role_id =  Arr::get($_POST, 'role_id');
            $data = ORM::factory('Role')->where('role_name', '=', $rolename)->and_where('is_active', '=', '1')->and_where('role_id', '=', $role_id)->find();
            $total = $data->count_all();
            if ($total > 1) {
                echo $total;
            }
//            if($data->profession_id != NULL && $profession_id != $data->profession_id):
//                echo 'Profession Name Already Exists';
//            endif;
            
            $this->auto_render = FALSE;
        }
    }
    
     public function action_role_edit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['edit_roleid']) || $_POST['edit_roleid'] == null)
                $_POST['edit_roleid'] = 'NULL';
            if (!isset($_POST['edit_rolename']) || $_POST['edit_rolename'] == null)
                $_POST['edit_rolename'] = 'NULL';
                    
        $data = Model::factory("Role")->edit_role($_POST);
         echo 'Success';
        }
        $this->auto_render = FALSE;
        // $this->redirect('admin/add');
    }
    
    
     public function action_deleterole() {
        $role_id = Arr::get($_POST, 'roleId');
        $roles = ORM::factory('Role')->where('role_id', '=', $role_id)->find();
        $roles->is_active = '0';
        $roles->save();
        $this->auto_render = FALSE;
    }

        //To list game roles
    public function action_manage_content() {
        $this->template->title = "Manage Content";  
        $advs = ORM::factory('ManageContent')->where('id', '=', 1)->find();
        $this->template->content = View::factory('admin/manage_content')
                                      ->bind('advs',$advs);
    }
    
    public function action_select_ads() {
       $advs_id = Arr::get($_POST, 'advs_id');
       $advs = ORM::factory('ManageContent')->where('id', '=', 1)->find();
       $advs->is_checked = $advs_id;
       $advs->save();
       $this->auto_render = FALSE;
    }
 
    public function action_manage_character() {
        $this->template->title = "Character/Guild";
        $character_list = Model::factory('CharacterDetail')->get_admin_character_list();
        $games = ORM::factory("Game")->where('is_active', '=', '1')->order_by('game_name','ASC')->find_all();
        $server = ORM::factory("Server")->where('is_active', '=', '1')->order_by('server_name','ASC')->find_all();
        $this->template->content = View::factory('admin/character')
                                     ->bind("games", $games)
                                     ->bind("servers", $server)
                                     ->bind('character_list',$character_list);
    }
    
    public function action_character_details_view(){
        $this->template->title = "Character/Guild";
        $character_list = Model::factory('CharacterDetail')->get_admin_character_list();
        $games = ORM::factory("Game")->where('is_active', '=', '1')->order_by('game_name','ASC')->find_all();
        $server = ORM::factory("Server")->where('is_active', '=', '1')->order_by('server_name','ASC')->find_all();
        $this->template = View::factory('template/blank');
        $this->template->content = View::factory('admin/character')
                                   ->bind("games", $games)
                                   ->bind("servers", $server)
                                   ->bind('character_list',$character_list);
    }
    
    public function action_guild_details() {
        $this->template->title = "Character/Guild";
        $guild_list = Model::factory('guild')->get_admin_guild_list();
        $games = ORM::factory("Game")->where('is_active', '=', '1')->order_by('game_name','ASC')->find_all();
        $server = ORM::factory("Server")->where('is_active', '=', '1')->order_by('server_name','ASC')->find_all();
        $this->template = View::factory('template/blank');
        $this->template->content = View::factory('admin/guild_details')
                                   ->bind("games", $games)
                                   ->bind("servers", $server)
                                   ->bind('guild_list', $guild_list);
    }

    public function action_edit() {
        $this->template->title = "Edit";
        $this->template->content = View::factory('admin/edit');
    }

    public function action_gamedelete() {
        $user = Auth::instance()->get_user();
        $game_id = Arr::get($_POST, 'gameid');
        $game = ORM::factory('Game')->where('id', '=', $game_id)->find();
        Model::factory('Game')->delete_games($game_id);
        $server = ORM::factory('Server')->where('game_id', '=', $game_id)->find();
        Model::factory('Server')->delete_gameserver($game_id);
        $faction = ORM::factory('Faction')->where('game_id', '=', $game_id)->find();
        Model::factory('Faction')->delete_gamefaction($game_id);
        $class = ORM::factory('Class')->where('game_id', '=', $game_id)->find();
        Model::factory('Class')->delete_gameclass($game_id);
        $profession = ORM::factory('Professions')->where('game_id', '=', $game_id)->find();
        Model::factory('Professions')->delete_gameprofession($game_id);
        echo 'Successfully Removed';
        $this->auto_render = FALSE;
    }
    
    public function action_game_edit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['game_id']) || $_POST['game_id'] == null)
                $_POST['game_id'] = 'NULL';
            if (!isset($_POST['game_name']) || $_POST['game_name'] == null)
                $_POST['game_name'] = 'NULL';
            $game_id = $_POST['game_id'];
            $gamename = $_POST['game_name'];
            
        $data = Model::factory("Game")->edit_games($_POST);
        echo 'Successfully Updated';
                    }
        $this->auto_render = FALSE;
         //$this->redirect('admin/add');
    }
    
    public function action_server_edit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['edit_serverid']) || $_POST['edit_serverid'] == null)
                $_POST['edit_serverid'] = 'NULL';
            if (!isset($_POST['edit_servername']) || $_POST['edit_servername'] == null)
                $_POST['edit_servername'] = 'NULL';
            if (!isset($_POST['game']) || $_POST['game'] == null)
                $_POST['game'] = 'NULL';
          
        $data = Model::factory("Server")->edit_servers($_POST);
         echo 'Successfully Updated';
        }
        $this->auto_render = FALSE;
         //$this->redirect('admin/add');
    }
    
     public function action_faction_edit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['edit_factionid']) || $_POST['edit_factionid'] == null)
                $_POST['edit_factionid'] = 'NULL';
            if (!isset($_POST['edit_factionname']) || $_POST['edit_factionname'] == null)
                $_POST['edit_factionname'] = 'NULL';
            if (!isset($_POST['server']) || $_POST['server'] == null)
                $_POST['server'] = 'NULL';
          
        $data = Model::factory("Faction")->edit_factions($_POST);
         echo 'Successfully Updated';
        }
        $this->auto_render = FALSE;
        // $this->redirect('admin/add');
    }
    
    public function action_class_edit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['class_id']) || $_POST['class_id'] == null)
                $_POST['class_id'] = 'NULL';
            if (!isset($_POST['edit_classname']) || $_POST['edit_classname'] == null)
                $_POST['edit_classname'] = 'NULL';
           
          
        $data = Model::factory("Class")->edit_class($_POST);
         echo 'Successfully Updated';
        }
        $this->auto_render = FALSE;
        // $this->redirect('admin/add');
    }
    
    public function action_profession_edit() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['edit_professionid']) || $_POST['edit_professionid'] == null)
                $_POST['edit_professionid'] = 'NULL';
            if (!isset($_POST['edit_professionname']) || $_POST['edit_professionname'] == null)
                $_POST['edit_professionname'] = 'NULL';
            if (!isset($_POST['game']) || $_POST['game'] == null)
                $_POST['game'] = 'NULL';
          
        $data = Model::factory("Professions")->edit_profession($_POST);
         echo 'Successfully Updated';
        }
        $this->auto_render = FALSE;
        // $this->redirect('admin/add');
    }

    public function action_serverdelete() {
        $user = Auth::instance()->get_user();
        $server_id = Arr::get($_POST, 'serverid');
       // $server = ORM::factory('Server')->where('id', '=', $server_id)->find();
        Model::factory('Server')->delete_server($server_id);
       
        echo 'Successfully Removed';
        $this->auto_render = FALSE;
    }

    public function action_deletefaction() {
        $user = Auth::instance()->get_user();
        $faction_id = Arr::get($_POST, 'factionid');
        $faction = ORM::factory('Faction')->where('faction_id', '=', $faction_id)->find();
        Model::factory('Faction')->delete_faction($faction_id);
        Model::factory('Class')->delete_serverfactionclass($faction_id);
         echo 'Successfully Removed';
        $this->auto_render = FALSE;
    }
    
    public function action_deleteclass() {
        $user = Auth::instance()->get_user();
        $class_id = Arr::get($_POST, 'classid');
        $class = ORM::factory('Class')->where('class_id', '=', $class_id)->find();
        Model::factory('Class')->delete_class($class_id);
         echo 'Success';
        $this->auto_render = FALSE;
    }

    public function action_deleteprofession() {
        $user = Auth::instance()->get_user();
        $profession_id = Arr::get($_POST, 'professionid');
        $server = ORM::factory('Professions')->where('profession_id', '=', $profession_id)->find();
        Model::factory('Professions')->delete_profession($profession_id);
         echo 'Successfully Removed';
        $this->auto_render = FALSE;
    }

   public function action_save_gameDetails() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['game_name']) || $_POST['game_name'] == null)
                $_POST['game_name'] = 'NULL';
            if (!isset($_POST['text_name']) || $_POST['text_name'] == null)
                $_POST['text_name'] = 'NULL';
            if (!isset($_POST['server']) || $_POST['server'] == null)
                $_POST['server'] = 'NULL';
            if (!isset($_POST['faction']) || $_POST['faction'] == null)
                $_POST['faction'] = 'NULL';
            if (!isset($_POST['classid']) || $_POST['classid'] == null)
                $_POST['classid'] = 'NULL';
            if (isset($_POST['dynfields'])) {
                $dynfields = $_POST['dynfields'];
                $count_server = count($dynfields);
            }
            if (isset($_POST['factionfields']))
            {
                $factionfields = $_POST['factionfields'];
            $count_faction = count($factionfields);
            }

            if (isset($_POST['classfields'])) {
                $classfields = $_POST['classfields'];
                $count_class = count($classfields);
            }
            if (isset($_POST['professionfields'])) {
                $professionfields = $_POST['professionfields'];
                $count_profession = count($professionfields);
            }

            $faction_data = $_POST['faction'];
            // Check if game already instered or not
            if ($_POST['game_name'] == 'NULL') {

                $game_id = Model::factory("Game")->save_game($user->id, $_POST);
                for ($i = 0; $i < $count_server; $i++) {
                    if (trim($dynfields[$i]) != '') {
                        $already_exit_server = Model::factory("Server")->alreadyexit_server($_POST, $i, $game_id);
                            if(!$already_exit_server)
                            {
                        $server_data = Model::factory("Server")->save_server($_POST, $i, $game_id);
                            }
                    }
                }
                for ($i = 0; $i < $count_faction; $i++) {
                    if (trim($factionfields[$i]) != '') {
                        $already_exit_faction = Model::factory("Faction")->alreadyexit_gamefaction($_POST, $i, $game_id);
                    
                        if(!$already_exit_faction)
                            {
                        $faction_data = Model::factory("Faction")->save_faction($_POST, $i, $game_id);
                            }
                        }
                }
                for ($i = 0; $i < $count_class; $i++) {
                    if (trim($classfields[$i]) != '') {
                         $already_exit_class = Model::factory("Class")->alreadyexit_factionclass($_POST, $i, $faction_data);
                         if(!$already_exit_class)
                            {
                        $class_data = Model::factory("Class")->save_class($_POST, $i, $game_id, $faction_data);
                        //echo $dynfields[$i];
                            }
                        }
                }
                for ($i = 0; $i < $count_profession; $i++) {
                    if (trim($professionfields[$i]) != '') {
                          $already_exit_profession = Model::factory("Professions")->alreadyexit_profession($_POST, $i, $game_id);
                         if(!$already_exit_profession)
                            {
                        $profession_data = Model::factory("Professions")->save_professions($_POST, $i, $game_id);
                        //echo $dynfields[$i];
                            }
                    }
                }
                
            } else {
                $game_id = $_POST['game_name'];
                $server_data = $_POST['server'];
                $faction_data = $_POST['faction'];

                if ($_POST['server'] == 'NULL') {
                    for ($i = 0; $i < $count_server; $i++) {
                        if (trim($dynfields[$i]) != '') {
                            $already_exit_server = Model::factory("Server")->alreadyexit_server($_POST, $i, $game_id);
                            if(!$already_exit_server)
                            {
                            $server_data = Model::factory("Server")->save_server($_POST, $i, $game_id);
                          
                            }
                        }
                    }
                } else {
                    for ($i = 1; $i < $count_server; $i++) {
                        if (trim($dynfields[$i]) != '') {
                             $already_exit_server = Model::factory("Server")->alreadyexit_server($_POST, $i, $game_id);
                            if(!$already_exit_server)
                            {
                            $server_data = Model::factory("Server")->save_server($_POST, $i, $game_id);
                            }
                        
                        }
                    }
                }
                if($_POST['faction'] == 'NULL')
                {
                for ($i = 0; $i < $count_faction; $i++) {
                    if (trim($factionfields[$i]) != '') {
                        $already_exit_faction = Model::factory("Faction")->alreadyexit_gamefaction($_POST, $i, $game_id);
                    
                        if(!$already_exit_faction)
                            {
                        $faction_data = Model::factory("Faction")->save_faction($_POST, $i, $game_id);
                            }
                        }
                }
                }
                else
                {
                  for ($i = 1; $i < $count_faction; $i++) {
                    if (trim($factionfields[$i]) != '') {
                        $already_exit_faction = Model::factory("Faction")->alreadyexit_gamefaction($_POST, $i, $game_id);
                        if(!$already_exit_faction)
                            {
                        $faction_data = Model::factory("Faction")->save_faction($_POST, $i, $game_id);
                            }
                    }
                }  
                }
                if($_POST['classid'] == 'NULL')
                    {
                for ($i = 0; $i < $count_class; $i++) {
                    if (trim($classfields[$i]) != '') {
                        $already_exit_class = Model::factory("Class")->alreadyexit_factionclass($_POST, $i, $faction_data);
                         if(!$already_exit_class)
                            {
                        $class_data = Model::factory("Class")->save_class($_POST, $i, $game_id, $faction_data);
                        //echo $dynfields[$i];
                            }
                        }
                }
                    }
                    else
                    {
                      for ($i = 1; $i < $count_class; $i++) {
                    if (trim($classfields[$i]) != '') {
                        $already_exit_class = Model::factory("Class")->alreadyexit_factionclass($_POST, $i, $faction_data);
                         if(!$already_exit_class)
                            {
                        $class_data = Model::factory("Class")->save_class($_POST, $i, $game_id, $faction_data);
                        //echo $dynfields[$i];
                            }
                        }
                }  
                    }
                for ($i = 0; $i < $count_profession; $i++) {
                    if (trim($professionfields[$i]) != '') {
                        $already_exit_profession = Model::factory("Professions")->alreadyexit_profession($_POST, $i, $game_id);
                         if(!$already_exit_profession)
                            {
                        $profession_data = Model::factory("Professions")->save_professions($_POST, $i, $game_id);
                        //echo $dynfields[$i];
                            }
                    }
                }
            }

            //end echo $game_id;
            echo 'Successfully Added';
           
        }
        
        

        $this->auto_render = FALSE;
    
    }

    public function action_get_game_details() {
        $this->template = View::factory('template/blank');
        $game_id = Arr::get($_POST, 'game_id');
        $servers = Model::factory('Server')->get_servers($game_id);
        $factions = Model::factory('Faction')->get_all_factions($game_id);
 	$classes = Model::factory('Class')->get_all_class($game_id);
        $professions = Model::factory('Professions')->get_all_professions($game_id);
        $this->template->content = View::factory('admin/gamedetails')
                ->bind('servers', $servers)
                ->bind('factions', $factions)
  		->bind('classes', $classes)
                ->bind('game_id', $game_id)
                ->bind('professions', $professions);
    }

    public function action_get_class_details() {
        $this->template = View::factory('template/blank');
        $faction_id = Arr::get($_POST, 'faction_id');
        $classes = Model::factory('Class')->get_faction_class($faction_id);
        $this->template->content = View::factory('admin/class')
                ->bind('classes', $classes);
    }

    public function action_select_gameservers() {
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
            //echo $server_list;
        }
    }
    
     public function action_all_server_details() {
        $this->auto_render = FALSE;
            $servers = ORM::factory("Server")->where('is_active', '=', '1')->order_by('server_name','ASC')->find_all();
            $server_list = array();
            foreach ($servers as $server):
                $server_list[$server->server_name] = $server->id;
            endforeach;
            echo json_encode($server_list);
    }
    
    public function action_select_gamefactions()
    {
       $this->auto_render = FALSE;
        if (HTTP_Request::POST == $this->request->method()) {
            $game_id = Arr::get($_POST, 'game_id');
           
           $factions = Model::factory('Faction')->get_gamefactions($game_id);
            $faction_list = array();
            foreach ($factions as $faction):
                $faction_list[$faction->faction_name] = $faction->faction_id;
            endforeach;
            echo json_encode($faction_list);
            //echo $server_list;
        } 
    }

    public function action_select_serverfactions() {
        $this->auto_render = FALSE;
        if (HTTP_Request::POST == $this->request->method()) {
            $server_id = Arr::get($_POST, 'server_id');
            // get factions list
            $factions = Model::factory('Faction')->get_serverfactions($server_id);
            $faction_list = array();
            foreach ($factions as $faction):
                $faction_list[$faction->faction_name] = $faction->faction_id;
            endforeach;
            echo json_encode($faction_list);
        }
    }
    
    public function action_select_serverclass() {
        $this->auto_render = FALSE;
        if (HTTP_Request::POST == $this->request->method()) {
            $server_id = Arr::get($_POST, 'server_id');
            // get factions list
             $classes = Model::factory('Class')->get_serverclass($server_id);
            $class_list = array();
            foreach ($classes as $class):
                $class_list[$class->class_name] = $class->class_id;
            endforeach;
            echo json_encode($class_list);
        }
    }
    
    

    public function action_select_factionclass() {
        $this->auto_render = FALSE;
        if (HTTP_Request::POST == $this->request->method()) {
            $faction_id = Arr::get($_POST, 'faction_id');
           //  $server_id = Arr::get($_POST, 'server_id');
             //echo $faction_id;
            // get class list
            $classes = Model::factory('Class')->get_faction_class($faction_id);
            $class_list = array();
            foreach ($classes as $class):
                $class_list[$class->class_name] = $class->class_id;
            endforeach;
            echo json_encode($class_list);
        }
    }
    
     public function action_select_gameprofession() {
        $this->auto_render = FALSE;
        if (HTTP_Request::POST == $this->request->method()) {
            $game_id = Arr::get($_POST, 'game_id');
            // get servers list
            $professions = Model::factory('Professions')->get_all_professions($game_id);
            $profession_list = array();
            foreach ($professions as $profession):
                $profession_list[$profession->profession_name] = $profession->profession_id;
            endforeach;
            echo json_encode($profession_list);
        }
    }

    public function action_get_gamenameid() {
        $this->auto_render = FALSE;
        if (HTTP_Request::POST == $this->request->method()) {
            $game_name = Arr::get($_POST, 'game_name');
            // get servers list
            $get_game_id = Model::factory('Game')->get_GameId($game_name);
            echo $get_game_id;
        }
    }
    
    public function action_game_validate() {
        if (HTTP_Request::POST == $this->request->method()) {
            $gamename =  Arr::get($_POST, 'gamename');
            $game_id =  Arr::get($_POST, 'game_id');
            $data = ORM::factory('Game')->where('game_name', '=', $gamename)->and_where('is_active', '=', '1')->find();
//            if ($total > 0) {
//                echo '<span class="taken">Game Name Already Exists</span>';
//            }
            if($data->id != NULL && $game_id != $data->id):
                echo 'Game Name Already Exists';
            endif;
            
            $this->auto_render = FALSE;
        }
    }
    
      public function action_server_validate() {
        if (HTTP_Request::POST == $this->request->method()) {
       //     $servername =  Arr::get($_POST, 'servername');
             if (isset($_POST['servername'])) {
             $servername = $_POST['servername'];
             $count_servername = count($servername);
            }
            for ($i = 0; $i < $count_servername; $i++) {
            $server_name = $_POST['servername'][$i];
            $game_id =  Arr::get($_POST, 'game_server_id');
            $data = ORM::factory('Server')->where('server_name', '=', $server_name)->and_where('game_id', '=', $game_id)->and_where('is_active', '=', '1');;
            $get_name = $data->find();
        
            $total = $data->count_all();
            if ($total > 0) {
                  echo $get_name->server_name;
               // echo '<span class="taken">Server Name Already Exists</span>';
            }
            }
            
            $this->auto_render = FALSE;
        }
    }
     public function action_edit_server_validate() {
        if (HTTP_Request::POST == $this->request->method()) {
            $servername =  Arr::get($_POST, 'servername');
            $game_id =  Arr::get($_POST, 'game_server_id');
            $server_id =  Arr::get($_POST, 'server_id');
            $data = ORM::factory('Server')->where('server_name', '=', $servername)->and_where('game_id', '=', $game_id)->and_where('is_active', '=', '1')->find();
//            $total = $data->count_all();
//            if ($total > 0) {
//                echo '<span class="taken">Server Name Already Exists</span>';
//            }
             if($data->id != NULL && $server_id != $data->id):
                echo 'Server Name Already Exists';
            endif;
            $this->auto_render = FALSE;
        }
    }
     public function action_edit_faction_validate() {
        if (HTTP_Request::POST == $this->request->method()) {
            $factionname =  Arr::get($_POST, 'factionname');
            $game_id =  Arr::get($_POST, 'game_id');
             $faction_id =  Arr::get($_POST, 'faction_id');
            $data = ORM::factory('Faction')->where('faction_name', '=', $factionname)->and_where('game_id', '=', $game_id)->and_where('is_active', '=', '1')->find();
//            $total = $data->count_all();
//            if ($total > 0) {
//                echo '<span class="taken">Faction Name Already Exists</span>';
//            }
            if($data->faction_id != NULL && $faction_id != $data->faction_id):
                echo 'Faction Name Already Exists';
            endif;
            
            $this->auto_render = FALSE;
        }
    }
    
    public function action_game_faction_validate() {
        if (HTTP_Request::POST == $this->request->method()) {
           // $factionname =  Arr::get($_POST, 'factionname');
             if (isset($_POST['factionname'])) {
             $factionname = $_POST['factionname'];
             $count_factionname = count($factionname);
            }
            for ($i = 0; $i < $count_factionname; $i++) {
            $faction_name = $_POST['factionname'][$i];
            $game_id =  Arr::get($_POST, 'game_id');
            $data = ORM::factory('Faction')->where('faction_name', '=', $faction_name)->and_where('game_id', '=', $game_id)->and_where('is_active', '=', '1');;
           
            $get_name = $data->find();
             $total = $data->count_all();
            if ($total > 0) {
            echo $get_name->faction_name;
                //echo '<span class="taken">Faction Name Already Exists</span>';
            }
            }
            
            $this->auto_render = FALSE;
        }
    }
   
    public function action_faction_validate() {
        if (HTTP_Request::POST == $this->request->method()) {
            $factionname =  Arr::get($_POST, 'factionname');
            $server_id =  Arr::get($_POST, 'server_faction_id');
            $data = ORM::factory('Faction')->where('faction_name', '=', $factionname)->and_where('server_id', '=', $server_id)->and_where('is_active', '=', '1');;
            $total = $data->count_all();
            if ($total > 0) {
                echo '<span class="taken">Faction Name Already Exists</span>';
            }
            
            $this->auto_render = FALSE;
        }
    }
    
     public function action_profession_validate() {
        if (HTTP_Request::POST == $this->request->method()) {
           // $professionname =  Arr::get($_POST, 'professionname');
            if (isset($_POST['professionname'])) {
             $professionname = $_POST['professionname'];
             $count_professionname = count($professionname);
            }
            for ($i = 0; $i < $count_professionname; $i++) {
            $profession_name = $_POST['professionname'][$i];
            $game_id =  Arr::get($_POST, 'game_profession_id');
            $data = ORM::factory('Professions')->where('profession_name', '=', $profession_name)->and_where('game_id', '=', $game_id)->and_where('is_active', '=', '1');;
            $get_name = $data->find();
            $total = $data->count_all();
            if ($total > 0) {
                echo $get_name->profession_name;
               // echo '<span class="taken">Profession Name Already Exists</span>';
            }
            }
            
            $this->auto_render = FALSE;
        }
    }
    public function action_profession_edit_validate() {
        if (HTTP_Request::POST == $this->request->method()) {
            $professionname =  Arr::get($_POST, 'professionname');
            $game_id =  Arr::get($_POST, 'game_profession_id');
            $profession_id =  Arr::get($_POST, 'profession_id');
            $data = ORM::factory('Professions')->where('profession_name', '=', $professionname)->and_where('game_id', '=', $game_id)->and_where('is_active', '=', '1')->find();;
//            $total = $data->count_all();
//            if ($total > 0) {
//                echo '<span class="taken">Profession Name Already Exists</span>';
//            }
            if($data->profession_id != NULL && $profession_id != $data->profession_id):
                echo 'Profession Name Already Exists';
            endif;
            
            $this->auto_render = FALSE;
        }
    }
    
    public function action_class_validate() {
        if (HTTP_Request::POST == $this->request->method()) {
           // $classname =  Arr::get($_POST, 'classname');
            if (isset($_POST['classname'])) {
             $classname = $_POST['classname'];
             $count_class = count($classname);
            }
            for ($i = 0; $i < $count_class; $i++) {
            $class_name = $_POST['classname'][$i];
            $faction_id =  Arr::get($_POST, 'faction_class_id');
            $data = ORM::factory('Class')->where('class_name', '=', $class_name)->and_where('faction_id', '=', $faction_id)->and_where('is_active', '=', '1');;
            $get_name = $data->find();
            $total = $data->count_all();
            if ($total > 0) {
              echo $get_name->class_name;  
                //echo '<span class="taken">Class Name Already Exists</span>';
            }
            }
            
            $this->auto_render = FALSE;
        }
    }
    
     public function action_edit_class_validate() {
        if (HTTP_Request::POST == $this->request->method()) {
            $classname =  Arr::get($_POST, 'classname');
            $faction_id =  Arr::get($_POST, 'faction_class_id');
            $class_id =  Arr::get($_POST, 'class_id');
            $data = ORM::factory('Class')->where('class_name', '=', $classname)->and_where('faction_id', '=', $faction_id)->and_where('is_active', '=', '1')->find();;
//            $total = $data->count_all();
//            if ($total > 0) {
//                echo '<span class="taken">Class Name Already Exists</span>';
//            }
             if($data->class_id != NULL && $class_id != $data->class_id):
                echo 'Class Name Already Exists';
            endif;
            
            $this->auto_render = FALSE;
        }
    }
    
    
     /* manage feeds starts here */
    
         public function action_manage_feeds() {
        $this->template->title = "Manage Feeds";
                                  
        $feeds = ORM::factory('feeds')
                 ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                 ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                 ->select('zid_users.*','zid_character_details.*', 'zid_feed_media.*')
                 ->join('zid_users', 'INNER')
                 ->on('zid_users.id','=','feeds.id')   
                 ->join('zid_character_details', 'LEFT OUTER')
                 ->on('feeds.character_detail_id', '=', 'zid_character_details.character_detail_id')
                 ->join('zid_feed_media', 'LEFT OUTER')
                 ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                 ->where('is_visible', '=', '1')  
                 ->group_by('feeds.feed_id')
                 ->order_by('feeds.feed_id', 'DESC')
                ->limit(10)
                 ->find_all();

        
        $feed_type = $this->request->action(); 
        
        
                
        $this->template->content = View::factory('admin/feeds/manage_feed')
                ->bind('feeds', $feeds)
                ->bind('count', $count)
                ->bind('feed_type', $feed_type);   
        
         $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
   }
    public function action_manage_feeds_details() {
        $this->template->title = "Manage Feeds";
                                  
        $feeds = ORM::factory('feeds')
                 ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                 ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                 ->select('zid_users.*','zid_character_details.*', 'zid_feed_media.*')
                 ->join('zid_users', 'INNER')
                 ->on('zid_users.id','=','feeds.id')   
                 ->join('zid_character_details', 'LEFT OUTER')
                 ->on('feeds.character_detail_id', '=', 'zid_character_details.character_detail_id')
                 ->join('zid_feed_media', 'LEFT OUTER')
                 ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')
                 ->where('is_visible', '=', '1')                      
                 ->order_by('feeds.feed_id', 'DESC')
                ->limit(10)
                 ->find_all();

        
        $feed_type = $this->request->action(); 
        
        $this->template = View::factory('template/blank');
                
        $this->template->content = View::factory('admin/feeds/manage_feed')
                ->bind('feeds', $feeds)
                ->bind('count', $count)
                ->bind('feed_type', $feed_type);    
        
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
   }
 
   
   
    public function action_edit_zergfeeds() {
        $auth_user = Auth::instance()->get_user();
        $this->template = View::factory('template/blank');
        $feed_id = Arr::get($_POST, 'feedid');
      #  $feed_id = $this->request->param('id');
      
        $config_path = Kohana::$config->load('myconf');
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
        $comments = $comment
          // ->limit(3)
           ->find_all();
        
        view::bind_global('config_path', $config_path);
        $this->template->content = View::factory('admin/feeds/edit_zergfeeds')
                ->bind('feed', $feed)
                ->bind('comments', $comments)
                ->bind('comment_count', $comment_count)
                ->bind('user', $auth_user)
                ->bind('zergid', $zerg_id)
                ->bind('characters', $characters)
                ->bind('banner', $banner);
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');       
    }
    
    public function action_edit_feed() {
        $user = Auth::instance()->get_user();
        $feed_id = Arr::get($_POST, 'feed_id');
        $feed_text = Arr::get($_POST, 'feed_text');
        DB::update(ORM::factory('feeds')->table_name())
                    ->set(array('feed_text' => $feed_text))
                    ->where('feed_id', '=', $feed_id)
                    ->execute();
        $this->auto_render = FALSE;
       # $this->redirect('admin/view/'.$feed_id);
    }
    
    public function action_edit_comments() {
        $user = Auth::instance()->get_user();
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['comment_id']) || $_POST['comment_id'] == null)
                $_POST['comment_id'] = 'NULL';
            if (!isset($_POST['comment']) || $_POST['comment'] == null)
                $_POST['comment'] = 'NULL';
            $comment_id = $_POST['comment_id'];
            $comment = $_POST['comment'];
            
        $data = Model::factory("feeds")->edit_comment($_POST);
                    }
        $this->auto_render = FALSE;
         //$this->redirect(''admin/view/'.$feed_id');
    }
    
    public function action_feeddelete() {
        $feed_id = Arr::get($_POST, 'feedid');
        $feed = ORM::factory('feeds')->where('feed_id', '=', $feed_id)->find();
        $feed->is_visible = '0';
        $feed->save();
        $this->auto_render = FALSE;
    }
    
    public function action_feedmediadelete() {
        $media_id = Arr::get($_POST, 'mediaid');
        $feed = Model::factory('FeedMedia')->delete_feed_media('feed_media_id', '=', $media_id)->find();
        
//        $feed->file_path = 'NULL';
//        $feed->youtube_url = 'NULL';
   //     $feed->save();
        $this->auto_render = FALSE;
    }
    
    public function action_view_characterdetail() {
       
         $char_id = Arr::get($_POST, 'characterid');
       
          // Get character
        $character_detail = Model::factory('CharacterDetail')->get_character($char_id);
        
            // Get guild info
            $guild = Model::factory("guild")->get_guild($character_detail->guild_id);
            // Get games
            $games = ORM::factory("Game")->where('is_active', '=', '1')->find_all();
            // Get servers
            $server = Model::factory('Server')->get_servers($character_detail->game_id); 
            // Get factions
            $factions = Model::factory('Faction')->get_factions($character_detail->game_id);
            // Get class
            $class = Model::factory('Class')->get_class($character_detail->game_id);
            // Get professions
            $professions = Model::factory('Professions')->get_professions($character_detail->game_id);
            $character = ORM::factory("Character")->where('is_active', '=', '1')->find_all();
            $media_id = explode(',', $character_detail->media_info_id);
            $this->template = View::factory('template/blank');

            $this->template->content = View::factory('admin/character_details')
                    ->bind("games", $games)
                    ->bind("servers", $server)
                    ->bind("class", $class)
                    ->bind("character", $character)
                    ->bind("factions", $factions)
                    ->bind("media", $media)
                    ->bind("professions", $professions)
                    ->bind("character_detail", $character_detail)
                    ->bind("guild", $guild)
                    ->bind('character_list', $character_list);
       
    }
    
    public function action_change_defaultimage() {
        $user = Auth::instance()->get_user();
        $character_id = Arr::get($_POST, 'characterid');
        Model::factory('CharacterDetail')->change_chardefaultimg($character_id);
        $this->auto_render = FALSE;
    }
    
    public function action_characterdelete() {
        $user = Auth::instance()->get_user();
        $character_id = Arr::get($_POST, 'characterid');
        Model::factory('CharacterDetail')->delete_character($character_id);
        echo "success";
        $this->auto_render = FALSE;
    }
   
    
    public function action_edit_characterdetails() {
        $user = Auth::instance()->get_user();
        $character_id = Arr::get($_POST, 'character_id');
         $userid = Arr::get($_POST, 'userid');
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['character_level']) || $_POST['character_level'] == null)
                $_POST['character_level'] = '';
            if (!isset($_POST['characterserver_id']) || $_POST['characterserver_id'] == null)
                $_POST['characterserver_id'] = 'NULL';
            if (!isset($_POST['characterfaction_id']) || $_POST['characterfaction_id'] == null)
                $_POST['characterfaction_id'] = 'NULL';
            if (!isset($_POST['characterclass_id']) || $_POST['characterclass_id'] == null)
                $_POST['characterclass_id'] = 'NULL';
            if (!isset($_POST['characterrole_id']) || $_POST['characterrole_id'] == null)
                $_POST['characterrole_id'] = 'NULL';
            if (!isset($_POST['characterprofession_id1']) || $_POST['characterprofession_id1'] == '0' || $_POST['characterprofession_id1'] == '')
                $_POST['characterprofession_id1'] = 'NULL';
            if (!isset($_POST['characterprofession_id2']) || $_POST['characterprofession_id2'] == '0' || $_POST['characterprofession_id2'] == '')
                $_POST['characterprofession_id2'] = 'NULL';
            if (!isset($_POST['characterprofession_id3']) || $_POST['characterprofession_id3'] == '0' || $_POST['characterprofession_id3'] == '')
                $_POST['characterprofession_id3'] = 'NULL';
             if (!isset($_POST['character_pvp']) || $_POST['character_pvp'] == null)
                $_POST['character_pvp'] = 'NULL';
             if (!isset($_POST['character_rp']) || $_POST['character_rp'] == null)
                $_POST['character_rp'] = 'NULL';
              if (!isset($_POST['character_pve']) || $_POST['character_pve'] == null)
                $_POST['character_pve'] = 'NULL';
               if (!isset($_POST['character_bio']) || $_POST['character_bio'] == null)
                $_POST['character_bio'] = '';
               if (!isset($_POST['characterenable_mini_bio']) || $_POST['characterenable_mini_bio'] == null)
                $_POST['characterenable_mini_bio'] = 'NULL';
               if (!isset($_POST['character_icon']) || $_POST['character_bio'] == null)
                $_POST['character_icon'] = NULL;
          
        $data = Model::factory('CharacterDetail')->edit_characterdetails($_POST,$character_id,$userid);
        
        }
 
       
        $this->auto_render = FALSE;
    }
    
    /* Guild Members */

    public function action_guild_members() {
       $guild_id = Arr::get($_POST, 'guildid'); // guild id
       $user_id = Arr::get($_POST, 'userid'); // user id
        // Get member role
        $role = Model::factory('GuildMembers')->get_member_role($user_id, $guild_id);
        // Get guild members
        $guild_members = Model::factory('GuildMembers')->get_guild_all_members($guild_id);
        // Right content
        $this->template = View::factory('template/blank');
        $this->template->content = View::factory('admin/guild_members')
                ->bind('guild_members', $guild_members)
                ->bind("user", $user)
                ->bind('role', $role);
    }
    
    public function action_guild_event_details(){
        $guild_id = Arr::get($_POST, 'guildid'); // guild id
       $user_id = Arr::get($_POST, 'userid'); // user id
        // Select Event
        $event = Model::factory('Events')->get_guild_events($guild_id);
        // Get event member
     //   $event_member = Model::factory('EventMembers')->get_event_member_by_event_id($guild_id, $user_id);
        $this->template = View::factory('template/blank');
        // Right content
        $this->template->content = View::factory('admin/guild_eventdetails')
                ->bind('event', $event);
               
               
       
    }
    
    public function action_removeguild() {
        $user = Auth::instance()->get_user();
        $guild_id = Arr::get($_POST, 'guild_id');
        Model::factory('guild')->delete_guild($guild_id);
        echo "success";
        $this->auto_render = FALSE;
    }
    
    public function action_view_guilddetail() {
       
         $guild_id = Arr::get($_POST, 'guildid');
            // Get guild info
            $guild = Model::factory("guild")->get_guild($guild_id);
            // Get games
            $games = ORM::factory("Game")->where('is_active', '=', '1')->find_all();
            // Get servers
            $server = Model::factory('Server')->get_servers($guild->game_id);
            // Get factions
            $factions = Model::factory('Faction')->get_factions($guild->game_id);
         
            $this->template = View::factory('template/blank');

            $this->template->content = View::factory('admin/edit_guild_details')
                    ->bind("games", $games)
                    ->bind("servers", $server)
                    ->bind("guild", $guild)
                    ->bind("factions", $factions);
       
    }
    
    public function action_change_defaultguildimage() {
        $user = Auth::instance()->get_user();
        $guild_id = Arr::get($_POST, 'guildid');
        Model::factory('guild')->change_guilddefaultimg($guild_id);
        $this->auto_render = FALSE;
    }
    
    public function action_edit_guilddetails() {
        $user = Auth::instance()->get_user();
        $guild_id = Arr::get($_POST, 'guild_id');
         $userid = Arr::get($_POST, 'userid');
        if ($user && HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['accept_applicant']) || $_POST['accept_applicant'] == null)
                $_POST['accept_applicant'] = 'NULL';
            if (!isset($_POST['guild_pvp']) || $_POST['guild_pvp'] == null)
                $_POST['guild_pvp'] = 'NULL';
            if (!isset($_POST['guild_rp']) || $_POST['guild_rp'] == null)
                $_POST['guild_rp'] = 'NULL';
            if (!isset($_POST['guild_pve']) || $_POST['guild_pve'] == null)
                $_POST['guild_pve'] = 'NULL';
            if (!isset($_POST['guild_bio']) || $_POST['guild_bio'] == null)
                $_POST['guild_bio'] = '';
            if (!isset($_POST['guildserver_id']) || $_POST['guildserver_id'] == null)
                $_POST['guildserver_id'] = 'NULL';
             if (!isset($_POST['guildfaction_id']) || $_POST['guildfaction_id'] == null)
                $_POST['guildfaction_id'] = 'NULL';
              if (!isset($_POST['service']) || $_POST['service'] == null)
                $_POST['service'] = '';
               if (!isset($_POST['url_server']) || $_POST['url_server'] == null)
                $_POST['url_server'] = '';
               if (!isset($_POST['port']) || $_POST['port'] == null)
                $_POST['port'] = '';
               if (!isset($_POST['password']) || $_POST['password'] == null)
                $_POST['password'] = '';
               if (!isset($_POST['second_service']) || $_POST['second_service'] == null)
                $_POST['second_service'] = '';
               if (!isset($_POST['second_url']) || $_POST['second_url'] == null)
                $_POST['second_url'] = '';
               if (!isset($_POST['second_port']) || $_POST['second_port'] == null)
                $_POST['second_port'] = '';
               if (!isset($_POST['second_password']) || $_POST['second_password'] == null)
                $_POST['second_password'] = '';
                if (!isset($_POST['guild_name']))
                $_POST['guild_name'] = '';
               if (!isset($_POST['guild_game']))
                $_POST['guild_game'] ='';
          
        $data = Model::factory('guild')->update_guilddetails($userid,$guild_id,$_POST);
        echo 'Success';
        }
 
       
        $this->auto_render = FALSE;
    }
    
    public function action_feed_defaultimage() {
        $user = Auth::instance()->get_user();
        $feed_id = Arr::get($_POST, 'feed_media_id');
        Model::factory('FeedMedia')->change_mediadefaultimg($feed_id);
        $this->auto_render = FALSE;
    }
    
    public function action_guild_feeds() {
        $this->template->title = "Guild Feeds";
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
        $feeds = Model::factory('GuildFeeds')->get_all_guild_feeds($guild_id);
        // Right content
        $this->template = View::factory('template/blank');
        $this->template->content = View::factory('admin/feeds/guild_feeds')
                ->bind("guild", $guild)
                ->bind('guild_character', $guild_character)
                ->bind('guild_role', $guild_member_role)
                ->bind('feeds', $feeds)
                ->bind('user', $user)
                ->bind('banner', $banner);

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
    
    public function action_zergfeed_more(){
        $this->template = View::factory('template/blank');
        $lastfeed = Arr::get($_POST, 'lastmsg');
        $feed_type = Arr::get($_POST, 'feed');
        $user_id = $this->request->param('id');
        $config_path = Kohana::$config->load('myconf');
        
        
        $feeds = ORM::factory('feeds')
                 ->add_subquery('(SELECT COUNT(comment_id) FROM zid_comments AS comment WHERE comment.feed_id=feeds.feed_id) AS comments_count')
                 ->add_subquery('(SELECT COUNT(*) FROM zid_feeds WHERE parent_feed_id= feeds.feed_id ) AS rezergs_count')
                 ->select('zid_users.*', 'zid_character_details.*', 'zid_feed_media.*')
                 ->join('zid_users', 'INNER')
                 ->on('zid_users.id','=','feeds.id')
                 ->join('zid_character_details', 'LEFT OUTER')
                 ->on('feeds.character_detail_id', '=', 'zid_character_details.character_detail_id')
                 ->join('zid_feed_media', 'LEFT OUTER')
                 ->on('feeds.feed_media_id', '=', 'zid_feed_media.feed_media_id')          
                 ->where('feeds.feed_id', '<', $lastfeed)
                 ->and_where('is_visible', '=', '1')
                 ->group_by('feeds.feed_id')
                 ->order_by('feeds.feed_id', 'DESC')
                 ->limit(10)
                 ->find_all();
  
        
         $this->template->content = View::factory('admin/feeds/zergfeed_more')
                                   ->bind("config_path", $config_path)
                                   ->bind("feeds", $feeds)
                                   ->bind('zergid', $zerg_id)
                                   ->bind('lastfeed', $lastfeed)
                                   ->bind('characters', $characters)
                                   ->bind('feed_type', $feed_type)
                                   ->bind('user', $user)                                 
                                   ->bind('user_id', $user_id);
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
        
        
        
       }
    
     public function action_guildfeed_more() {
        
        $user = Auth::instance()->get_user();
        $this->template = View::factory('template/blank');
        $lastfeed = Arr::get($_POST, 'lastmsg');
        $feed_type = Arr::get($_POST, 'feed');
        $guild_id = Arr::get($_POST, 'guild_id'); // guild id
        // Get guild info
        $guild = Model::factory('guild')->get_guild($guild_id);
        // Get guild character
        $guild_character = Model::factory('CharacterDetail')->get_guild_character($user->id, $guild_id);

        // All feeds
     
        $feeds = Model::factory('GuildFeeds')->get_admin_guild_more_feeds($lastfeed);
     

        
        $config_path = Kohana::$config->load('myconf');

        // Right content
        $this->template->content = View::factory('admin/feeds/guildfeed_more')
                ->bind("guild", $guild)
                ->bind('guild_character', $guild_character)
                ->bind("config_path", $config_path)
                ->bind("feeds", $feeds)
                ->bind('feed_type', $feed_type);
        
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
    }
    
    public function action_guild_feeddelete() {
        $user = Auth::instance()->get_user();
        $feed_id = Arr::get($_POST, 'feedid');
        $feed = ORM::factory('feeds')->where('feed_id', '=', $feed_id)->find();
        Model::factory('GuildFeeds')->guild_feeddelete($feed_id);
               
        $this->auto_render = FALSE;
    }
    
       public function action_edit_guildfeeds() {
        $user = Auth::instance()->get_user();
        $this->template = View::factory('template/blank');
        $feed_id = Arr::get($_POST, 'feedid');
        $guild_id = Arr::get($_POST, 'guildid');
  
        // Get feed
        $feed = Model::factory('GuildFeeds')->get_feed($guild_id, $feed_id);
        // Get feed comments
        $comment = Model::factory('GuildComments')->get_comments($feed_id);
        $comment->reset(FALSE);
        $comment_count = $comment->count_all(); // comment count
        $comments = $comment->limit(3)->find_all();
        // Get guild character
        $guild_character = Model::factory('CharacterDetail')->get_guild_character($user->id, $guild_id);
        // Guild member role
        $guild_member_role = Model::factory('GuildMembers')->get_member_role($user->id, $guild_id);

        // Right content
        $this->template->content = View::factory('admin/feeds/edit_guildfeeds')
                ->bind('feed', $feed)
                ->bind('comments', $comments)
                ->bind('comment_count', $comment_count)
                ->bind('user', $user)
                ->bind('guild_character', $guild_character)
                ->bind('guild_role', $guild_member_role);

        // Youtube embed video script
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
    }
    
    
    public function action_change_defaultguild_image() {
     
        $user = Auth::instance()->get_user();
        $feed_id = Arr::get($_POST, 'feed_media_id');
        Model::factory('GuildFeedMedia')->change_mediadefaultimg($feed_id);
        $this->auto_render = FALSE;
    }
    
    public function action_delete_comment() {
        $user = Auth::instance()->get_user();
        $feed_id = Arr::get($_POST, 'commentid');
        $comment = ORM::factory('Comments')->where('feed_id', '=', $feed_id)->find();
        Model::factory('Comments')->delete_comment($feed_id);
               
        $this->auto_render = FALSE;
    }

    public function action_delete_guild_comment() {
        $user = Auth::instance()->get_user();
        $feed_id = Arr::get($_POST, 'commentid');
        $comment = ORM::factory('GuildComments')->where('feed_id', '=', $feed_id)->find();
        Model::factory('GuildComments')->delete_guildcomment($feed_id);

        $this->auto_render = FALSE;
    }

    public function action_logout() {
        // Admin logout
        Auth::instance()->logout();
        // Redirect to login page
        $this->redirect('/');
    
    }
    
    public function action_search() {
    if (HTTP_Request::POST == $this->request->method()) {
    $game_name = $_POST['game_name'];
    if ($game_name != NULL) {

    $game_name = Model::factory('Game')->getgamelist($game_name);
    $this->template = View::factory('template/blank');
    $this->template->content = View::factory('admin/get_game_grid_details')
    ->bind('games', $game_name);
    }
    else
    {
    $game_list = Model::factory('Game')->get_all_games();
    $this->template = View::factory('template/blank');
    $this->template->content = View::factory('admin/get_game_grid_details')
    ->bind('games', $game_list);
    }
    }
    }
    

}


?>
