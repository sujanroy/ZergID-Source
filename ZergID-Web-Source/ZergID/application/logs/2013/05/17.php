<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-17 03:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: feed ~ APPPATH/views/feeds/index.php [ 29 ] in /var/www/html/zergid/application/views/feeds/index.php:29
2013-05-17 03:57:12 --- DEBUG: #0 /var/www/html/zergid/application/views/feeds/index.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 29, Array)
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
2013-05-17 03:59:36 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-17 03:59:36 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-17 04:02:28 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-17 04:02:28 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-17 09:09:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'SphinxQL' not found ~ APPPATH/classes/Controller/Search.php [ 9 ] in :
2013-05-17 09:09:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-17 09:14:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'SphinxQL' not found ~ APPPATH/classes/Controller/Search.php [ 9 ] in :
2013-05-17 09:14:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-17 09:15:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'SphinxQL' not found ~ APPPATH/classes/Controller/Search.php [ 9 ] in :
2013-05-17 09:15:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-17 09:17:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'SphinxQL' not found ~ APPPATH/classes/Controller/Search.php [ 9 ] in :
2013-05-17 09:17:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-17 09:25:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'SphinxQL' not found ~ APPPATH/classes/Controller/Search.php [ 9 ] in :
2013-05-17 09:25:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-17 09:44:53 --- EMERGENCY: ErrorException [ 1 ]: Class 'SphinxQL' not found ~ APPPATH/classes/Controller/Search.php [ 9 ] in :
2013-05-17 09:44:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-17 09:52:54 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-17 09:52:54 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-17 10:07:19 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-17 10:07:19 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-17 10:08:08 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-17 10:08:08 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-17 10:15:02 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/profile/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-17 10:15:02 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/User.php(55): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/User.php(36): Controller_User->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_User->action_profileimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-17 10:15:50 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/profile/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-17 10:15:50 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/User.php(55): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/User.php(36): Controller_User->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_User->action_profileimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-17 10:15:57 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/profile/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-17 10:15:57 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/User.php(55): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/User.php(36): Controller_User->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_User->action_profileimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-17 10:19:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory public/uploads/guild/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-17 10:19:06 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Guild.php(187): Kohana_Upload::save(Array, NULL, 'public/uploads/...')
#1 /var/www/html/zergid/application/classes/Controller/Guild.php(61): Controller_Guild->save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-17 10:21:04 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory public/uploads/guild/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-17 10:21:04 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Guild.php(187): Kohana_Upload::save(Array, NULL, 'public/uploads/...')
#1 /var/www/html/zergid/application/classes/Controller/Guild.php(61): Controller_Guild->save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-17 10:26:44 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/profile/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-17 10:26:44 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/User.php(55): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/User.php(36): Controller_User->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_User->action_profileimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-17 10:26:51 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/profile/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-17 10:26:51 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/User.php(55): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/User.php(36): Controller_User->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_User->action_profileimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-17 10:29:23 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/profile/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-17 10:29:23 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/User.php(55): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/User.php(36): Controller_User->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_User->action_profileimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-17 10:34:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-17 10:34:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-17 10:34:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-17 10:34:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-17 10:35:21 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-17 10:35:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/imag...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-17 10:35:22 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-17 10:35:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/imag...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-17 10:35:22 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-17 10:35:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/imag...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-17 10:35:23 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-17 10:35:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/imag...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-17 10:35:24 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-17 10:35:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/css/imag...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-17 10:37:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: feed ~ APPPATH/views/feeds/index.php [ 29 ] in /var/www/html/zergid/application/views/feeds/index.php:29
2013-05-17 10:37:14 --- DEBUG: #0 /var/www/html/zergid/application/views/feeds/index.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 29, Array)
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