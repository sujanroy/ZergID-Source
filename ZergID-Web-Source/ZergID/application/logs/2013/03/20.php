<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-20 00:24:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-20 00:24:51 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\wamp\www\zergid\application\classes\Controller\template\home.php(43): Kohana_Controller_Template->after()
#5 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_Home->after()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#11 {main} in D:\wamp\www\zergid\application\views\template\home.php:16