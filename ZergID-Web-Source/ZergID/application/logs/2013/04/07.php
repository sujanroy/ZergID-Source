<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-07 23:15:39 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-07 23:15:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-07 23:15:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Profileimage ~ APPPATH\classes\Controller\User.php [ 50 ] in D:\wamp\www\zergid\application\classes\Controller\User.php:50
2013-04-07 23:15:42 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\User.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 50, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_User->action_profileimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\User.php:50
2013-04-07 23:42:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Profileimage ~ APPPATH\classes\Controller\User.php [ 50 ] in D:\wamp\www\zergid\application\classes\Controller\User.php:50
2013-04-07 23:42:33 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\User.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 50, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_User->action_profileimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\User.php:50