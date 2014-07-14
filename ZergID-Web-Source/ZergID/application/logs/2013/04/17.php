<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-17 01:34:57 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 01:34:57 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\user.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_User->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 01:58:08 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 01:58:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 01:58:08 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 01:58:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 01:58:08 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 01:58:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 02:04:53 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 02:04:53 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\user.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_User->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 02:06:39 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 02:06:39 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\user.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_User->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 02:43:38 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 02:43:38 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\home.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 02:50:23 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 02:50:23 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\home.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 03:03:44 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 03:03:44 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\home.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 03:04:07 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 03:04:07 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\home.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 03:04:34 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 03:04:34 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\home.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 03:57:24 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 03:57:24 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\home.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 03:57:38 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 03:57:38 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\home.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 03:59:57 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 03:59:57 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\home.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 04:16:14 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:16:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:16:14 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:16:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:20:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_media' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-04-17 04:20:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 04:20:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_media' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-04-17 04:20:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 04:20:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_media' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-04-17 04:20:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 04:21:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_media' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-04-17 04:21:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-17 04:26:48 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:26:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:26:49 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:26:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:26:49 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:26:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:26:49 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:26:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:26:49 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:26:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:28:27 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:28:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:28:28 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:28:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:28:28 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:28:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:28:28 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:28:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:29:01 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:29:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:29:02 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:29:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:29:16 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:29:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:29:16 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:29:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:29:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:29:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:29:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:29:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:32:19 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:32:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 04:32:19 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 04:32:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:08:02 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:08:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:08:03 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:08:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:24 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:24 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:24 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:24 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:24 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:25 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:10:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:10:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:14:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:14:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:14:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:14:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:14:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:14:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:18:33 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:18:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:18:33 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:18:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:18:33 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:18:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:18:34 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:18:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:18:34 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:18:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:18:34 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:18:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:19:34 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:19:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:19:34 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:19:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:19:34 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:19:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:19:34 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:19:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:19:34 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:19:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:29:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: game ~ APPPATH\classes\model\guild.php [ 14 ] in D:\wamp\www\zergid\application\classes\model\guild.php:14
2013-04-17 05:29:26 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 14, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(75): Model_Guild->add_guild('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:14
2013-04-17 05:41:56 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 05:41:56 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\user.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_User->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 05:42:47 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:42:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:42:48 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:42:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:42:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:42:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:42:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:42:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:44:36 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:44:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:44:36 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:44:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:49:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:49:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:49:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:49:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:51:19 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:51:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:51:19 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:51:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:51:19 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:51:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 05:51:19 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 05:51:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 06:53:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 06:53:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 06:53:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 06:53:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 06:54:16 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 06:54:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 06:54:17 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 06:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:01 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:01 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:01 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:48:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:48:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:52 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:52 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 07:55:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 07:55:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:04:09 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:04:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:04:10 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:04:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:04:10 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:04:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:04:10 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:04:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:04:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:04:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:04:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:04:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:04:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:04:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:04:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:04:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:16:36 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:16:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:16:36 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:16:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:16:36 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:16:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:16:36 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:16:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:44:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:44:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:44:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:44:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:47:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:47:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:47:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:47:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:47:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:47:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:48:30 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:48:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:48:30 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:48:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:48:48 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:48:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:48:48 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:48:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:48:48 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:48:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:48:48 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:48:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:48:48 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:48:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:48:48 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:48:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 08:48:48 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 08:48:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 09:11:20 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 09:11:20 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\user.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_User->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-17 10:14:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:14:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:14:01 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:14:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:14:19 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:14:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:14:19 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:14:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:38:03 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:38:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:38:04 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:38:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:44:41 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:44:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:44:41 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:44:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:44:42 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:44:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:44:42 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:44:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:49:11 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:49:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:49:11 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:49:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:49:11 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:49:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:49:11 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:49:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:56:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:56:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:56:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:56:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:56:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:56:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:56:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:56:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/popu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:56:55 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:56:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:56:56 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:56:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/n...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:56:56 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:56:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 10:56:56 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-17 10:56:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-17 11:03:02 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete guild model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1432 ] in D:\wamp\www\zergid\application\classes\Controller\guild.php:98
2013-04-17 11:03:02 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\guild.php(98): Kohana_ORM->delete()
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\guild.php:98
2013-04-17 11:03:07 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete guild model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1432 ] in D:\wamp\www\zergid\application\classes\Controller\guild.php:98
2013-04-17 11:03:07 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\guild.php(98): Kohana_ORM->delete()
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\guild.php:98
2013-04-17 11:03:22 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete guild model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1432 ] in D:\wamp\www\zergid\application\classes\Controller\guild.php:98
2013-04-17 11:03:22 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\guild.php(98): Kohana_ORM->delete()
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\guild.php:98
2013-04-17 11:03:30 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete guild model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1432 ] in D:\wamp\www\zergid\application\classes\Controller\guild.php:98
2013-04-17 11:03:30 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\guild.php(98): Kohana_ORM->delete()
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\guild.php:98
2013-04-17 11:03:43 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete guild model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1432 ] in D:\wamp\www\zergid\application\classes\Controller\guild.php:98
2013-04-17 11:03:43 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\guild.php(98): Kohana_ORM->delete()
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\guild.php:98
2013-04-17 11:03:56 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete guild model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1432 ] in D:\wamp\www\zergid\application\classes\Controller\guild.php:98
2013-04-17 11:03:56 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\guild.php(98): Kohana_ORM->delete()
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\guild.php:98
2013-04-17 11:08:22 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete characterdetail model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1432 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:115
2013-04-17 11:08:22 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(115): Kohana_ORM->delete()
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:115
2013-04-17 11:08:27 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete characterdetail model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1432 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:115
2013-04-17 11:08:27 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(115): Kohana_ORM->delete()
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:115