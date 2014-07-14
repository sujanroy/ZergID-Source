<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-08 05:27:50 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-05-08 05:27:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'apple-touch-ico...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-05-08 05:27:50 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-05-08 05:27:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'apple-touch-ico...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-05-08 09:54:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-05-08 09:54:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'robots.txt', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-05-08 09:54:57 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-05-08 09:54:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'robots.txt', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-05-08 10:45:04 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-05-08 10:45:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'guild/feed/40/u...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-05-08 10:45:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-05-08 10:45:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'guild/feed/40/u...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-05-08 11:15:57 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')' at line 1 [ SELECT `user_id` FROM `zid_character_details` WHERE `game_id` IN () ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-05-08 11:15:57 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user_id...', false, Array)
#1 /var/www/html/zergid/application/classes/Model/CharacterDetail.php(160): Kohana_Database_Query->execute()
#2 /var/www/html/zergid/application/classes/Controller/Feeds.php(639): Model_CharacterDetail->all_game_user('161')
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Feeds->action_mygames()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feeds))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2014-05-08 14:17:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_sort ~ APPPATH/classes/Controller/Message.php [ 13 ] in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-08 14:17:58 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 13, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-08 14:18:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_sort ~ APPPATH/classes/Controller/Message.php [ 13 ] in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-08 14:18:34 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 13, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-08 14:22:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_sort ~ APPPATH/classes/Controller/Message.php [ 13 ] in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-08 14:22:05 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 13, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-08 14:22:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_sort ~ APPPATH/classes/Controller/Message.php [ 13 ] in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-08 14:22:30 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 13, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-08 16:26:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_sort ~ APPPATH/classes/Controller/Message.php [ 13 ] in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-08 16:26:46 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 13, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-08 23:39:34 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-05-08 23:39:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'robots.txt', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :