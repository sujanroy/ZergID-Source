<?php defined('SYSPATH') or die('No direct script access.');

class Model_EventMembers extends ORM  {
    protected $_table_name = 'zid_event_members';
    protected $_primary_key = 'event_member_id';
    protected $_belongs_to = array(
                               'member' => array('model' => 'guildroles', 'foreign_key' => 'guild_role_id'));
    
    
    public function get_event_members($event_id, $accept) {
        # Get guild event members
         $event_members = ORM::factory('EventMembers')
                        ->select('zid_character_details.character_detail_id','zid_character_details.character_name', 'zid_guild_members.guild_member_id', 'zid_guild_members.guild_role_id')
                        ->join('zid_character_details', 'INNER')
                        ->on('eventmembers.character_detail_id', '=', 'zid_character_details.character_detail_id')
                        ->join('zid_guild_members', 'INNER')
                        ->on('eventmembers.character_detail_id', '=', 'zid_guild_members.character_detail_id')
                        ->where('eventmembers.event_id', '=', $event_id)
                        ->and_where('eventmembers.is_rsvp_accepted', '=', $accept)
                        ->find_all();
         return $event_members;
    }
    
    public function get_character_event_members($event_id, $accept) {
         # Get character event members
         $event_members = ORM::factory('EventMembers')
                        ->select('zid_character_details.character_detail_id','zid_character_details.character_name')
                        ->join('zid_character_details', 'INNER')
                        ->on('eventmembers.character_detail_id', '=', 'zid_character_details.character_detail_id')
                        ->where('eventmembers.event_id', '=', $event_id)
                        ->and_where('eventmembers.is_rsvp_accepted', '=', $accept)
                        ->find_all();
         return $event_members;
    }
    
    public function get_guild_play_style_count($event_id, $is_rsvp_accepted) {
       # get play style count
       $play_style = ORM::factory('EventMembers')->where('event_id', '=', $event_id)->and_where('is_rsvp_accepted', '=', $is_rsvp_accepted)->count_all();
       return $play_style;        
    }
    
    public function get_event_member_by_event_id($event_id, $user_id) {
        # Get event member by event id
       $query = ORM::factory('EventMembers')->where('event_id', '=', $event_id)->and_where('user_id', '=', $user_id)->find();
       return $query;        
    }
    
    public function get_event_member_character($char_id) {
        # Get event member by character
        $query = ORM::factory('EventMembers')->where('character_detail_id', '=', $char_id)->find_all();
        return $query;
    }

    public function get_guild_event_members($event_id) {
        # Get event members by event id
        $query = ORM::factory('EventMembers')->where('event_id', '=', $event_id)->find_all();
        return $query;
    }
    
    public function get_event_member($member_id) {
        # Get event member by member id
        $query = ORM::factory('EventMembers')->where('event_member_id', '=', $member_id)->find();
        return $query;
    }
    
    public function unapprove_event_member($member_id) {
        # Unapprove event member
        $query =  $query = DB::update($this->_table_name)->set(array('is_rsvp_accepted' => 0))->where('event_member_id', '=', $member_id)->execute();
        return $query;
    }
    
    public function delete_event_members($event_id) {
        # Delete all event members
        $query = DB::delete($this->_table_name)->where('event_id', '=', $event_id)->execute();
        return $query;
    }
}
