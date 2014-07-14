<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Template_OtherUser extends Controller_Template
{
    public $template = 'template/otheruser';

    /**
     * The before() method is called before your controller action.
     * In our template controller we override this method so that we can
     * set up default values. These variables are then available to our
     * controllers if they need to be modified.
     */
    public function before() {
        parent::before();
        
        $user = Auth::instance()->get_user();
        $user_id = $this->request->param('id');
        if (!$user)
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
          
            $other_user = ORM::factory('user')->where('id', '=', $user_id)->find(); 
            $data = ORM::factory('profile')->where('user_id', '=', $user_id)->find();
            $this->template->left_content = View::factory('user/other_left_bar')
                                            ->bind("user", $other_user)
                                            ->bind("profile", $data); 
        }
    }
     
    /**
     * The after() method is called after your controller action.
     * In our template controller we override this method so that we can
     * make any last minute modifications to the template before anything
     * is rendered.
     */
    public function after() {

        if ($this->auto_render && ! in_array($this->request->action(), array('feed_more'))) {
            $styles = array(
            'public/css/skin.css' => 'screen, projection',
            );
            $scripts = array(
            'public/js/jquery.min.js','public/js/jquery-1.6.4.js',
            'public/js/jquery.validate.min.js','public/js/google_analytics.js',   
            'public/js/action.js'
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
