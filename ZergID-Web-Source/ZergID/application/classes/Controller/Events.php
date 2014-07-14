<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Events extends Controller_Template_Guild {

    public function action_index() {
        $this->template->title = "Events";
        $user = Auth::instance()->get_user();
        // Get all events
        $events = Model::factory('Events')->get_all_events($user->id);
        $events->reset(FALSE);
        
        // Get month events
        $month_events = $events->group_by('events.event_date')->find_all();

        // Get calendar events
        $calendar_events = Model::factory('Events')->get_all_events($user->id)->find_all();
                
        // Right content
        $this->template->content = View::factory('events/index')
                ->bind('events', $calendar_events)
                ->bind('user', $user);

        // Left content
        $this->template->left_content = View::factory('events/left_bar')
                ->bind('events', $month_events)
                ->bind('user', $user);
    }

    /* Create Event */

    public function action_create() {
        $this->template->title = "Create Event";
        $guild_id = $this->request->param('id'); // guild id
        $this->template->content = View::factory('events/create')
                ->bind('guild_id', $guild_id);
    }

    /* Save Event */

    public function action_save() {
        $user = Auth::instance()->get_user();
        $guild_id = $this->request->param('id'); // guild id
        if (HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['event_attendance']))
                $_POST['event_attendance'] = 0;
            if (!isset($_POST['event_officers']))
                $_POST['event_officers'] = 0;
            if (!isset($_POST['event_members']))
                $_POST['event_members'] = 0;
            if (!isset($_POST['event_description']))
                $_POST['event_description'] = NULL;
            if (!isset($_POST['character_id']) || $_POST['character_id'] == '')
            $_POST['character_id'] = 'NULL';
            if (!isset($_POST['is_sendto_user']) || $_POST['is_sendto_user'] == '')
            $_POST['is_sendto_user'] = 'NULL';
            if (!isset($_POST['is_sendto_character']) || $_POST['is_sendto_character'] == '')
            $_POST['is_sendto_character'] = 'NULL';
            
            $guild_character_id = ORM::factory('CharacterDetail')->where('guild_id', '=', $guild_id)->find();
            $event_date = $_POST['event_date'];
            $event_from_date = $_POST['event_from_time'];
            $event_timezone = $_POST['event_timezone'];
            $event_to_date = $_POST['event_to_time'];
            if($event_from_date > $event_to_date):
            $event_todate = date("Y-m-d", strtotime($event_date ." +1 days") );
            else:
            $event_todate = $event_date;
            endif;
            // Save event
            $event = Model::factory("Events")->add_event($user->id, $guild_id, $_POST,$event_todate,$event_timezone);
           // $create_date = ORM::factory('Events')->where('event_id', '=', $event)->find();	

            // Send event message to guild members
            if ($_POST['event_members'] != 0 && $_POST['event_officers'] != 0) {
                // Get guild all members
                $guild_members = Model::factory('GuildMembers')->get_guild_members($guild_id);
            }
            if ($_POST['event_members'] != 0 && $_POST['event_officers'] == 0) {
                // Get guild members
                $guild_members = Model::factory('GuildMembers')->get_guild_officers($guild_id, 2);
            }
            if ($_POST['event_members'] == 0 && $_POST['event_officers'] != 0) {
                // Get guild officers
                $guild_members = Model::factory('GuildMembers')->get_guild_officers($guild_id, 3);
            }
            if (count($guild_members) > 0):
                foreach ($guild_members as $guild_member):
                    $member_list[] = $guild_member->user_id;
                endforeach;
                $array_list = array_filter($member_list);
                $member_list = implode(',', $array_list);
                $now = new DateTime();
                // Send message to guild members
                $message = ORM::factory('Message');
                $message->user_id = $user->id;
                $message->character_detail_id = $guild_character_id->character_detail_id;
                $message->guild_id = $guild_id;
                $message->guild_receiver_id = $member_list;
                $message->subject = "New Event Notification";
                $message->message = $_POST['event_description'];
                $message->event_id = $event;
                $message->is_message_parent = 1;
                $message->created_date = $_POST['create_date'];
                $message->last_modified_date = $_POST['create_date'];
                $message->save();
            endif;
        }
        $this->auto_render = FALSE;
        $this->redirect('/guild/view/' . $guild_id);
    }

    /* View Event */

    public function action_view() {
        $this->template->title = "View Event";
        $user = Auth::instance()->get_user();
        $uri = $_SERVER['REQUEST_URI'];
        $explode_uri = explode('/',$uri);
        if($explode_uri[4] != 'char'):
         $event_id = $this->request->param('id1'); // event id
         else:
         $event_id = $this->request->param('id'); // event id    
         endif;
        // Select Event
        $event = Model::factory('Events')->get_event($event_id);
        $event_user = $event->user_id;
	//event Count 
        $event_count = ORM::factory('Events')->where('event_id', '=', $event_id)->count_all();
        if(!$event_count):
            $this->redirect("/events/index");
        endif;
        $role = ORM::factory('Role')->where('is_active','=',1)->find_all();
        // Get event member
        $event_member = Model::factory('EventMembers')->get_event_member_by_event_id($event_id, $user->id);
        // Get Character Name
        $character_name = ORM::factory('CharacterDetail')->where('character_detail_id', '=', $event->character_id)->find();
        $user_zone = ORM::factory('user')->where('id', '=', $user)->find();
        $eventuser_zone = ORM::factory('Events')->where('event_id', '=', $event_id)->find();
        $timezone = $user_zone->user_timezone;
        $event_timezone = $eventuser_zone->event_created_timezone;
        // Right content
        $this->template->content = View::factory('events/view')
                ->bind('event', $event)
                ->bind('timezone',$timezone)
                ->bind('roles',$role)  
                ->bind('event_timezone',$event_timezone)
                ->bind('event_member', $event_member)
                ->bind('character_name',$character_name)
                ->bind('explode_uri',$explode_uri)
                ->bind('user', $user);
        // Left Content Validation
        if($explode_uri[4] == 'char'):
        $this->template->left_content = Controller_Helper::action_left_bar($user->id);
        endif;
        // Pending members list view
        $this->action_pending_members_list($event_id);
        // Approved members list view
        $this->action_approved_members_list($event_id, 'members_approved_view');
    }

    /* Save Event Role */

    public function action_save_role() {
        $user = Auth::instance()->get_user();
       
        if (!isset($_POST['rsvp']))
            $_POST['rsvp'] = 0;
        if (!isset($_POST['rsvp_tank']))
            $_POST['rsvp_tank'] = 0;
        if (isset($_POST['event_user_id']))
            $event_user_id = $_POST['event_user_id'];
        if (isset($_POST['uri_hidden']))
            if ($_POST['uri_hidden'] != 'char'):
                $guild_id = $this->request->param('id'); // guild id
                $event_id = $this->request->param('id1'); // event id
                $character = Model::factory('GuildMembers')->get_character_info($user->id, $guild_id);
                $character_id = $character->character_detail_id;
            else:
                $event_id = $this->request->param('id1'); // event id
                if($event_user_id == $user->id):
                $character_id = $this->request->param('id'); // character id
                else:
                $event_character_id = ORM::factory('Events')->where('event_id', '=', $event_id)->find(); // character id
                 $explode_character_id = explode(',',$event_character_id->is_sendto_character);
           for($i=0;$i<=sizeof($explode_character_id)-1;$i++):
           $character_id_array = ORM::factory('CharacterDetail')->where('character_detail_id', '=', $explode_character_id[$i])->find();
           if($character_id_array->user_id == $user->id):
              $character_id = $explode_character_id[$i];    
           endif;
           endfor;                
                endif;               
        endif;
	//event Count 
        $event_count = ORM::factory('Events')->where('event_id', '=', $event_id)->count_all();
        if(!$event_count):
            $this->redirect("/events/index");
        endif;
        // RSVP pending
        $event = ORM::factory('EventMembers');
        if ($_POST['rsvp_state'] == 3):
            $array_list = array_filter($_POST['rsvp_tank']);
            $rsvpid = implode(',', $array_list);       
            $is_rsvp_accepted = 0;
            $event->user_id = $user->id;
            $event->character_detail_id = $character_id;
            $event->event_id = $event_id;
            $event->is_rsvp = $_POST['rsvp'];
            $event->comeas_role = $rsvpid;
            $event->is_rsvp_accepted = $is_rsvp_accepted;
            $event->save();
        else:
            // RSVP accepted
            $is_rsvp_accepted = 1;
            $event->user_id = $user->id;
            $event->character_detail_id = $character_id;
            $event->event_id = $event_id;
            $event->is_rsvp = $_POST['rsvp'];
            $event->is_role_accepted = $_POST['rsvp_tank'];
            $event->is_rsvp_accepted = $is_rsvp_accepted;
            $event->save();
        endif;
        if ($_POST['uri_hidden'] != 'char'):
        $this->redirect('events/view/' . $guild_id . '/' . $event_id);
        else:
        $this->redirect('events/view/' . $event_id . '/char');
        endif;
    }

    /* Edit Event */

    public function action_edit() {
        $user = Auth::instance()->get_user();
        $this->template->title = "Edit Event";
        $char_event_id = $this->request->param('id1');
        if($char_event_id !='char'):
        $event_id = $this->request->param('id1'); // event id
        else:
        $event_id = $this->request->param('id'); // event id   
        endif;
        // Get event
        $event = Model::factory('Events')->get_event($event_id);
	//event Count 
        $event_count = ORM::factory('Events')->where('event_id', '=', $event_id)->count_all();
        if(!$event_count):
            $this->redirect("/events/index");
        endif;
       // Get Character Name
        $character_name = ORM::factory('CharacterDetail')->where('character_detail_id', '=', $event->character_id)->find();
        if ($event->user_id == $user->id) {
            // Right content
            $this->template->content = View::factory('events/edit')
                                        ->bind('event', $event)
                                        ->bind('character_name',$character_name)
                                        ->bind('uri',$char_event_id);
            // Left Content Validation
        if($char_event_id == 'char'):
        $this->template->left_content = Controller_Helper::action_left_bar($user->id);
        endif;
            // Pending members list view
            $this->action_pending_members_list($event_id);
            // Approved members list view              
            $this->action_approved_members_list($event_id, 'members_approved_view');
        } else {
            $this->redirect('/');
        }
        if (!$event->event_id)
            $this->redirect('/');
    }

    /* Event Approved Members List */

    public function action_approved_members_list($event_id, $view) {
        $user = Auth::instance()->get_user();
        // Get event
        $event = Model::factory('Events')->get_event($event_id);
        $url = $this->request->param('id1');
        if($url !='char'):
        $event_members_approved = Model::factory('EventMembers')->get_event_members($event_id, 1);
        else:
        $event_members_approved = Model::factory('EventMembers')->get_character_event_members($event_id, 1);    
        endif;
        $role_id = ORM::factory('Role')->where('is_active','=',1)->find_all();
        $app_tank = Model::factory('EventMembers')->get_guild_play_style_count($event_id, 1);

        $this->template->content->$view = View::factory('events/event_members_approved')
                ->bind('event', $event)
                ->bind('event_members_approved', $event_members_approved)
                ->bind('url',$url)
                ->bind('role_id',$role_id)
                ->bind('app_tank', $app_tank)
                ->bind('user', $user);
    }

    /* Event Pending Members List */

    public function action_pending_members_list($event_id) {
        $user = Auth::instance()->get_user();
        // Get event
        $event = Model::factory('Events')->get_event($event_id);
        $url = $this->request->param('id1');
        if($url !='char'):
            $event_members_pending = Model::factory('EventMembers')->get_event_members($event_id, 0);
        else:
            $event_members_pending = Model::factory('EventMembers')->get_character_event_members($event_id, 0);
        endif;
        $role_id = ORM::factory('Role')->where('is_active','=',1)->find_all();
        $tank = Model::factory('EventMembers')->get_guild_play_style_count( $event_id, 0);

        $this->template->content->members_pending_view = View::factory('events/event_members_pending')
                ->bind('event', $event)
                ->bind('event_members_pending', $event_members_pending)
                ->bind('url',$url)
                ->bind('role_id',$role_id)
                ->bind('tank', $tank)
                ->bind('user', $user);
    }

    /* RSVP Approval */

    public function action_approval() {
        $user = Auth::instance()->get_user();
        if (HTTP_Request::POST == $this->request->method()) {
            $member_id = Arr::get($_POST, 'evnt_memberId'); // event member id
            $event_id = Arr::get($_POST, 'event_id'); // event id
            if (!isset($_POST['tank']))
                $_POST['tank'] = 0;
            if (isset($_POST['pathurl']))
            $url = $_POST['pathurl'];
            // Get event member
            $event_member = Model::factory('EventMembers')->get_event_member($member_id);
            if ($_POST['member_status'] != 3):
                if ($_POST['member_status'] == 2):
                    $alternate = 1;
                else:
                    $alternate = 0;
                endif;
                $event_member->is_role_accepted = $_POST['tank'];
                $event_member->is_alternate = $alternate;
                $event_member->is_rsvp_accepted = 1;
                $event_member->save();
            else:
                $event_member->delete();
            endif;
        }
        $this->template = View::factory('template/blank');
        // Get event
        $event = Model::factory('Events')->get_event($event_id);
        if($url !='char'):
            $event_members_approved = Model::factory('EventMembers')->get_event_members($event_id, 1);
        else:
           $event_members_approved = Model::factory('EventMembers')->get_character_event_members($event_id, 1);
        endif;
        $role_id = ORM::factory('Role')->where('is_active','=',1)->find_all();
        $app_tank = Model::factory('EventMembers')->get_guild_play_style_count('tank', $event_id, 1); 
      
        // Right conetnt view
        $this->template->content = View::factory('events/event_members_approved')
                ->bind('event', $event)
                ->bind('event_members_approved', $event_members_approved)
                ->bind('app_tank', $app_tank)
                ->bind('role_id', $role_id)    
                ->bind('url',$url)
                ->bind('user', $user);
    }

    /* View Calendar */

    public function action_calendar() {
        $this->template->title = "Events";
        $user = Auth::instance()->get_user();
        // Get events
        $events = Model::factory('Events')->get_events($user->id);
        // Right content view 
        $this->template->content = View::factory('events/index')
                ->bind('events', $events)
                ->bind('user', $user);
    }

    /* Unapprove event member */

    public function action_unapproved_member() {

        if (HTTP_Request::POST == $this->request->method()) {
            $member_id = Arr::get($_POST, 'member_id');
            Model::factory('EventMembers')->unapprove_event_member($member_id);
        }

        $this->auto_render = FALSE;
    }

    /* Remove Event Member */

    public function action_remove_member() {

        if (HTTP_Request::POST == $this->request->method()) {
            $member_id = Arr::get($_POST, 'member_id');
            ORM::factory('EventMembers', $member_id)->delete();
        }

        $this->auto_render = FALSE;
    }

    /* Update Event */

    public function action_update() {
        $char_event_id = $this->request->param('id1');
        if($char_event_id !='char'):
        $guild_id = $this->request->param('id'); // guild id
        $event_id = $this->request->param('id1');  // event id
        else:
         $event_id = $this->request->param('id');  // event id    
        endif;
        if (HTTP_Request::POST == $this->request->method()) {
            if (!isset($_POST['event_attendance']))
                $_POST['event_attendance'] = 0;
            if (!isset($_POST['event_description']))
                $_POST['event_description'] = NULL;
            $event_date = date('Y-m-d', strtotime($_POST['event_date']));
	    $event_from_date = $_POST['event_from_time'];
            $event_to_date = $_POST['event_to_time'];
            if($event_from_date > $event_to_date):
            $event_todate = date("Y-m-d", strtotime($event_date ." +1 days") );
            else:
            $event_todate = $event_date;
            endif;
            // Get event
            $event = Model::factory('Events')->get_event($event_id);
            $event->event_description = $_POST['event_description'];
            $event->event_date = $event_date;
	    $event->event_todate = $event_todate;	
            $event->event_from_time = $_POST['event_from_time'];
            $event->event_to_time = $_POST['event_to_time'];
            $event->is_attendance_required = $_POST['event_attendance'];
            $event->save();
        }
        $this->auto_render = FALSE;
        if($char_event_id !='char'):
        $this->redirect('/events/view/' . $guild_id . '/' . $event_id);
        else:
        $this->redirect('/events/view/' . $event_id . '/char'); 
        endif;
    }

    /* Get Event Time List */

    public function action_select_time() {
       if (HTTP_Request::POST == $this->request->method()) {
           $from_time = Arr::get($_POST, 'from_time');
           $totime = array();
           $config_path = Kohana::$config->load('myconf');
           $totime = $config_path->time;
           for ($i = 1; $i <= 48; $i++) {
               if($from_time == $i):
               unset($totime[$i]);
               endif;
           }
           echo json_encode($totime);
       }
       $this->auto_render = FALSE;
   }

    /* Delete Event */

    public function action_delete() {
        if (HTTP_Request::POST == $this->request->method()) {
            $event_id = Arr::get($_POST, 'event_id'); // event id
            // Delete event event members
            Model::factory('EventMembers')->delete_event_members($event_id);

            // Delete event messages
            Model::factory('Message')->delete_event_messages($event_id);

            // Delete event
            $event = ORM::factory("Events", $event_id);
            $event->delete();
        }
        $this->auto_render = FALSE;
    }

    /* RSVP Approval */

    public function action_rsvp_approval() {
        if (isset($_POST['rsvprole']) && !empty($_POST['rsvprole'])):
            foreach ($_POST['rsvprole'] as $rsvp_role):
                $rsvp_play_style = $_POST['rsvp_hidden_value' . $rsvp_role];
                // Get event member
                $event_member = Model::factory('EventMembers')->get_event_member($rsvp_role);
                if ($_POST['appr_select'] != 3):
                    if ($_POST['appr_select'] == 2):
                        $alternate = 1;
                    else:
                        $alternate = 0;
                    endif;
                    $event_member->is_role_accepted = $rsvp_play_style;
                    $event_member->is_alternate = $alternate;
                    $event_member->is_rsvp_accepted = 1;
                    $event_member->save();
                else:
                    $event_member->delete();
                endif;
            endforeach;
            $this->redirect(Request::initial()->referrer());
        endif;
    }
    
}
