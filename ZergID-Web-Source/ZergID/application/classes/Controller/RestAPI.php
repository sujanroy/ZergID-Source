<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_RestAPI extends Controller {
    
    public function action_index(){
        
        $feeds = ORM::factory('feeds')
                 ->select('zid_users.*')
                // ->where('feeds.id','=','2') 
                 ->join('zid_users', 'INNER')
                 ->on('zid_users.id','=','feeds.id')
                 ->order_by('feeds.feed_id', 'ASC')
                 ->limit(10)
                 ->find_all()->as_array();
           foreach($feeds as $feed):
               $sa[] = $feed->as_array();
            endforeach;

           $this->response->headers('Content-Type', 'application/json');
           $this->response->body(json_encode($sa));
           $this->auto_render = FALSE;
    }
    
}