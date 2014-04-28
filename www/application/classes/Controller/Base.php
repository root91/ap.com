<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Mycontroller {

    public $template = 'basicwiev';
    
    public function action_index(){
        $this->response->body('hello, world!');
    }

} // End Welcome
