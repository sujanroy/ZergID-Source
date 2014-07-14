<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-19 00:20:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: character ~ APPPATH\views\user\other_left_bar.php [ 39 ] in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 00:20:21 --- DEBUG: #0 D:\wamp\www\zergid\application\views\user\other_left_bar.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 39, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\user.php(90): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 00:20:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: character ~ APPPATH\views\user\other_left_bar.php [ 39 ] in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 00:20:28 --- DEBUG: #0 D:\wamp\www\zergid\application\views\user\other_left_bar.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 39, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\user.php(90): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 00:27:26 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:27:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:27:26 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:27:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:27:38 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:27:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:27:38 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:27:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:27:59 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:27:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:27:59 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:27:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:28:57 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:28:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:28:57 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:28:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:33:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: character ~ APPPATH\views\user\other_left_bar.php [ 39 ] in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 00:33:31 --- DEBUG: #0 D:\wamp\www\zergid\application\views\user\other_left_bar.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 39, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\user.php(90): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 00:36:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:36:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:36:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:36:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:55:09 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:55:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:55:09 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:55:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:55:09 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:55:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 00:55:09 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 00:55:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:20:28 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:20:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:20:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:20:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:20:38 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:20:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:20:38 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:20:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:23:44 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:23:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:23:44 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:23:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:23:44 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:23:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:23:44 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:23:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:23:46 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:23:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:23:46 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:23:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:23:46 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:23:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:27:28 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:27:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:27:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:27:44 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:27:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:27:44 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:27:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:27:44 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:27:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:30:28 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:30:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:30:28 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:30:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:30:28 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:30:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:30:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:30:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:32:47 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 05:32:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 05:32:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: character ~ APPPATH\views\user\other_left_bar.php [ 39 ] in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 05:32:56 --- DEBUG: #0 D:\wamp\www\zergid\application\views\user\other_left_bar.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 39, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\user.php(90): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 05:33:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: character ~ APPPATH\views\user\other_left_bar.php [ 39 ] in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 05:33:13 --- DEBUG: #0 D:\wamp\www\zergid\application\views\user\other_left_bar.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 39, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\user.php(90): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 05:34:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: character ~ APPPATH\views\user\other_left_bar.php [ 39 ] in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 05:34:07 --- DEBUG: #0 D:\wamp\www\zergid\application\views\user\other_left_bar.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 39, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\user.php(90): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 06:18:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: character ~ APPPATH\views\user\other_left_bar.php [ 39 ] in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 06:18:09 --- DEBUG: #0 D:\wamp\www\zergid\application\views\user\other_left_bar.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 39, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\user.php(90): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 06:22:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: character ~ APPPATH\views\user\other_left_bar.php [ 39 ] in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 06:22:40 --- DEBUG: #0 D:\wamp\www\zergid\application\views\user\other_left_bar.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 39, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\user.php(90): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\user\other_left_bar.php:39
2013-04-19 06:30:50 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 06:30:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 06:31:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 06:31:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 06:31:06 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 06:31:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 06:33:07 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 06:33:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 06:33:07 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 06:33:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'arrow1.png', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-19 06:33:28 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-19 06:33:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :