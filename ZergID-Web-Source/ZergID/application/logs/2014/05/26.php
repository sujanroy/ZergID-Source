<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-26 03:06:03 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-05-26 03:06:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'robots.txt', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-05-26 23:14:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-05-26 23:14:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'robots.txt', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-05-26 23:16:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_sort ~ APPPATH/classes/Controller/Message.php [ 13 ] in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:16:04 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 13, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:16:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_sort ~ APPPATH/classes/Controller/Message.php [ 13 ] in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:16:08 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 13, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:16:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_sort ~ APPPATH/classes/Controller/Message.php [ 13 ] in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:16:10 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 13, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:16:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_sort ~ APPPATH/classes/Controller/Message.php [ 13 ] in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:16:27 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 13, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:20:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_sort ~ APPPATH/classes/Controller/Message.php [ 13 ] in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:20:32 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 13, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:23:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_sort ~ APPPATH/classes/Controller/Message.php [ 13 ] in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:23:11 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 13, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:23:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_sort ~ APPPATH/classes/Controller/Message.php [ 13 ] in /var/www/html/zergid/application/classes/Controller/Message.php:13
2014-05-26 23:23:16 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(13): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 13, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:13