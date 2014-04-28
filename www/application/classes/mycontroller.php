<?php defined('SYSPATH') or die('No direct script access.');

class Mycontroller extends Controller_Template {

    public function before(){
        return parent::before();
    }
    public function after(){
        $conf = Kohana::$config->load('titles');
        
        if(!isset($this->template->title)){
            if(key_exists($this->request->controller(), $conf)){
                $this->template->title = $conf[$this->request->controller()]['title'].' - ap web studio';
                $this->template->desc = $conf[$this->request->controller()]['desc'].' - ap web studio';
            }else{
                $this->template->title = 'AP - веб студия по созданию сайтов|заказать сайт';
                $this->template->desc = 'Не знаете с чего начать Бизнес? Сделайте первый шаг с веб студией AP - мы можем создать успешный сайт под ключ';
            }
        }
        return parent::after();
    }
    
} 