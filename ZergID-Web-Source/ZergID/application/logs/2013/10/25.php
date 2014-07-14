<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-25 01:12:44 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-10-25 01:12:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'favicon.ico', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-10-25 01:12:44 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-10-25 01:12:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'favicon.ico', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-10-25 01:32:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: feed ~ APPPATH/views/message/index.php [ 5 ] in /var/www/html/zergid/application/views/message/index.php:5
2013-10-25 01:32:12 --- DEBUG: #0 /var/www/html/zergid/application/views/message/index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 5, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/blank.php(1): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(77): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/message/index.php:5
2013-10-25 01:51:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/message/index.php [ 3 ] in /var/www/html/zergid/application/views/message/index.php:3
2013-10-25 01:51:46 --- DEBUG: #0 /var/www/html/zergid/application/views/message/index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 3, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/blank.php(1): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(77): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/message/index.php:3
2013-10-25 02:40:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-10-25 02:40:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'favicon.ico', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-10-25 03:45:43 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/message/index.php [ 3 ] in /var/www/html/zergid/application/views/message/index.php:3
2013-10-25 03:45:43 --- DEBUG: #0 /var/www/html/zergid/application/views/message/index.php(3): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/html/z...', 3, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/blank.php(1): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(77): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/message/index.php:3
2013-10-25 03:46:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_id ~ APPPATH/views/message/index.php [ 3 ] in /var/www/html/zergid/application/views/message/index.php:3
2013-10-25 03:46:06 --- DEBUG: #0 /var/www/html/zergid/application/views/message/index.php(3): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 3, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/blank.php(1): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(77): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/message/index.php:3
2013-10-25 03:49:21 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/views/message/index.php [ 3 ] in :
2013-10-25 03:49:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-25 03:49:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/views/message/index.php [ 3 ] in :
2013-10-25 03:49:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-25 03:49:24 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/views/message/index.php [ 3 ] in :
2013-10-25 03:49:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-25 03:59:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/views/message/index.php [ 182 ] in /var/www/html/zergid/application/views/message/index.php:182
2013-10-25 03:59:05 --- DEBUG: #0 /var/www/html/zergid/application/views/message/index.php(182): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 182, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(65): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(77): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/message/index.php:182
2013-10-25 04:01:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/views/message/index.php [ 195 ] in /var/www/html/zergid/application/views/message/index.php:195
2013-10-25 04:01:46 --- DEBUG: #0 /var/www/html/zergid/application/views/message/index.php(195): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 195, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(65): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(77): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/message/index.php:195
2013-10-25 04:45:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: parent_message_id ~ APPPATH/classes/Controller/Message.php [ 366 ] in /var/www/html/zergid/application/classes/Controller/Message.php:366
2013-10-25 04:45:43 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(366): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 366, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_load_more_old_messages()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:366
2013-10-25 04:48:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: parent_message_id ~ APPPATH/classes/Controller/Message.php [ 367 ] in /var/www/html/zergid/application/classes/Controller/Message.php:367
2013-10-25 04:48:03 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(367): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 367, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_load_more_old_messages()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:367
2013-10-25 04:48:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message_id ~ APPPATH/classes/Controller/Message.php [ 367 ] in /var/www/html/zergid/application/classes/Controller/Message.php:367
2013-10-25 04:48:28 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Message.php(367): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 367, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_load_more_old_messages()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Message.php:367
2013-10-25 04:48:55 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: styles ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /var/www/html/zergid/application/classes/Controller/Template/User.php:73
2013-10-25 04:48:55 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Template/User.php(73): Kohana_View->__get('styles')
#1 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/zergid/application/classes/Controller/Template/User.php:73
2013-10-25 05:20:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message_id ~ APPPATH/views/message/index.php [ 5 ] in /var/www/html/zergid/application/views/message/index.php:5
2013-10-25 05:20:26 --- DEBUG: #0 /var/www/html/zergid/application/views/message/index.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 5, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/blank.php(1): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(77): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/message/index.php:5
2013-10-25 05:21:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views/message/index.php [ 5 ] in /var/www/html/zergid/application/views/message/index.php:5
2013-10-25 05:21:11 --- DEBUG: #0 /var/www/html/zergid/application/views/message/index.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/z...', 5, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/blank.php(1): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(77): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/message/index.php:5
2013-10-25 05:23:08 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant message_id - assumed 'message_id' ~ APPPATH/views/message/index.php [ 5 ] in /var/www/html/zergid/application/views/message/index.php:5
2013-10-25 05:23:08 --- DEBUG: #0 /var/www/html/zergid/application/views/message/index.php(5): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/html/z...', 5, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/blank.php(1): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(77): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/message/index.php:5
2013-10-25 05:23:32 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Message as array ~ APPPATH/views/message/index.php [ 5 ] in :
2013-10-25 05:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-25 05:23:36 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Message as array ~ APPPATH/views/message/index.php [ 5 ] in :
2013-10-25 05:23:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-25 05:23:37 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Message as array ~ APPPATH/views/message/index.php [ 5 ] in :
2013-10-25 05:23:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-25 05:23:37 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Message as array ~ APPPATH/views/message/index.php [ 5 ] in :
2013-10-25 05:23:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-10-25 07:24:14 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND `message`.`message_id` = '449' OR `message`.`parent_message_id` = '449') A' at line 1 [ SELECT `zid_users`.*, `zid_character_details`.*, `message`.`message_id` AS `message_id`, `message`.`user_id` AS `user_id`, `message`.`character_detail_id` AS `character_detail_id`, `message`.`guild_id` AS `guild_id`, `message`.`receiver_id` AS `receiver_id`, `message`.`guild_receiver_id` AS `guild_receiver_id`, `message`.`event_id` AS `event_id`, `message`.`parent_message_id` AS `parent_message_id`, `message`.`parent_reply_message_id` AS `parent_reply_message_id`, `message`.`is_replied` AS `is_replied`, `message`.`subject` AS `subject`, `message`.`message` AS `message`, `message`.`is_message_viewed` AS `is_message_viewed`, `message`.`is_event_message_viewed` AS `is_event_message_viewed`, `message`.`is_message_active` AS `is_message_active`, `message`.`created_date` AS `created_date`, `message`.`last_modified_date` AS `last_modified_date` FROM `zid_messages` AS `message` INNER JOIN `zid_users` ON (`zid_users`.`id` = `message`.`user_id`) LEFT OUTER JOIN `zid_character_details` ON (`message`.`character_detail_id` = `zid_character_details`.`character_detail_id`) WHERE ) AND `message`.`message_id` = '449' OR `message`.`parent_message_id` = '449') AND `message`.`message_id` < '487' GROUP BY `message`.`message_id` ORDER BY `message`.`last_modified_date` DESC LIMIT 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 07:24:14 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_use...', 'Model_Message', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Message.php(375): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_load_more_old_messages()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 07:24:25 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND `message`.`message_id` = '449' OR `message`.`parent_message_id` = '449') A' at line 1 [ SELECT `zid_users`.*, `zid_character_details`.*, `message`.`message_id` AS `message_id`, `message`.`user_id` AS `user_id`, `message`.`character_detail_id` AS `character_detail_id`, `message`.`guild_id` AS `guild_id`, `message`.`receiver_id` AS `receiver_id`, `message`.`guild_receiver_id` AS `guild_receiver_id`, `message`.`event_id` AS `event_id`, `message`.`parent_message_id` AS `parent_message_id`, `message`.`parent_reply_message_id` AS `parent_reply_message_id`, `message`.`is_replied` AS `is_replied`, `message`.`subject` AS `subject`, `message`.`message` AS `message`, `message`.`is_message_viewed` AS `is_message_viewed`, `message`.`is_event_message_viewed` AS `is_event_message_viewed`, `message`.`is_message_active` AS `is_message_active`, `message`.`created_date` AS `created_date`, `message`.`last_modified_date` AS `last_modified_date` FROM `zid_messages` AS `message` INNER JOIN `zid_users` ON (`zid_users`.`id` = `message`.`user_id`) LEFT OUTER JOIN `zid_character_details` ON (`message`.`character_detail_id` = `zid_character_details`.`character_detail_id`) WHERE ) AND `message`.`message_id` = '449' OR `message`.`parent_message_id` = '449') AND `message`.`message_id` < '487' GROUP BY `message`.`message_id` ORDER BY `message`.`last_modified_date` DESC LIMIT 10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 07:24:25 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_use...', 'Model_Message', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Message.php(375): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Message->action_load_more_old_messages()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Message))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251