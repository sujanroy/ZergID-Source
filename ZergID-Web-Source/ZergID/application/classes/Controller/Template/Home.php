<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Template_Home extends Controller_Template
{
    public $template = 'template/home';

    /**
     * The before() method is called before your controller action.
     * In our template controller we override this method so that we can
     * set up default values. These variables are then available to our
     * controllers if they need to be modified.
     */
    public function before() {
        parent::before();
        if (Auth::instance()->get_user())
        {
            $this->redirect('feeds/', 302);
        }
        if ($this->auto_render) {
            // Initialize empty values
            $this->template->title   = '';
            $this->template->content = '';
            $this->template->styles = array();
            $this->template->scripts = array(); 
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
        if ($this->auto_render) {
            $styles = array(
            'public/css/skin.css' => 'screen, projection',
            );
            $scripts = array(
            'public/js/jquery.min.js',
            'public/js/jquery.validate.min.js',   
            'public/js/action.js',
            'public/js/jquery-ui.js','public/js/google_analytics.js', 
            );
            $this->template->styles = array_merge( $this->template->styles, $styles );
            $this->template->scripts = array_merge( $this->template->scripts, $scripts );

        }
        parent::after();
    }
}
