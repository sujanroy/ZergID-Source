<?php defined('SYSPATH') or die('No direct script access.');

class Model_GuildMembers extends ORM  {
    protected $_table_name = 'zid_guild_members';
    protected $_primary_key = 'guild_member_id';
   
     public function add_member($userid, $data) {
        # add new member in guild
        $data['guild_role'] = '3';
        $query = "CALL add_members('".$data['guild_id']."', '".$userid."','".$data['character']."','".$data['guild_role']."','".$data['playstyle']."','".addslashes($data['summary'])."','".$data['is_speaker_available']."','".$data['is_headset_available']."','".$data['is_voicechat_available']."');";
        $insert_id = DB::query(Database::INSERT, $query)->execute();
        return $insert_id;
    }

    public function get_member($char_id) {
        # Get member by character id
        $query = ORM::factory('GuildMembers')->where('character_detail_id', '=', $char_id)->find();
        return $query;
    }
    
    public function remove_guild_member($char_id) {
        # To delete member
        $query = DB::delete($this->_table_name)->where('character_detail_id', '=', $char_id)->execute();
        return $query;
    }
    
    public function get_member_role($user_id, $guild_id) {
        # Get guild member role
        $query = ORM::factory('GuildMembers')->where('guild_id', '=', $guild_id)->and_where('user_id', '=', $user_id) ->and_where('is_accepted', '=', 1)->find();
        return $query;
    }
    
    public function delete_guild_members($guild_id) {
        # Delete guild members by guild id
        $query = DB::delete($this->_table_name)->where('guild_id', '=', $guild_id)->execute();
        return $query;
    }
    
    public function get_guild_all_members($guild_id) {
        # Get guild all members
        $query =  $guild_members = ORM::factory('GuildMembers')
                   ->select('zid_character_details.character_detail_id', 'zid_character_details.character_icon', 'zid_character_details.character_name', 'zid_guild_roles.role_name', 'zid_guild_roles.id')
                   ->join('zid_character_details', 'INNER')
                   ->on('zid_character_details.character_detail_id', '=', 'guildmembers.character_detail_id')
                   ->join('zid_guild_roles', 'INNER')
                   ->on('zid_guild_roles.id', '=', 'guildmembers.guild_role_id')
                   ->where('guildmembers.guild_id', '=', $guild_id)
                   ->where('guildmembers.is_accepted', '=', '1')
                   ->find_all();
        return $query;
    }
    
    public function get_guild_member($member_id) {
        # Get guild member
        $query = ORM::factory('GuildMembers')->where('guild_member_id', '=', $member_id)->find();
        return $query;
    }
    
    public function update_guild_officer($guild_id, $role_id) {
        # Update guild officer
        $query = DB::update($this->_table_name)->set(array('guild_role_id' => '2'))->where('guild_role_id', '=', $role_id)->and_where('guild_id', '=', $guild_id)->execute();
        return $query;
    }
    
    public function update_guild_member($member_id, $role_id) {
        # Update guild member
        $query = DB::update($this->_table_name)->set(array('guild_role_id' => $role_id))->where('guild_member_id', '=', $member_id)->execute();
        return $query;
    }
    
    public function get_guild_members($guild_id) {
        # Get guild members by guild id
        $query = ORM::factory('GuildMembers')->where('guild_id', '=', $guild_id)->and_where('is_accepted', '=', 1)->find_all();
        return $query;
    }
    
    public function get_guild_officers($guild_id, $role_id) {
        # Get guild officers or members
        $query =  ORM::factory('GuildMembers')->where('guild_id', '=', $guild_id)->and_where('guild_role_id', '!=', $role_id)->and_where('is_accepted', '=', 1)->find_all();
        return $query;
    }
    
    public function get_character_info($user_id, $guild_id) {
        # Get character info
        $query = ORM::factory('GuildMembers')->select('character_detail_id')->where('guild_id', '=', $guild_id)->and_where('user_id', '=', $user_id)->find();
        return $query;
    }
}
