<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Portfolio_Portfolio extends Mycontroller {

    public $template = 'portfolio/v_base';
    
    public function action_index(){
        $this->response->body('portfolio/v_base');
    }

} // End Portfolio_Base
