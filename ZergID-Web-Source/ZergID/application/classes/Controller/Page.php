<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Template_Page {

    # Render About us page
    public function action_index() {
        $this->template->title = "About Us";
        $this->template->content = View::factory('helper/about');
    }

    # Render Privacy page
    public function action_privacy() {
        $this->template->title = "Privacy Policy";
        $this->template->content = View::factory('helper/privacy');
    }

    # Render Support page
    public function action_support() {
        $config_path = Kohana::$config->load('myconf');
        $this->template->title = "Support";
        $this->template->content = View::factory('helper/support')
                ->bind("config_path", $config_path);
    }

    # Render Terms of service 
    public function action_terms() {
        $this->template->title = "Terms of service";
        $this->template->content = View::factory('helper/terms_of_service');
    }

}
