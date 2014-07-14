<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Search extends Controller_Template_User {

   # Keyword search show all zergid,character and guild
   public function action_index() {
        $user = Auth::instance()->get_user();
        $keyword = trim(Arr::get($_POST, 'keyword'));
        if($keyword != NULL || $keyword != ""):
        $zergid_query = 'zerg_name:*' . $keyword. '* OR zerg_name:"*'.$keyword.'*"';
        $character_query = 'charactername:*' . $keyword . '* OR charactername:"*'.$keyword.'*"';
        $guild_query = 'guild_name:*' . $keyword . '* OR guild_name:"*'.$keyword.'*"';
        $feed_query = 'feed_text:*' . $keyword . '* OR feed_text:"*'.$keyword.'*"'; 
        else:
        $zergid_query = NULL;
        $character_query = NULL;
        $guild_query = NULL;
        $feed_query = NULL;
        endif;

        $zergid = Solr::instance()->search($zergid_query);
        $character_list = Solr::instance()->search($character_query);
        $guild_list = Solr::instance()->search($guild_query);
        $feeds = Solr::instance()->search($feed_query);
        $this->template->content = View::factory('search/index');
        
        $this->template->content->search_view = View::factory('search/search')
                    ->bind('user',$user)
                    ->bind('zergid', $zergid)
                    ->bind('character_list', $character_list)
                    ->bind('guild_list', $guild_list)
                    ->bind('feeds', $feeds);
        
         // Youtube video script
        $this->template->content->search_view->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
        
        $games = ORM::factory("Game")->where('is_active', '=', '1')->find_all();
        $this->template->left_content = View::factory('search/left_bar')
                ->bind('keyword', $keyword)
                 ->bind('games', $games)
                ->bind('select', $_POST['game'])
                ->bind('zergid', $_POST['zergid'])
                ->bind('character', $_POST['character'])
                ->bind('guild', $_POST['guilds'])
                ->bind('zergs', $_POST['zergs']);
        
    }

    # Search using filter option    
    public function action_options() {
        if (HTTP_Request::POST == $this->request->method()) {
            $keyword = trim(Arr::get($_POST, 'keyword'));
            $game = Arr::get($_POST, 'game');
            $zerg_id = Arr::get($_POST, 'zerg_id');
            $character = Arr::get($_POST, 'character');
            $guild = Arr::get($_POST, 'guild');
            $zergs = Arr::get($_POST, 'zergs');
            $class = Arr::get($_POST, 'class_name');
            $server = Arr::get($_POST, 'server');
            $faction = Arr::get($_POST, 'faction');
            $guild_name = Arr::get($_POST, 'guild_name');
            $game_name = 'Select Game Name';
            $zergid_query = NULL;
            $character_query = NULL;
            $guild_query = NULL;
            $feed_query = NULL;
            
            $zergid_keyword = 'zerg_name:*' . $keyword . '* OR zerg_name:"*' . $keyword . '*"';
            $character_keyword = 'charactername:*' . $keyword . '* OR charactername:"*' . $keyword . '*"';
            $guild_keyword = 'guild_name:*' . $keyword . '* OR guild_name:"*' . $keyword . '*"';
            $feed_keyword = 'feed_text:*' . $keyword . '* OR feed_text:"*' . $keyword . '*"';
            $character_game_keyword = $character_keyword.'AND game_name:"'.$game.'"';
            $guild_game_keyword = $guild_keyword.'AND game_name:"'.$game.'"';
            $char_add_keyword = 'charactername:*' . $keyword . '*';
            $guild_add_keyword = 'guild_name:*' . $keyword . '*';

            if($keyword != NULL && ($class != NULL || $server != NULL || $faction != NULL || $guild_name != NULL)){
                if($class != NULL && $server == NULL && $faction == NULL && $guild_name == NULL):
                  $character_query = $char_add_keyword.' AND class_name:"'.$class.'"';
                elseif($class == NULL && $server == NULL && $faction == NULL && $guild_name != NULL):
                  $character_query = $char_add_keyword.' AND guildname:"'.$guild_name.'"';
                elseif($class != NULL && $server == NULL && $faction == NULL && $guild_name != NULL):
                  $character_query = $char_add_keyword.' AND guildname:"'.$guild_name. '" AND class_name:"'.$class.'"';
                elseif($class == NULL && $server != NULL && $faction == NULL && $guild_name == NULL):
                  $character_query = $char_add_keyword.' AND server_name:"' . $server . '"';
                  $guild_query = $guild_add_keyword.' AND server_name:"' . $server . '"';
                elseif($class == NULL && $server == NULL && $faction != NULL && $guild_name == NULL):
                  $character_query = $char_add_keyword. ' AND faction_name:'.$faction;
                  $guild_query = $guild_add_keyword.' AND faction_name:'.$faction;
                elseif($class == NULL && $server != NULL && $faction != NULL && $guild_name == NULL):
                  $character_query = $char_add_keyword.' AND faction_name:"' . $faction . '"'.' AND server_name:"' . $server . '"';
                $guild_query = $guild_add_keyword.' AND faction_name:"' . $faction . '"'.' AND server_name:"' . $server . '"';
                elseif($class != NULL && $server != NULL && $faction != NULL && $guild_name == NULL):
                  $character_query = $char_add_keyword.'AND faction_name:'.$faction.' AND server_name:' . $server.' AND class_name:' . $class;
                elseif($class != NULL && $server != NULL && $faction != NULL && $guild_name != NULL):
                  $character_query = $char_add_keyword.'AND faction_name:'.$faction.' AND server_name:' . $server.' AND class_name:' . $class . ' AND guildname:' . $guild_name;
                elseif($class != NULL && $server != NULL && $faction == NULL && $guild_name == NULL):
                  $character_query = $char_add_keyword.'AND server_name:"' . $server.'" AND class_name:"' . $class.'"';
                
                elseif($class != NULL && $server != NULL && $faction != NULL && $guild_name == NULL):
                  $character_query = $char_add_keyword.'AND server_name:' . $server.' AND class_name:' . $class.' AND faction_name:' . $faction;
                elseif($class != NULL && $server != NULL && $faction == NULL && $guild_name != NULL):
                  $character_query = $char_add_keyword.'AND server_name:' . $server. ' AND class_name:' . $class. ' AND guildname:' . $guild_name;
                elseif($class == NULL && $server != NULL && $faction == NULL && $guild_name != NULL):
                  $character_query = $char_add_keyword.'AND server_name:' . $server. ' AND guildname:' . $guild_name;
                elseif($class == NULL && $server == NULL && $faction != NULL && $guild_name != NULL):
                  $character_query = $char_add_keyword.'AND faction_name:' . $faction . ' AND guildname:' . $guild_name;
                elseif($class == NULL && $server != NULL && $faction != NULL && $guild_name != NULL):
                  $character_query = $char_add_keyword.'AND server_name:' . $server. ' AND faction_name:' . $faction . 'AND guildname:' . $guild_name;
                elseif($class != NULL && $server == NULL && $faction != NULL && $guild_name == NULL):
                   $character_query = $char_add_keyword.'AND faction_name:' . $faction . ' AND class_name:' . $class;
                elseif($class != NULL && $server == NULL && $faction != NULL && $guild_name != NULL):
                   $character_query = $char_add_keyword.'AND faction_name:' . $faction . 'AND class_name:' . $class;
                endif;
            }
            else {
            if ($keyword != NULL && $game == $game_name && $zerg_id == 0 && $character == 0 && $guild == 0 && $zergs == 0) {
            $zergid_query = $zergid_keyword;
            $character_query = $character_keyword;
            $guild_query = $guild_keyword;
            $feed_query = $feed_keyword;
            }
            else if($keyword != NULL && $game != $game_name && $zerg_id == 0 && $character == 0 && $guild == 0 && $zergs == 0){
            $character_query = $character_game_keyword;
            $guild_query = $guild_game_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 1 && $character == 0 && $guild == 0 && $zergs == 0){
            $zergid_query = $zergid_keyword; 
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 0 && $character == 1 && $guild == 0 && $zergs == 0){
            $character_query = $character_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 0 && $character == 0 && $guild == 1 && $zergs == 0){
            $guild_query = $guild_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 0 && $character == 0 && $guild == 0 && $zergs == 1){
            $feed_query = $feed_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 1 && $character == 1 && $guild == 1 && $zergs == 1){
            $zergid_query = $zergid_keyword;
            $character_query = $character_keyword;
            $guild_query = $guild_keyword;
            $feed_query = $feed_keyword;
            }
            
            else if($keyword != NULL && $game != $game_name && $zerg_id == 1 && $character == 1 && $guild == 1 && $zergs == 1){
            $character_query = $character_game_keyword;
            $guild_query = $guild_game_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 1 && $character == 1 && $guild == 1 && $zergs == 0){
            $zergid_query = $zergid_keyword;
            $character_query = $character_keyword;
            $guild_query = $guild_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 1 && $character == 0 && $guild == 1 && $zergs == 1){
            $zergid_query = $zergid_keyword;
            $guild_query = $guild_keyword;
            $feed_query = $feed_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 1 && $character == 1 && $guild == 0 && $zergs == 1){
            $zergid_query = $zergid_keyword;
            $character_query = $character_keyword;
            $feed_query = $feed_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 0 && $character == 1 && $guild == 1 && $zergs == 1){
            $character_query = $character_keyword;
            $guild_query = $guild_keyword;
            $feed_query = $feed_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 1 && $character == 1 && $guild == 0 && $zergs == 0){
            $zergid_query = $zergid_keyword;
            $character_query = $character_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 1 && $character == 0 && $guild == 0 && $zergs == 1){
            $zergid_query = $zergid_keyword;
            $feed_query = $feed_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 0 && $character == 0 && $guild == 1 && $zergs == 1){
            $guild_query = $guild_keyword;
            $feed_query = $feed_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 1 && $character == 0 && $guild == 1 && $zergs == 0){
            $zergid_query = $zergid_keyword;
            $guild_query = $guild_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 0 && $character == 1 && $guild == 0 && $zergs == 1){
            $character_query = $character_keyword;
            $feed_query = $feed_keyword;
            }
            
            else if($keyword != NULL && $game == $game_name && $zerg_id == 0 && $character == 1 && $guild == 1 && $zergs == 0){
            $character_query = $character_keyword;
            $guild_query = $guild_keyword;
            }
            
            else if($keyword != NULL && $game != $game_name && ($zerg_id == 0 || $zerg_id == 1) && $character == 1 && $guild == 1 && ($zergs == 0 || $zergs == 1)){
            $character_query = $character_game_keyword;
            $guild_query = $guild_game_keyword;
            }
            
            else if($keyword != NULL && $game != $game_name && ($zerg_id == 0 || $zerg_id == 1) && $character == 1 && $guild == 0 && ($zergs == 0 || $zergs == 1)){
            $character_query = $character_game_keyword;
            }
            
            else if($keyword != NULL && $game != $game_name && ($zerg_id == 0 || $zerg_id == 1) && $character == 0 && $guild == 1 && ($zergs == 0 || $zergs == 1)){
            $guild_query = $guild_game_keyword;
            }
            }
            
            if($zergid_query != NULL):
            $zergid = Solr::instance()->search($zergid_query);
            else:
             $zergid = NULL;
            endif;
            if($character_query != NULL):
            $character_list = Solr::instance()->search($character_query);
            else:
            $character_list = NULL;
            endif;
            if($guild_query != NULL):
             $guild_list = Solr::instance()->search($guild_query);
            else:
             $guild_list = NULL; 
            endif;
            if($feed_query != NULL):
             $feeds = Solr::instance()->search($feed_query);
            else:
             $feeds = NULL;
            endif;
            
            
            $this->template = View::factory('template/blank');
            $this->template->content = View::factory('search/search')
                    ->bind('zergid', $zergid)
                    ->bind('character_list', $character_list)
                    ->bind('guild_list', $guild_list)
                    ->bind('feeds', $feeds);
         // Youtube video script
        $this->template->content->youtube_embed_script_view = View::factory('helper/script/youtube_embed_video_script');
        }
    }
}

?>
