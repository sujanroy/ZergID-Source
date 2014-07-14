<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_AlphaHome extends Controller_Template_AlphaHome {
    
    # Alpha screen home page
    public function action_index() {
        $this->template->title = "Home";
        $this->template->header = View::factory('alphahome/index')  // load 'view/home/index.php' view file
                ->bind('user', $user);
        $this->template->signup_view = View::factory('alphahome/signup') // load 'view/home/signup.php' view file
                ->bind('errors', $login_errors)
                ->bind('message', $signup_messages);
    }

    # Send mail,if new user signup for alpha testing    
    public function action_create_user() {
        if (HTTP_Request::POST == $this->request->method()) {
            $message = View::factory('template/mail/alpha_signup')
                    ->bind('email', $_POST['email']);
            $mail = array(
                'subject' => 'New user Signup',
                'body' => $message,
                'from' => array('support@zergid.com' => 'ZergID'),
                'to' => 'newuser@zergid.com'
            );

            $email = Email::send('default', $mail['subject'], $mail['body'], $mail['from'], $mail['to'], 'text/html');
            if ($email == 1) {
                echo "success";
            } else {
                echo "Not sent";
            }
            $this->auto_render = FALSE;
        }
    }
   
    # Create login session for alpha screen 				
    public function action_create_session() {
         if ($this->request->is_ajax()) {           
               $data = Arr::get($_POST, 'data');
               Cookie::set('value', $data, 60*60*1000);
               $value = Cookie::get('value');
             echo $value;
         }
          $this->auto_render = FALSE;
    }

}

// End Welcome
