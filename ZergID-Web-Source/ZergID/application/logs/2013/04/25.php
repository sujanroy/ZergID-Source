<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-25 03:27:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-25 03:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-25 08:29:36 --- CRITICAL: Kohana_Exception [ 0 ]: The rolename property does not exist in the Model_GuildMembers class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:600
2013-04-25 08:29:36 --- DEBUG: #0 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('rolename')
#1 D:\wamp\www\zergid\application\views\guild\members.php(16): Kohana_ORM->__get('rolename')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#4 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\wamp\www\zergid\application\views\template\user.php(96): Kohana_View->__toString()
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#7 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#8 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#10 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#16 {main} in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:600