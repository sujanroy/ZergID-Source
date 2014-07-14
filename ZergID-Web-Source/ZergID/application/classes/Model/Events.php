<?php defined('SYSPATH') or die('No direct script access.');

class Model_Events extends ORM  {
    protected $_table_name = 'zid_events';
    protected $_primary_key = 'event_id';
    
   public function add_event($id, $guild_id, $data,$event_todate,$event_timezone) {
        # create guild events 
        $description = addslashes($data['event_description']);
        //for guild event creation character id will be NULL
        $query = "CALL add_event(".$id.", '".$guild_id."', ".$data['character_id'].", '".ucfirst(addslashes($data['event_name']))."', '".$description."', '".$data['event_date']."', '".$event_todate."',  '".$data['event_from_time']."', '".$data['event_to_time']."', '".$data['event_attendance']."', '".$data['event_officers']."', '".$data['event_members']."', '".$data['is_sendto_user']."', '".$data['is_sendto_character']."', '".$data['rsvp_status']."','".$event_timezone."', @LAST_ID);";
        $result = DB::query(Database::INSERT, $query)->execute();
        $insert_id =DB::query(Database::SELECT,"SELECT @LAST_ID")->execute();
        return $insert_id[0]['@LAST_ID'];
    }
    
    public function get_event($event_id) {
        # Get event by event id   
        $event = ORM::factory('Events')->where('event_id', '=', $event_id)->find();
        return $event;
    }
    
    public function get_guild_events($guild_id) {
        # Get events by guild id
        $query = ORM::factory('Events')->where('guild_id', '=', $guild_id)->find_all();
        return $query;
    }
    
    public function delete_event($event_id) {
        # Delete event
        $query = DB::delete(ORM::factory('Events')->table_name())->where('event_id', '=', $event_id)->execute();
        return $query;
    }
    
    public function get_all_events($user_id) {
        # Get all events
	$cdate = date('Y-m-d');
        $edate = date("Y-m-d", strtotime($cdate ." +15 days") );
        $query = ORM::factory('Events')
                 ->select('zid_guild_members.*', array('zid_event_members.user_id', 'userid'), array('zid_event_members.is_rsvp_accepted', 'rsvp_accepted'))
                 ->add_subquery('(SELECT COUNT(event_member_id) FROM zid_event_members AS event_members WHERE event_members.event_id=events.event_id) AS event_members_count')
                 ->join('zid_guild_members', 'LEFT OUTER')
                 ->on('events.guild_id', '=', 'zid_guild_members.guild_id')
                 ->join('zid_event_members', 'LEFT OUTER')
                 ->on('events.event_id', '=', 'zid_event_members.event_id')
                 ->where_open()
                 ->where('zid_guild_members.user_id', '=', $user_id)
                 ->and_where('zid_guild_members.is_accepted', '=', 1)
		 ->where_close()
                 ->or_where(DB::expr( 'FIND_IN_SET(\''.$user_id.'\', '), '', DB::expr('is_sendto_user )'))
                 ->and_where('events.guild_id', 'is', NULL)
                 ->and_where('events.is_active', '=',1)
                 ->order_by('events.event_date', 'ASC');
        return $query;
    }
    
    public function get_events($user_id) {
        # Get events
	$cdate = date('Y-m-d');
        $edate = date("Y-m-d", strtotime($cdate ." +15 days") );
        $query = ORM::factory('Events')
                ->select('zid_guild_members.*', array('zid_event_members.user_id', 'userid'), array('zid_event_members.is_rsvp_accepted', 'rsvp_accepted'))
                ->add_subquery('(SELECT COUNT(event_member_id) FROM zid_event_members AS event_members WHERE event_members.event_id=events.event_id) AS event_members_count')
                ->join('zid_guild_members', 'INNER')
                ->on('events.guild_id', '=', 'zid_guild_members.guild_id')
                ->join('zid_event_members', 'LEFT OUTER')
                ->on('events.event_id', '=', 'zid_event_members.event_id')
                ->where('zid_guild_members.user_id', '=', $user_id)
                ->and_where('zid_guild_members.is_accepted', '=', 1)
                ->order_by('events.event_date', 'ASC')
                ->find_all();
        return $query;
    }

}
