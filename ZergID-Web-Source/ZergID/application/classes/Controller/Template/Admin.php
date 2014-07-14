<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Template_Admin extends Controller_Template
{
    public $template = 'template/admin/admin';

    /**
     * The before() method is called before your controller action.
     * In our template controller we override this method so that we can
     * set up default values. These variables are then available to our
     * controllers if they need to be modified.
     */
    public function before() {
        parent::before();
        $user = Auth::instance()->get_user();
   
        if (!$user || $user->user_type != 2)
        {
            $this->redirect('/', 302);
        }
        
        if ($this->auto_render) {
            
            // Initialize empty values
            $this->template->title   = '';
            $this->template->content = '';
            $this->template->styles = array();
            $this->template->scripts = array(); 
            $config_path=  Kohana::$config->load('myconf'); 
            view::bind_global('config_path', $config_path);

            $messages = ORM::factory('Message')->where('receiver_id', '=', $user->id)->and_where('is_message_viewed', '=', 0)->or_where(DB::expr( 'NOT FIND_IN_SET(\''.$user->id.'\', '), '', DB::expr('is_event_message_viewed)'))->and_where(DB::expr( 'FIND_IN_SET(\''.$user->id.'\', '), '', DB::expr(' guild_receiver_id )'))->or_where(DB::expr( 'FIND_IN_SET(NULL, '), '', DB::expr('is_event_message_viewed)'))->count_all();

            $this->template->header_content = View::factory('template/admin/header')
                                      ->bind('user', $user)
                                      ->bind('messages', $messages);

    }
    }
     
    /**
     * The after() method is called after your controller action.
     * In our template controller we override this method so that we can
     * make any last minute modifications to the template before anything
     * is rendered.
     */
    public function after() {

        if ($this->auto_render && ! in_array($this->request->action(), array('feed_more','zerg_more', 'myfeed', 'most_popular_feed', 'mygames', 'comment_more', 'officers_feed', 'members_feed', 'sent', 'readmessage', 'replymessage', 'load_more_old_messages', 'garbage', 'server', 'faction', 'class', 'profession', 'get_game_details', 'view_characterdetail','guild_members','guild_event_details','view_guilddetail','guild_details','character_details_view','guildfeed_more','edit_guildfeeds','guild_feeds','manage_feeds_details','game_grid_details','game_add_details','edit_zergfeeds','zergfeed_more','search','deleted_user'))) {
            $styles = array(
            'public/css/skin.css' => 'screen, projection',
            );
            $scripts = array(
            'public/js/jquery.min.js','public/js/jquery-1.6.4.js',
            'public/js/jquery.validate.min.js',   
            'public/js/action.js', 'public/js/tutorial.js','public/js/google_analytics.js',
            );
            $this->template->styles = array_merge( $this->template->styles, $styles );
            $this->template->scripts = array_merge( $this->template->scripts, $scripts );

        }
        parent::after();
    }
    public function action_404()
    {
    $this->template->title = '404 Not Found';
 
    // Here we check to see if a 404 came from our website. This allows the
    // webmaster to find broken links and update them in a shorter amount of time.
    if (isset ($_SERVER['HTTP_REFERER']) AND strstr($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) !== FALSE)
    {
        // Set a local flag so we can display different messages in our template.
        $this->template->local = TRUE;
    }
 
    // HTTP Status code.
    $this->response->status(404);
 }
}
