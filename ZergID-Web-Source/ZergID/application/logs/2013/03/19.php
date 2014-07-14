<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-19 05:30:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 05:30:40 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 05:32:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Utils' not found ~ APPPATH\classes\Controller\Home.php [ 69 ] in :
2013-03-19 05:32:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 05:33:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: returned ~ APPPATH\classes\Controller\Home.php [ 71 ] in D:\wamp\www\zergid\application\classes\Controller\Home.php:71
2013-03-19 05:33:48 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\Home.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 71, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_validate()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\Home.php:71
2013-03-19 05:34:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: returned ~ APPPATH\classes\Controller\Home.php [ 71 ] in D:\wamp\www\zergid\application\classes\Controller\Home.php:71
2013-03-19 05:34:19 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\Home.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 71, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_validate()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\Home.php:71
2013-03-19 05:36:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: returned ~ APPPATH\classes\Controller\Home.php [ 71 ] in D:\wamp\www\zergid\application\classes\Controller\Home.php:71
2013-03-19 05:36:20 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\Home.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 71, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_validate()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\Home.php:71
2013-03-19 05:41:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: returned ~ APPPATH\classes\Controller\Home.php [ 71 ] in D:\wamp\www\zergid\application\classes\Controller\Home.php:71
2013-03-19 05:41:39 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\Home.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 71, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_validate()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\Home.php:71
2013-03-19 05:47:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: links ~ APPPATH\classes\Controller\Home.php [ 65 ] in D:\wamp\www\zergid\application\classes\Controller\Home.php:65
2013-03-19 05:47:31 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\Home.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 65, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_validate()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\Home.php:65
2013-03-19 05:48:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: links ~ APPPATH\classes\Controller\Home.php [ 65 ] in D:\wamp\www\zergid\application\classes\Controller\Home.php:65
2013-03-19 05:48:25 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\Home.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 65, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_validate()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\Home.php:65
2013-03-19 05:49:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: links ~ APPPATH\classes\Controller\Home.php [ 65 ] in D:\wamp\www\zergid\application\classes\Controller\Home.php:65
2013-03-19 05:49:04 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\Home.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 65, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_validate()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\Home.php:65
2013-03-19 05:49:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: links ~ APPPATH\classes\Controller\Home.php [ 65 ] in D:\wamp\www\zergid\application\classes\Controller\Home.php:65
2013-03-19 05:49:17 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\Home.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 65, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_validate()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\Home.php:65
2013-03-19 05:49:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Username ~ APPPATH\classes\Controller\Home.php [ 65 ] in D:\wamp\www\zergid\application\classes\Controller\Home.php:65
2013-03-19 05:49:44 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\Home.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 65, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_validate()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\Home.php:65
2013-03-19 05:49:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 05:49:59 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 05:50:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 05:50:47 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 05:51:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 05:51:39 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 07:14:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 07:14:29 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 07:15:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 07:15:11 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 07:15:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 07:15:15 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 07:15:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 07:15:22 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 07:15:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 07:15:55 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 07:16:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 07:16:10 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 07:16:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 07:16:31 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 07:16:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 07:16:50 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 07:17:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 07:17:06 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 07:26:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\template\home.php [ 16 ] in D:\wamp\www\zergid\application\views\template\home.php:16
2013-03-19 07:26:44 --- DEBUG: #0 D:\wamp\www\zergid\application\views\template\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 16, Array)
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
2013-03-19 07:56:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Home.php [ 66 ] in D:\wamp\www\zergid\application\classes\Controller\Home.php:66
2013-03-19 07:56:35 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\Home.php(66): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 66, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_validate()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\Home.php:66
2013-03-19 07:57:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Home.php [ 66 ] in D:\wamp\www\zergid\application\classes\Controller\Home.php:66
2013-03-19 07:57:29 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\Home.php(66): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 66, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_validate()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\Home.php:66
2013-03-19 08:02:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::post() ~ APPPATH\classes\Controller\Home.php [ 66 ] in :
2013-03-19 08:02:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 08:04:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _post ~ APPPATH\classes\Controller\Home.php [ 66 ] in D:\wamp\www\zergid\application\classes\Controller\Home.php:66
2013-03-19 08:04:21 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\Home.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 66, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_validate()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\Home.php:66
2013-03-19 08:54:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in :
2013-03-19 08:54:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 09:33:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function bloginfo() ~ APPPATH\views\home\signup.php [ 39 ] in :
2013-03-19 09:33:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 10:39:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function bloginfo() ~ APPPATH\views\home\signup.php [ 41 ] in :
2013-03-19 10:39:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :