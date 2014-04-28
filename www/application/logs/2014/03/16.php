<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-16 23:29:36 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\ap.com\www\system\classes\Kohana\View.php:137
2014-03-16 23:29:36 --- DEBUG: #0 Z:\home\ap.com\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 Z:\home\ap.com\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 Z:\home\ap.com\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 Z:\home\ap.com\www\application\classes\mycontroller.php(6): Kohana_Controller_Template->before()
#4 Z:\home\ap.com\www\system\classes\Kohana\Controller.php(69): Mycontroller->before()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\ap.com\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 Z:\home\ap.com\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\ap.com\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\ap.com\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\ap.com\www\system\classes\Kohana\View.php:137
2014-03-16 23:30:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Breadcrumbs' not found ~ APPPATH\classes\mycontroller.php [ 9 ] in file:line
2014-03-16 23:30:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line