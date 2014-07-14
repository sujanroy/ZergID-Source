<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-15 00:18:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_home' not found ~ APPPATH/classes/Controller/Home.php [ 5 ] in :
2013-05-15 00:18:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 00:23:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_home' not found ~ APPPATH/classes/Controller/Home.php [ 5 ] in :
2013-05-15 00:23:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 00:23:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_home' not found ~ APPPATH/classes/Controller/Home.php [ 5 ] in :
2013-05-15 00:23:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 00:30:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_home' not found ~ APPPATH/classes/Controller/Home.php [ 5 ] in :
2013-05-15 00:30:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 00:30:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_home' not found ~ APPPATH/classes/Controller/Home.php [ 5 ] in :
2013-05-15 00:30:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 00:30:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_home' not found ~ APPPATH/classes/Controller/Home.php [ 5 ] in :
2013-05-15 00:30:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 00:31:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_home' not found ~ APPPATH/classes/Controller/Home.php [ 5 ] in :
2013-05-15 00:31:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 00:31:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_home' not found ~ APPPATH/classes/Controller/Home.php [ 5 ] in :
2013-05-15 00:31:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 00:36:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_home' not found ~ APPPATH/classes/Controller/Home.php [ 5 ] in :
2013-05-15 00:36:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 00:39:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Home' not found ~ APPPATH/classes/Controller/Home.php [ 5 ] in :
2013-05-15 00:39:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 00:44:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Home' not found ~ APPPATH/classes/Controller/Home.php [ 5 ] in :
2013-05-15 00:44:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 00:44:38 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 00:44:38 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 00:46:08 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 00:46:08 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 00:48:49 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 00:48:49 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 00:51:07 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 00:51:07 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 00:53:35 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 00:53:35 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 01:21:13 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 01:21:13 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 01:29:05 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 01:29:05 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 01:32:09 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 01:32:09 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 02:44:18 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 02:44:18 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 02:44:22 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 02:44:22 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 03:50:06 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 03:50:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 03:50:06 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 03:50:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 03:50:06 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 03:50:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 03:50:06 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 03:50:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 03:51:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 03:51:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 03:51:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 03:51:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 03:51:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 03:51:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 03:52:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 03:52:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 03:52:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 03:52:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 03:52:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 03:52:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 03:52:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 03:52:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 03:52:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 03:52:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 03:52:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 03:52:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 03:52:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 03:52:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:09:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:09:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:09:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:09:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:09:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:09:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:09:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:09:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:09:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:09:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:09:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:09:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:10:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:10:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:11:18 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:11:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:11:18 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:11:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:11:18 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:11:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:11:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:11:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:11:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:11:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:11:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:11:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:12:02 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:12:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:12:02 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:12:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:12:02 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:12:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:12:02 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:12:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:13:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:13:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:13:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:13:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:13:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:13:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:13:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:13:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:15:06 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:15:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:15:06 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:15:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:15:06 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:15:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:15:06 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:15:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:16:14 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:16:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:16:14 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:16:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:16:14 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:16:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:16:14 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:16:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:16:38 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:16:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:16:38 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:16:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:16:38 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:16:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:16:38 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:16:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:03 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:17:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:03 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:17:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:03 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:17:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:03 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:17:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:15 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:17:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:15 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:17:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:15 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:17:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:15 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:17:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:27 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:17:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:27 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:17:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:27 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:17:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:27 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:17:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:17:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:17:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:17:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:17:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:18:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:18:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:18:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:18:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:18:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:18:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:24:12 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:24:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:24:12 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:24:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:24:12 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:24:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:24:12 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:24:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:24:28 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:24:28 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/User.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_User->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:27:29 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:27:29 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/User.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_User->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:27:49 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:27:49 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:27:59 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:27:59 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:31:05 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:31:05 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:31:07 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:31:07 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:31:13 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:31:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:31:13 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:31:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:31:13 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:31:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:31:13 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:31:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:31:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:31:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:31:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:31:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:31:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:31:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:31:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:31:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:31:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:31:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:31:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:31:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:32:18 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:32:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:32:18 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:32:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:32:18 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:32:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:32:18 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:32:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:34:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:34:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:34:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:34:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:34:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:34:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:34:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:34:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:34:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:34:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:34:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_User' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:34:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:35:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:35:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:35:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:35:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:35:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:35:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:35:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 04:35:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 04:36:08 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:36:08 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/User.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_User->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:39:31 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:39:31 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/User.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_User->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:39:35 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:39:35 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/User.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_User->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 04:43:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Favorites' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:43:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:44:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_CharacterDetail' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 04:44:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:45:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/user/profile.php [ 25 ] in :
2013-05-15 04:45:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:46:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/user/profile.php [ 25 ] in :
2013-05-15 04:46:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:46:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/user/profile.php [ 25 ] in :
2013-05-15 04:46:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:46:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/user/profile.php [ 25 ] in :
2013-05-15 04:46:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:46:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: server ~ APPPATH/views/guild/add.php [ 66 ] in /var/www/html/zergid/application/views/guild/add.php:66
2013-05-15 04:46:44 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/add.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 66, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/add.php:66
2013-05-15 04:46:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: server ~ APPPATH/views/guild/add.php [ 66 ] in /var/www/html/zergid/application/views/guild/add.php:66
2013-05-15 04:46:49 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/add.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 66, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/add.php:66
2013-05-15 04:47:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/user/profile.php [ 25 ] in :
2013-05-15 04:47:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:52:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/user/profile.php [ 125 ] in :
2013-05-15 04:52:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 04:53:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/views/user/profile.php [ 23 ] in :
2013-05-15 04:53:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:02:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: server ~ APPPATH/views/guild/add.php [ 66 ] in /var/www/html/zergid/application/views/guild/add.php:66
2013-05-15 05:02:49 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/add.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 66, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/add.php:66
2013-05-15 05:14:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: server ~ APPPATH/views/character/add.php [ 89 ] in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:14:06 --- DEBUG: #0 /var/www/html/zergid/application/views/character/add.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 89, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:15:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: server ~ APPPATH/views/character/add.php [ 89 ] in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:15:37 --- DEBUG: #0 /var/www/html/zergid/application/views/character/add.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 89, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:15:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: server ~ APPPATH/views/character/add.php [ 89 ] in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:15:47 --- DEBUG: #0 /var/www/html/zergid/application/views/character/add.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 89, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:20:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: server ~ APPPATH/views/character/add.php [ 89 ] in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:20:40 --- DEBUG: #0 /var/www/html/zergid/application/views/character/add.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 89, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:23:42 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in /var/www/html/zergid/application/views/character/add.php on line 93 and defined ~ SYSPATH/classes/Kohana/Form.php [ 252 ] in /var/www/html/zergid/system/classes/Kohana/Form.php:252
2013-05-15 05:23:42 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/html/z...', 252, Array)
#1 /var/www/html/zergid/application/views/character/add.php(93): Kohana_Form::select('server', 'No server avail...', '', Array)
#2 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#3 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#4 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#6 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#7 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#8 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#10 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#13 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/html/zergid/system/classes/Kohana/Form.php:252
2013-05-15 05:24:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: server ~ APPPATH/views/character/add.php [ 89 ] in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:24:03 --- DEBUG: #0 /var/www/html/zergid/application/views/character/add.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 89, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:25:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: serverList ~ APPPATH/views/character/add.php [ 88 ] in /var/www/html/zergid/application/views/character/add.php:88
2013-05-15 05:25:14 --- DEBUG: #0 /var/www/html/zergid/application/views/character/add.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 88, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/character/add.php:88
2013-05-15 05:25:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: server ~ APPPATH/views/character/add.php [ 88 ] in /var/www/html/zergid/application/views/character/add.php:88
2013-05-15 05:25:36 --- DEBUG: #0 /var/www/html/zergid/application/views/character/add.php(88): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 88, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/character/add.php:88
2013-05-15 05:25:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: server ~ APPPATH/views/character/add.php [ 91 ] in /var/www/html/zergid/application/views/character/add.php:91
2013-05-15 05:25:52 --- DEBUG: #0 /var/www/html/zergid/application/views/character/add.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 91, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/character/add.php:91
2013-05-15 05:26:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: serverList ~ APPPATH/views/character/add.php [ 93 ] in /var/www/html/zergid/application/views/character/add.php:93
2013-05-15 05:26:06 --- DEBUG: #0 /var/www/html/zergid/application/views/character/add.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 93, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/character/add.php:93
2013-05-15 05:26:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: serverList ~ APPPATH/views/character/add.php [ 93 ] in /var/www/html/zergid/application/views/character/add.php:93
2013-05-15 05:26:28 --- DEBUG: #0 /var/www/html/zergid/application/views/character/add.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 93, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/character/add.php:93
2013-05-15 05:26:58 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in /var/www/html/zergid/application/views/character/add.php on line 93 and defined ~ SYSPATH/classes/Kohana/Form.php [ 252 ] in /var/www/html/zergid/system/classes/Kohana/Form.php:252
2013-05-15 05:26:58 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/var/www/html/z...', 252, Array)
#1 /var/www/html/zergid/application/views/character/add.php(93): Kohana_Form::select('server', 'dd', '', Array)
#2 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#3 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#4 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#6 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#7 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#8 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#10 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#13 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#16 {main} in /var/www/html/zergid/system/classes/Kohana/Form.php:252
2013-05-15 05:28:24 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 05:28:24 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/User.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_User->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 05:28:30 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 05:28:30 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 05:28:33 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 05:28:33 --- DEBUG: #0 /var/www/html/zergid/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/html/zergid/modules/database/classes/Kohana/Session/Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('database')
#4 /var/www/html/zergid/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 /var/www/html/zergid/application/classes/Controller/Template/Home.php(14): Kohana_Auth::instance()
#6 /var/www/html/zergid/system/classes/Kohana/Controller.php(69): Controller_Template_Home->before()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#12 {main} in /var/www/html/zergid/system/classes/Kohana/Session.php:125
2013-05-15 05:29:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: server ~ APPPATH/views/character/add.php [ 89 ] in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:29:03 --- DEBUG: #0 /var/www/html/zergid/application/views/character/add.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 89, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:29:14 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:29:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:29:15 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:29:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:29:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_GuildMembers' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:29:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:29:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: server ~ APPPATH/views/character/add.php [ 89 ] in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:29:33 --- DEBUG: #0 /var/www/html/zergid/application/views/character/add.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 89, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/character/add.php:89
2013-05-15 05:34:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:34:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:34:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:34:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:36:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:36:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:36:57 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('2',0,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 05:36:57 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('2', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 05:37:08 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('2',0,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 05:37:08 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('2', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 05:37:20 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('2',0,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 05:37:20 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('2', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 05:38:28 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:38:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:38:28 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:38:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:38:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:38:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:38:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:38:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:41:34 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:41:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:41:34 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:41:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:41:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:41:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:41:41 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:41:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:42:14 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('2',0,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 05:42:14 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('2', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 05:43:26 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:43:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:43:26 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:43:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:43:33 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:43:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:43:33 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:43:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:43:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:43:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:43:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:43:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:43:41 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:43:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:43:41 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:43:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:43:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:43:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:43:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:43:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:44:44 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:44:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:44:44 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:44:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:44:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:44:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:44:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:44:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:44:57 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:44:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:44:57 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:44:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:45:13 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:45:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:45:13 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:45:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:45:14 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:45:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:45:14 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:45:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:45:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_GuildMembers' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 05:45:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 05:45:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:45:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:45:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 05:45:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 05:45:45 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('2',1,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 05:45:45 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('2', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 05:45:50 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('2',1,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 05:45:50 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('2', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 06:17:31 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('2',1,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 06:17:31 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('2', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 06:18:20 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:18:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:18:20 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:18:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:18:25 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:18:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:18:26 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:18:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:18:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:18:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:18:41 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:18:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:20:54 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:20:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:20:54 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:20:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:20:59 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('2',1,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 06:20:59 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('2', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 06:22:59 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:22:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:22:59 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:22:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:23:07 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:23:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:23:07 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:23:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/grid/js/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:23:49 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:23:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:23:49 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:23:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:23:49 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:23:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:23:49 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:23:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:24:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:24:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:24:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:24:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:24:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:24:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:24:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:24:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:31:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:31:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:31:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:31:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:31:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:31:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:31:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:31:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:31:45 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:31:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:31:45 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:31:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:31:45 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:31:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:31:45 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:31:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:35:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:35:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:36:41 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:36:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:39:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:39:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:39:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:39:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:39:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:39:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:39:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:39:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:42:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:42:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:42:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:42:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:42:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:42:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:42:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:42:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:43:13 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:43:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:43:13 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:43:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:43:13 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:43:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:43:13 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:43:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:43:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:43:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:43:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:43:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:43:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:43:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:43:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:43:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/l...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:53:43 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:53:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:53:43 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:53:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:53:44 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:53:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:53:44 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:53:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:54:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:54:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:54:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:54:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:54:17 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:54:17 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:54:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:56:11 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:56:11 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:56:11 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:56:11 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 06:56:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 06:56:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:56:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 06:56:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_GuildMembers' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 06:56:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:05:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:05:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:05:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:05:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:05:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:05:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:05:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:05:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:06:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:06:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:06:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:06:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:06:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:06:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:06:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:06:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:06:37 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('1',1,'1','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:06:37 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('1', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:07:20 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('1',1,'1','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:07:20 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('1', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:07:21 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('1',1,'1','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:07:21 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('1', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:07:23 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:07:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:07:23 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:07:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:07:23 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:07:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:07:23 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:07:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:10:15 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:10:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:10:15 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:10:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:10:15 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:10:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:10:15 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:10:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:10:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:10:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:10:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:10:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:10:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:10:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:10:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:10:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:11:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:11:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:11:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:11:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:11:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:11:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:11:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:11:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:11:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:11:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:11:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:11:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:11:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:11:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:11:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:11:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:12:07 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('1',1,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:12:07 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('1', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:12:09 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('1',1,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:12:09 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('1', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:12:09 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('1',1,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:12:09 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('1', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:12:09 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('1',1,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:12:09 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('1', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:13:07 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:13:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:13:07 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:13:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:13:07 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:13:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:13:07 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:13:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:13:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:13:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:13:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:13:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:13:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:13:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:13:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:13:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:14:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:14:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:14:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:14:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:14:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:14:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:14:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 07:14:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 07:14:50 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('1',1,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:14:50 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(58): Model_CharacterDetail->add_character('1', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 07:34:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:34:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:36:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_guild' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:36:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:39:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_guild' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:39:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:41:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_guild' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:41:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:42:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_guild' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:42:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:43:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_guild' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:43:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:43:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_guild' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:43:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:44:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:44:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 07:44:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 07:44:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:22:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 08:22:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:23:24 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:23:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:23:24 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:23:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:23:25 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:23:25 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:24:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_guild' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 08:24:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 08:35:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:35:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:35:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:35:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:35:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:35:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:35:29 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:35:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:35:35 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('1',1,'2','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 08:35:35 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('1', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 08:35:48 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:35:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:35:48 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:35:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:35:48 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:35:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:35:48 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:35:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:49:55 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:49:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:49:55 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:49:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:49:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:49:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:49:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:49:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:50:16 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('1',1,'1','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 08:50:16 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('1', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 08:55:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:55:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:55:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:55:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:55:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:55:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:55:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 08:55:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 08:55:59 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('1',1,'1','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 08:55:59 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('1', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 09:02:59 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_character_details`, CONSTRAINT `FK_zid_character_details_to_zid_class?class_id?` FOREIGN KEY (`class_id`) REFERENCES `zid_class` (`class_id`)) [ CALL add_character('1',1,'1','1', '0', '0', '0', '0', '0', 'Char1', '0','0','0','','','0'); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 09:02:59 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(19): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Character.php(62): Model_CharacterDetail->add_character('1', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 09:06:41 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:06:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:06:41 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:06:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:06:41 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:06:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:06:41 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:06:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:06:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:06:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:06:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:06:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:06:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:06:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:06:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:06:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:07:28 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:07:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:07:28 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:07:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:07:28 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:07:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:07:28 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:07:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:07:49 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:07:49 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:07:49 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:07:49 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:08:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:08:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:08:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:08:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:08:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:08:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:08:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:08:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:08:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:08:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:08:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:08:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:08:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:08:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:09:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:09:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:12:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:12:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:13:08 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:13:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:13:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:13:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:15:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:15:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:15:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:15:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:15:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:15:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:16:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:16:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:18:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:18:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:19:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:19:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:19:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:19:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:19:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:19:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:19:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:21:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:21:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:21:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Professions' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:21:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:21:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:21:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:21:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:21:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:21:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:21:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:21:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:21:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:22:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_character' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:22:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:22:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:22:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:22:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:22:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:22:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:22:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:22:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:22:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:23:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:23:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:23:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:23:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:23:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:23:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:23:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:23:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:23:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Character' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:23:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:25:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:25:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:25:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:25:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:26:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:26:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:28:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:28:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:29:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:29:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:29:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/user/profile.php [ 33 ] in /var/www/html/zergid/application/views/user/profile.php:33
2013-05-15 09:29:38 --- DEBUG: #0 /var/www/html/zergid/application/views/user/profile.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 33, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/user/profile.php:33
2013-05-15 09:31:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/user/profile.php [ 33 ] in /var/www/html/zergid/application/views/user/profile.php:33
2013-05-15 09:31:46 --- DEBUG: #0 /var/www/html/zergid/application/views/user/profile.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 33, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/user/profile.php:33
2013-05-15 09:32:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:32:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:33:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:33:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:33:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:33:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:34:19 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:34:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:34:19 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:34:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:34:19 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:34:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:34:19 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:34:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:34:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:34:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:36:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:36:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:37:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_profile' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:37:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:38:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_profile' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:38:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:39:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_profile' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:40:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_profile' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:40:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:43:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:43:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:43:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:43:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:43:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:43:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 09:43:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 09:45:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:45:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:46:17 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`zergid`.`zid_guild_members`, CONSTRAINT `FK_zid_guild_members_zid_guild_role?guild_role_id?` FOREIGN KEY (`guild_role_id`) REFERENCES `zid_guild_roles` (`guild_role_id`)) [ INSERT INTO `zid_guild_members` (`guild_id`, `user_id`, `character_detail_id`, `guild_role_id`, `is_accepted`, `created_date`) VALUES ('1', '1', '21', '1', '1', '2013-05-15 09:46:17') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 09:46:17 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `zi...', false, Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1322): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1419): Kohana_ORM->create(NULL)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(118): Kohana_ORM->save()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 09:56:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:56:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:56:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:56:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 09:56:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 09:56:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:00:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:00:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:05:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:05:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:06:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:06:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:07:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:07:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:10:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:10:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:11:37 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/guild/left_bar.php [ 1 ] in /var/www/html/zergid/application/views/guild/left_bar.php:1
2013-05-15 10:11:37 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/left_bar.php(1): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(91): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/left_bar.php:1
2013-05-15 10:12:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:12:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:12:45 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/guild/left_bar.php [ 1 ] in /var/www/html/zergid/application/views/guild/left_bar.php:1
2013-05-15 10:12:45 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/left_bar.php(1): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(91): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/left_bar.php:1
2013-05-15 10:14:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: guild ~ APPPATH/views/guild/left_bar.php [ 1 ] in /var/www/html/zergid/application/views/guild/left_bar.php:1
2013-05-15 10:14:15 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/left_bar.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(91): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/left_bar.php:1
2013-05-15 10:14:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:14:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:15:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$guild_id ~ APPPATH/views/guild/left_bar.php [ 1 ] in /var/www/html/zergid/application/views/guild/left_bar.php:1
2013-05-15 10:15:25 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/left_bar.php(1): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(91): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/left_bar.php:1
2013-05-15 10:16:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:16:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:21:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:21:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:21:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:21:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:22:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:22:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:22:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:22:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:24:05 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/guild/left_bar.php [ 1 ] in /var/www/html/zergid/application/views/guild/left_bar.php:1
2013-05-15 10:24:05 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/left_bar.php(1): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(91): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/left_bar.php:1
2013-05-15 10:26:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:26:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:26:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:26:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:27:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:27:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:27:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:27:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:30:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:30:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:32:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:32:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:32:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:32:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:32:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_server' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:32:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:38:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:38:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:39:02 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:39:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:39:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 10:39:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 10:39:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 10:39:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 10:39:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 10:39:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 10:39:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 10:39:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 10:40:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:40:19 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:43:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:43:50 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:44:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:44:54 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:46:23 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:46:23 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:48:15 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'guild_id' in where clause is ambiguous [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `guild_role_id`) WHERE `guild_id` = '3' AND `is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:48:15 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:49:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:49:06 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:49:39 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'guild_id' in where clause is ambiguous [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:49:39 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:49:56 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:49:56 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:51:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: feed ~ APPPATH/views/feeds/index.php [ 29 ] in /var/www/html/zergid/application/views/feeds/index.php:29
2013-05-15 10:51:16 --- DEBUG: #0 /var/www/html/zergid/application/views/feeds/index.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 29, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/feeds/index.php:29
2013-05-15 10:51:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: feed ~ APPPATH/views/feeds/index.php [ 29 ] in /var/www/html/zergid/application/views/feeds/index.php:29
2013-05-15 10:51:26 --- DEBUG: #0 /var/www/html/zergid/application/views/feeds/index.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 29, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/feeds/index.php:29
2013-05-15 10:51:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:51:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:52:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-15 10:52:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-15 10:52:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:52:19 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:53:09 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:53:09 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:54:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:54:50 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:55:27 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.character_detail_id' in 'on clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:55:27 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(342): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:55:45 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:55:45 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:56:55 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' LIMIT 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:56:55 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', false, Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(976): Kohana_ORM->_load_result(false)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 10:59:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: guild_members ~ APPPATH/views/guild/members.php [ 1 ] in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 10:59:39 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: guild_members ~ APPPATH/views/guild/members.php [ 1 ] in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:19 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: guild_members ~ APPPATH/views/guild/members.php [ 1 ] in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:24 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: guild_members ~ APPPATH/views/guild/members.php [ 1 ] in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:26 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: guild_members ~ APPPATH/views/guild/members.php [ 1 ] in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:28 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: guild_members ~ APPPATH/views/guild/members.php [ 1 ] in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:29 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: guild_members ~ APPPATH/views/guild/members.php [ 1 ] in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:30 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: guild_members ~ APPPATH/views/guild/members.php [ 1 ] in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:31 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: guild_members ~ APPPATH/views/guild/members.php [ 1 ] in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:01:32 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(96): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(64): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:1
2013-05-15 11:02:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 11:02:59 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 11:10:57 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '1' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 11:10:57 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 23:38:04 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-15 23:38:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'favicon.ico', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-15 23:38:56 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 23:38:56 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 23:49:10 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-15 23:49:10 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251