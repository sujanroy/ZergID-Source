<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Template_User extends Controller_Template
{
    public $template = 'template/user';

    /**
     * The before() method is called before your controller action.
     * In our template controller we override this method so that we can
     * set up default values. These variables are then available to our
     * controllers if they need to be modified.
     */
    public function before() {
        parent::before();
        $user = Auth::instance()->get_user();
        if (!$user)
        {
            $this->redirect('/', 302);
        }
        if($user && $user->user_type != 1) {
             $this->redirect('/admin', 302);
        }
        if ($this->auto_render) {
            
            // Initialize empty values
            $this->template->title   = '';
            $this->template->content = '';
            $this->template->styles = array();
            $this->template->scripts = array(); 
            $config_path=  Kohana::$config->load('myconf'); 
            view::bind_global('config_path', $config_path);
              $cdate = date('Y-m-d');
              $edate = date("Y-m-d", strtotime($cdate ." +15 days") );
           
            $user_zone = ORM::factory('user')->where('id', '=', $user)->find();
            
            $timezone = $user_zone->user_timezone; 
            $events = ORM::factory('Events')
                    ->select('zid_guild_members.*', array('zid_event_members.user_id', 'userid'), array('zid_event_members.is_rsvp_accepted', 'rsvp_accepted'))
                     ->add_subquery('(SELECT COUNT(event_member_id) FROM zid_event_members AS event_members WHERE event_members.event_id=events.event_id) AS event_members_count')
                    ->add_subquery('(SELECT user_timezone FROM zid_users AS user_zid WHERE user_zid.id=events.user_id) AS user_time_zone')
                    ->join('zid_guild_members', 'LEFT OUTER')
                    ->on('events.guild_id', '=', 'zid_guild_members.guild_id')
                    ->join('zid_event_members', 'LEFT OUTER')
                    ->on('events.event_id', '=', 'zid_event_members.event_id')
                    ->where_open()
                    ->where('zid_guild_members.user_id', '=', $user->id)
                    ->and_where('zid_guild_members.is_accepted', '=', 1)
                    ->and_where('events.event_date', '<=', $edate)
                    ->where_close()
                    ->or_where(DB::expr( 'FIND_IN_SET(\''.$user->id.'\', '), '', DB::expr('is_sendto_user )'))
                    ->and_where('events.guild_id', 'is', NULL)
                    ->and_where('events.event_date', '<=', $edate)
                    ->and_where('events.is_active', '=', 1)
                    ->order_by('events.event_date', 'ASC')
                    ->find_all();
            
            $messages = ORM::factory('Message')
                    ->where('receiver_id', '=', $user->id)
                    ->and_where('is_message_viewed', '=', 0)
                    ->and_where('is_message_active', '=', 1)
                    ->or_where(DB::expr( 'NOT FIND_IN_SET(\''.$user->id.'\', '), '', DB::expr('is_event_message_viewed)'))
                    ->and_where(DB::expr( 'FIND_IN_SET(\''.$user->id.'\', '), '', DB::expr(' guild_receiver_id )'))
                    ->or_where(DB::expr( 'FIND_IN_SET(NULL, '), '', DB::expr('is_event_message_viewed)'))
                    ->count_all();

            $this->template->header_content = View::factory('template/header')
                                      ->bind('events', $events)
                                      ->bind('user', $user)
                                      ->bind('timezone',$timezone) 
                                      ->bind('messages', $messages);
          
    $this->template->left_content = Controller_Helper::action_left_bar($user->id);
    $this->template->footer_content = View::factory('template/footer');

    }
    }
     
    /**
     * The after() method is called after your controller action.
     * In our template controller we override this method so that we can
     * make any last minute modifications to the template before anything
     * is rendered.
     */
    public function after() {

        if ($this->auto_render && ! in_array($this->request->action(), array('feed_more','zerg_more', 'myfeed', 'most_popular_feed', 'mygames', 'comment_more', 'officers_feed', 'members_feed', 'sent', 'readmessage', 'replymessage', 'load_more_old_messages', 'garbage', 'load_more_messages', 'options','get_existing_banner','select_character_name','most_recent_feed'))) {
            $styles = array(
            'public/css/skin.css' => 'screen, projection',
            'public/css/jquery.alerts.css' => 'screen, projection',
            );
            $scripts = array(
            'public/js/jquery.min.js','public/js/jquery-1.6.4.js',
            'public/js/jquery.validate.min.js',   
            'public/js/action.js', 'public/js/tutorial.js','public/js/jquery.alerts.js','public/js/jquery-ui.js','public/js/google_analytics.js',
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
