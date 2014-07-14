<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-15 00:01:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 576 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:576
2014-03-15 00:01:57 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(576): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 576, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:576
2014-03-15 00:02:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 576 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:576
2014-03-15 00:02:15 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(576): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 576, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:576
2014-03-15 00:02:27 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 00:02:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'jQuery & Canvas...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 00:02:28 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 00:02:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'img/one.jpg', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 01:01:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 01:01:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'phpTest/zologiz...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 01:01:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 01:01:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'phpMyAdmin/scri...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 01:01:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 01:01:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'pma/scripts/set...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 01:01:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 01:01:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'myadmin/scripts...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:07:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 576 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:576
2014-03-15 02:07:03 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(576): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 576, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:576
2014-03-15 02:48:43 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:48:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:48:45 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:48:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:48:45 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:48:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/jQuer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:48:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:48:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/jQuer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:48:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:48:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/img/o...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:58:10 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:58:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'robots.txt', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:58:12 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:58:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:58:12 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:58:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:58:37 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:58:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:58:37 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:58:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:58:49 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:58:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:58:50 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:58:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:58:51 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:58:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/jQuer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:58:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:58:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/jQuer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:58:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:58:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/img/o...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 02:59:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 02:59:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:00:57 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:00:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:00:57 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:00:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:01:03 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:01:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:01:04 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:01:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/p...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:03:25 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:03:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:03:26 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:03:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:03:26 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:03:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/jQuer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:03:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:03:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/jQuer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:03:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:03:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/img/o...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:09:25 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:09:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:09:27 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:09:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:09:27 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:09:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/jQuer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:09:28 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:09:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/jQuer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 03:09:28 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 03:09:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/img/o...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 08:33:05 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 08:33:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'jQuery & Canvas...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 08:33:05 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 08:33:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'img/one.jpg', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 10:25:25 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 10:25:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'robots.txt', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 11:41:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 576 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:576
2014-03-15 11:41:15 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(576): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 576, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:576
2014-03-15 14:01:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 14:01:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 14:01:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 14:01:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 14:03:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 14:03:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 14:03:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 14:03:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 14:03:09 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 14:03:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 14:04:07 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 14:04:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'feeds/view/<a s...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 14:04:13 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 14:04:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'feeds/<a style=...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 15:33:38 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 15:33:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'robots.txt', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 17:16:30 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 17:16:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 17:16:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 17:16:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 17:16:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 17:16:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 17:23:12 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 17:23:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 17:23:12 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 17:23:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 17:23:12 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 17:23:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'character/edit/...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 17:25:41 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 17:25:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'admin/config.ph...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:39:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/feeds/feed.php [ 182 ] in :
2014-03-15 18:39:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-15 18:39:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/feeds/feed.php [ 182 ] in :
2014-03-15 18:39:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-15 18:39:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 579 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 18:39:37 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(579): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 579, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 18:39:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/feeds/feed.php [ 182 ] in :
2014-03-15 18:39:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-15 18:39:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/feeds/feed.php [ 182 ] in :
2014-03-15 18:39:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-15 18:39:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 579 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 18:39:49 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(579): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 579, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 18:39:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/feeds/feed.php [ 182 ] in :
2014-03-15 18:39:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-15 18:39:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/feeds/feed.php [ 182 ] in :
2014-03-15 18:39:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-15 18:39:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/feeds/feed.php [ 182 ] in :
2014-03-15 18:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-15 18:40:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/feeds/feed.php [ 182 ] in :
2014-03-15 18:40:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-15 18:44:11 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:44:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'feeds/<a style=...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:45:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:45:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'feeds/<a style=...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:46:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: feed ~ APPPATH/views/feeds/feed_more.php [ 290 ] in /var/www/html/zergid/application/views/feeds/feed_more.php:290
2014-03-15 18:46:07 --- DEBUG: #0 /var/www/html/zergid/application/views/feeds/feed_more.php(290): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 290, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/blank.php(1): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(104): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/feeds/feed_more.php:290
2014-03-15 18:49:24 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:49:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'feeds/<a style=...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:49:58 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:49:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:54:28 --- EMERGENCY: Database_Exception [ 1318 ]: Incorrect number of arguments for PROCEDURE zergid.add_feeds; expected 8, got 9 [ CALL add_feeds(4, NULL, 146, 'One of the best tiers i\'ve had in wow, Light of dawn forever.', '1', 208 , NULL,'NULL' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 18:54:28 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('4', 146, Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 18:54:39 --- EMERGENCY: Database_Exception [ 1318 ]: Incorrect number of arguments for PROCEDURE zergid.add_feeds; expected 8, got 9 [ CALL add_feeds(4, NULL, 147, 'One of the best tiers i\'ve had in wow, Light of dawn forever.', '1', 208 , NULL,'NULL' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 18:54:39 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('4', 147, Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 18:56:28 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:56:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:56:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:56:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:56:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:56:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:56:47 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:56:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:56:50 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:56:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:56:55 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:56:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:57:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:57:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'feeds/<a style=...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:57:34 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:57:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 18:57:36 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 18:57:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 19:02:11 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 19:02:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'feeds/<a style=...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 19:02:11 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 19:02:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'feeds/<a style=...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 19:02:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 19:02:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 19:03:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/guild/feeds/feed.php [ 64 ] in :
2014-03-15 19:03:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-15 19:03:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/guild/feeds/feed.php [ 64 ] in :
2014-03-15 19:03:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-03-15 19:05:24 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 19:05:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'guild/feed/21/u...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 19:05:30 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 19:05:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', '<a style=text-d...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 19:05:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 19:05:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'feeds/<a style=...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 19:06:03 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 19:06:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'feeds/view/<a s...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 19:20:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 579 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:20:04 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(579): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 579, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:21:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 579 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:21:04 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(579): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 579, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:23:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 579 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:23:01 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(579): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 579, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:23:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 579 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:23:12 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(579): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 579, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:23:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 579 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:23:42 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(579): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 579, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:52:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 579 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:52:06 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(579): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 579, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:52:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 579 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 19:52:41 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(579): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 579, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 21:02:42 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's bookshelf.I hope all paragraphs appear in the post...' , @LAST_ID)' at line 1 [ CALL add_feeds(82, NULL, 156, '', '1', 282 , NULL,'monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey's bookshelf.I hope all paragraphs appear in the post...' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:02:42 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 156, Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:02:47 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's bookshelf.I hope all paragraphs appear in the post...' , @LAST_ID)' at line 1 [ CALL add_feeds(82, NULL, 157, '', '1', 282 , NULL,'monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey's bookshelf.I hope all paragraphs appear in the post...' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:02:47 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 157, Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:16:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 21:16:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'guild/feed/18/u...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 21:18:44 --- EMERGENCY: ErrorException [ 8 ]: date_default_timezone_set(): Timezone ID '' is invalid ~ APPPATH/views/template/header.php [ 132 ] in :
2014-03-15 21:18:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'date_default_ti...', '/var/www/html/z...', 132, Array)
#1 /var/www/html/zergid/application/views/template/header.php(132): date_default_timezone_set('')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#3 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#4 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/html/zergid/application/views/template/user.php(34): Kohana_View->__toString()
#6 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#7 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#8 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/html/zergid/application/classes/Controller/Template/User.php(104): Kohana_Controller_Template->after()
#10 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#13 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#16 {main} in :
2014-03-15 21:18:44 --- EMERGENCY: Exception [ 0 ]: DateTimeZone::__construct(): Unknown or bad timezone () ~ APPPATH/views/feeds/feed.php [ 141 ] in /var/www/html/zergid/application/views/feeds/feed.php:141
2014-03-15 21:18:44 --- DEBUG: #0 /var/www/html/zergid/application/views/feeds/feed.php(141): DateTimeZone->__construct('')
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/feeds/index.php(144): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /var/www/html/zergid/application/views/template/user.php(73): Kohana_View->__toString()
#9 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#10 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#11 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /var/www/html/zergid/application/classes/Controller/Template/User.php(104): Kohana_Controller_Template->after()
#13 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#16 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/html/zergid/application/views/feeds/feed.php:141
2014-03-15 21:18:59 --- EMERGENCY: ErrorException [ 8 ]: date_default_timezone_set(): Timezone ID '' is invalid ~ APPPATH/views/template/header.php [ 132 ] in :
2014-03-15 21:18:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'date_default_ti...', '/var/www/html/z...', 132, Array)
#1 /var/www/html/zergid/application/views/template/header.php(132): date_default_timezone_set('')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#3 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#4 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/html/zergid/application/views/template/user.php(34): Kohana_View->__toString()
#6 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#7 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#8 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/html/zergid/application/classes/Controller/Template/User.php(104): Kohana_Controller_Template->after()
#10 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#13 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#16 {main} in :
2014-03-15 21:18:59 --- EMERGENCY: Exception [ 0 ]: DateTimeZone::__construct(): Unknown or bad timezone () ~ APPPATH/views/feeds/feed.php [ 141 ] in /var/www/html/zergid/application/views/feeds/feed.php:141
2014-03-15 21:18:59 --- DEBUG: #0 /var/www/html/zergid/application/views/feeds/feed.php(141): DateTimeZone->__construct('')
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/feeds/index.php(144): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /var/www/html/zergid/application/views/template/user.php(73): Kohana_View->__toString()
#9 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#10 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#11 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /var/www/html/zergid/application/classes/Controller/Template/User.php(104): Kohana_Controller_Template->after()
#13 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#16 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/html/zergid/application/views/feeds/feed.php:141
2014-03-15 21:24:29 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:24:29 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:25:38 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:25:38 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:36:23 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:36:23 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:36:24 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:36:24 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:36:24 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:36:24 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:36:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:36:26 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:36:34 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:36:34 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:36:50 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 21:36:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'user/others/fee...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 21:37:45 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:37:45 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:37:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 21:37:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 21:37:55 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:37:55 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:38:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 21:38:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'user/others/fee...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 21:50:07 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's bookshelf.
' , @LAST_ID)' at line 1 [ CALL add_feeds(82, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'tch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on http://www.youtube.com/watch?v=52TKKeTFXOw
Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey's bookshelf.
' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:50:07 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:50:16 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's bookshelf.
' , @LAST_ID)' at line 1 [ CALL add_feeds(82, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'tch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on http://www.youtube.com/watch?v=52TKKeTFXOw
Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey's bookshelf.
' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:50:16 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:52:21 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 21:52:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'robots.txt', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 21:55:34 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's bookshelf.
Ten little monkeys jumping on the bed . . . and tripping over teddy' at line 1 [ CALL add_feeds(82, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey's bookshelf.
Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey's bookshelf.
Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and f' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:55:34 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:55:34 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's bookshelf.
Ten little monkeys jumping on the bed . . . and tripping over teddy' at line 1 [ CALL add_feeds(82, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey's bookshelf.
Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey's bookshelf.
Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and f' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:55:34 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:55:35 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's bookshelf.
Ten little monkeys jumping on the bed . . . and tripping over teddy' at line 1 [ CALL add_feeds(82, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey's bookshelf.
Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey's bookshelf.
Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and f' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:55:35 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:57:01 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's bookshelf.
vbcbbv  fgfvcvcvccccccccccc                                        ' at line 1 [ CALL add_feeds(82, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!
Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey's bookshelf.
vbcbbv  fgfvcvcvccccccccccc                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:57:01 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:57:08 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's bookshelf.
vbcbbv  fgfvcvcvccccccccccc                                        ' at line 1 [ CALL add_feeds(82, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!
Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey's bookshelf.
vbcbbv  fgfvcvcvccccccccccc                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 21:57:08 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:35:24 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and http://www.youtube.com/watch?v=Mq5OQQWbZWY It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:35:24 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:35:53 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and http://www.youtube.com/watch?v=Mq5OQQWbZWY It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:35:53 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:37:04 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It http://www.youtube.com/watch?v=_Ca12JSMN9ELorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:37:04 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:37:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 22:37:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 22:37:20 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(124, NULL, NULL, 'Ten little monkeys jumping on the bed . . . and tripping over teddy bears, slipping on banana peels, and falling off the dock!

Those naughty monkeys sure love to monkey around! But just WHO is causing all this monkey business? Try finding the naughtiest monkey in every scene--and watch as she gets her comeuppance at the end! A classic monkey rhyme with delicious illustrations, this is sure to be a favorite on every little monkey\'s bookshelf.

I hope all paragraphs appear in the post...', '1', 241 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It http://www.youtube.com/watch?v=_Ca12JSMN9ELorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:37:20 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('124', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:42:42 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(120, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Ithttp://www.youtube.com/watch?v=_Ca12JSMN9ELorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:42:42 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('120', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:42:52 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 22:42:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 22:42:56 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(120, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Ithttp://www.youtube.com/watch?v=_Ca12JSMN9ELorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:42:56 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('120', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:43:13 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 22:43:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 22:43:15 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(120, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Ithttp://www.youtube.com/watch?v=_Ca12JSMN9ELorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:43:15 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('120', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:43:39 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(120, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:43:39 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('120', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:43:51 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 22:43:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 22:43:55 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(120, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:43:55 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('120', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:46:02 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 22:46:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'jQuery & Canvas...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 22:46:02 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 22:46:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'img/one.jpg', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 22:59:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 22:59:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/jquer...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 22:59:38 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(120, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Ithttp://www.youtube.com/watch?v=_Ca12JSMN9ELorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 22:59:38 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('120', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:06:28 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'a website Company that provides you an exclusive corporate identity. Our wide ra' at line 1 [ CALL add_feeds(82, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,Amrithaa is a website Company that provides you an exclusive corporate identity. Our wide range of services includes Web Design, Responsive web design, Graphic Design, creative graphic design, Web Development, Mobile Application, Website Maintenance, Website Redesign, Domain registration, Unlimited Hosting, Ecommerce Website Development, Matrimonial Website Development, Property Website Development, Hotel Website Development, Job Portal, Classified Website, Directory Portal, Social Networking Portal, Inventory Management, Mobile Website Development, SEO, Software Development, Social Media Development, Internet Marketing, Online Promotion, Digital Marketing, 3D Animation and Presentation. , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:06:28 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:06:32 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'a website Company that provides you an exclusive corporate identity. Our wide ra' at line 1 [ CALL add_feeds(82, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,Amrithaa is a website Company that provides you an exclusive corporate identity. Our wide range of services includes Web Design, Responsive web design, Graphic Design, creative graphic design, Web Development, Mobile Application, Website Maintenance, Website Redesign, Domain registration, Unlimited Hosting, Ecommerce Website Development, Matrimonial Website Development, Property Website Development, Hotel Website Development, Job Portal, Classified Website, Directory Portal, Social Networking Portal, Inventory Management, Mobile Website Development, SEO, Software Development, Social Media Development, Internet Marketing, Online Promotion, Digital Marketing, 3D Animation and Presentation. , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:06:32 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:07:48 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(120, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:07:48 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('120', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:08:10 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 't look even slightly believable. If you are going to use a passage of Lorem Ipsu' at line 1 [ CALL add_feeds(120, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'ssage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you nee' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:08:10 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('120', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:08:11 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 't look even slightly believable. If you are going to use a passage of Lorem Ipsu' at line 1 [ CALL add_feeds(120, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'ssage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you nee' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:08:11 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('120', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:08:13 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 't look even slightly believable. If you are going to use a passage of Lorem Ipsu' at line 1 [ CALL add_feeds(120, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'ssage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you nee' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:08:13 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('120', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:09:08 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(82, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:09:08 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:09:30 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(82, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It wa' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:09:30 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:10:19 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(82, NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as ', '1', 356 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:10:19 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 'NULL', Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:10:48 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(82, NULL, 166, 'First Video', '1', 353 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:10:48 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 166, Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:10:53 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 's standard dummy text ever since the 1500s, when an unknown printer took a galle' at line 1 [ CALL add_feeds(82, NULL, 167, 'First Video', '1', 353 , NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It' , @LAST_ID); ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:10:53 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_feeds(...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/feeds.php(16): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(419): Model_Feeds->add_feeds('82', 167, Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_post()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-03-15 23:30:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: auth_user ~ APPPATH/classes/Controller/Feeds.php [ 579 ] in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 23:30:44 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Feeds.php(579): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 579, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Feeds.php:579
2014-03-15 23:49:30 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 23:49:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'robots.txt', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 23:57:55 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 23:57:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'jQuery & Canvas...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 23:57:55 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 23:57:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'jQuery & Canvas...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-15 23:57:55 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-15 23:57:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'img/one.jpg', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :