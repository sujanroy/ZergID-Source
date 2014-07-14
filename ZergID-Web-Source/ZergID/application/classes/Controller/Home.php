<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template_Home {
    
    public function action_index() {
        // Check Alpha user session
        $value = Cookie::get('value');
        if ($value == NULL):
            $this->redirect(URL::site());
        endif;
        $this->template->title = "Home";
        $this->template->header = View::factory('home/index')  // load 'view/home/index.php' view file
                ->bind('user', $user);
        $this->template->signup_view = View::factory('home/signup') // load 'view/home/signup.php' view file
                ->bind('errors', $login_errors)
                ->bind('message', $signup_messages);
        $this->template->login_view = View::factory('home/login') // load 'view/home/login.php' view file
                ->bind('message', $login_messages);
        $this->template->forgot_password_popup = View::factory('helper/popup/forgot_password_popup');

        if (HTTP_Request::POST == $this->request->method()) {
            if (isset($_POST['email'])) {
                try {
                    // Create the user using form values
                    $user = ORM::factory("User")->create_user($this->request->post(), array(
                        'username',
                        'email',
                        'password'
                            ));
                    $_POST = array();
                    $user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), FALSE);
                    // If successful, redirect user
                    if ($user) {    
                        $username = $this->request->post('username');
                        $email_id = $this->request->post('email');
                        $message = View::factory('template/mail/welcome_email')
                                 ->bind('username', $username);
                        $mail = array(
                            'subject' => 'Welcome to ZergID',
                            'body' => $message,
                            'from' => array('support@zergid.com' => 'ZergID'),
                            'to' => $this->request->post('email')
                        );
                        $userid = Auth::instance()->get_user();
                        DB::query(Database::UPDATE, 'UPDATE zid_users set user_timezone = "'.$this->request->post('timezone').'" WHERE id =' .$userid->id)->execute();  
                       $email = Email::send('default', $mail['subject'], $mail['body'], $mail['from'], $mail['to'], 'text/html');              

                       $notify_message = View::factory('template/mail/notification_mail')
                                 ->bind('email_id', $email_id)
                                 ->bind('username', $username);
                        $mail = array(
                            'subject' => 'New User Notification',
                            'body' => $notify_message,
                            'from' => array('support@zergid.com' => 'ZergID'),
                            'to' => "jaseem_m@yahoo.com"
                        );
                       $notify_email = Email::send('default', $mail['subject'], $mail['body'], $mail['from'], $mail['to'], 'text/html'); 
         
                        $this->redirect('user/index?signup');
                    } else {
                        $signup_message = 'Login failed';
                    }
                } catch (ORM_Validation_Exception $e) {
                    // Set failure message
                    $signup_message = 'There were errors, please see form below.';
                    // Set errors using custom messages
                    $login_errors = $e->errors('models');
                }
            } else {
		if($this->request->post('username') !=''):
                $user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'));
		endif;
                // If successful, redirect user
                if ($user) {
                    $this->redirect('feeds/index');
                } else {
                    $login_messages = 'Login failed';
                }
            }
        }
    }

    // Check same username already exist
    public function action_validate() {
        if ($this->request->is_ajax()) {
            $username = Request::current()->post('Username');
            $data = ORM::factory('User')->where('username', '=', $username)->and_where('is_deleted','=',1);
            $total = $data->count_all();
            if ($total > 0) {
                echo '<span class="taken">Username already taken</span>';
            }
            $this->auto_render = FALSE;
        }
    }
    
     // Check email id already exist
     public function action_emailvalidate() {
        if ($this->request->is_ajax()) {
            $email = Request::current()->post('Email');
            $data = ORM::factory('User')->where('email', '=', $email)->and_where('is_deleted','=',1);
            $total = $data->count_all();
            if ($total > 0) {
                echo '<span class="taken">Email address must be an unique</span>';
            }
            $this->auto_render = FALSE;
        }
     }

    // Login user
    public function action_login() {
        if ($this->request->is_ajax()) {
            $data = Arr::get($_POST, 'data');
            $timezone = Arr::get($_POST, 'time_zone');
            $username = Arr::get($_POST, 'Username');
            if($data == 1):
                $data = TRUE;
            else:
                $data = FALSE;
            endif;
            $user_isactive = ORM::factory('User')->where('username', '=', $username)->find();
            if($user_isactive->is_active == NULL):
            $login = Auth::instance()->login($this->request->post('Username'), $this->request->post('Password'), $data);
            if ($login) {
                $user = Auth::instance()->get_user();
                // Update user timezone
                DB::query(Database::UPDATE, 'UPDATE zid_users set user_timezone = "'.$timezone.'" WHERE id =' .$user->id)->execute();  
                if($user->user_type == 1):
                    echo 'user';
                else:
                    echo 'admin';
                endif;
            } else {
                echo '<span class="available">Invalid username or password</span>';
            }
            else:
                echo '<span class="available">Account has been deactivated</span>';
            endif;
            $this->auto_render = FALSE;
        }
    }
    
    // Forgot password
    public function action_forgot_password() {
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
             $user_data = Arr::get($_POST, 'username');
             $user = ORM::factory('User')->where('username', '=', $user_data)->or_where('email', '=', $user_data)->find();
             if($user->id):
             $password = $this->_generate_password(8);
             $user->password = $password;
             $user->save();
             $user_name = $user->username;

            $message = View::factory('template/mail/forgot_password')
                    ->bind('username', $user_name)
                    ->bind('password', $password);
            $mail = array(
                'subject' => 'Forgot Password',
                'body' => $message,
                'from' => array('support@zergid.com' => 'ZergID'),
                'to' => $user->email
            );

            $email = Email::send('default', $mail['subject'], $mail['body'], $mail['from'], $mail['to'], 'text/html');
            endif;
            if ($user->id) {
                echo $user->email;
            } else {
                echo "Not sent";
            }
         }
        $this->auto_render = FALSE;
    }
    
    // Generate new password 
    public function _generate_password($length) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr(str_shuffle($chars), 0, $length);
        return $password;
    }
    
    // set remember me falg in session
    public function action_remember_me() {
        if ($this->request->is_ajax()) {
            $data = Arr::get($_POST, 'data');
            $session = Session::instance();
            $session->set('remember_me', $data);
            $value = $session->get('remember_me');
            echo $value;
        }
        $this->auto_render = FALSE;
    }
}

// End Welcome
