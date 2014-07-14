<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-23 02:17:49 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-23 02:17:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid_staging/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'docs/funcspecs/...', NULL)
#2 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid_staging/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-23 11:46:57 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-23 11:46:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid_staging/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'user/soapCaller...', NULL)
#2 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid_staging/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-23 11:47:19 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-23 11:47:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid_staging/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'user/soapCaller...', NULL)
#2 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid_staging/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-23 11:55:53 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-23 11:55:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid_staging/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'user/soapCaller...', NULL)
#2 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid_staging/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-23 18:25:34 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-03-23 18:25:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid_staging/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'horde/login.php', NULL)
#2 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid_staging/index.php(118): Kohana_Request->execute()
#5 {main} in :
2014-03-23 23:45:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template/home.php [ 27 ] in /var/www/html/zergid_staging/application/views/template/home.php:27
2014-03-23 23:45:46 --- DEBUG: #0 /var/www/html/zergid_staging/application/views/template/home.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 27, Array)
#1 /var/www/html/zergid_staging/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid_staging/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid_staging/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/zergid_staging/application/classes/Controller/Template/Home.php(49): Kohana_Controller_Template->after()
#5 /var/www/html/zergid_staging/system/classes/Kohana/Controller.php(87): Controller_Template_Home->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/zergid_staging/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/html/zergid_staging/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/zergid_staging/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/zergid_staging/application/views/template/home.php:27
2014-03-23 23:45:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template/home.php [ 27 ] in /var/www/html/zergid_staging/application/views/template/home.php:27
2014-03-23 23:45:58 --- DEBUG: #0 /var/www/html/zergid_staging/application/views/template/home.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 27, Array)
#1 /var/www/html/zergid_staging/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid_staging/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid_staging/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/zergid_staging/application/classes/Controller/Template/Home.php(49): Kohana_Controller_Template->after()
#5 /var/www/html/zergid_staging/system/classes/Kohana/Controller.php(87): Controller_Template_Home->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/zergid_staging/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/html/zergid_staging/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/zergid_staging/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/zergid_staging/application/views/template/home.php:27
2014-03-23 23:48:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template/home.php [ 27 ] in /var/www/html/zergid_staging/application/views/template/home.php:27
2014-03-23 23:48:01 --- DEBUG: #0 /var/www/html/zergid_staging/application/views/template/home.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 27, Array)
#1 /var/www/html/zergid_staging/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid_staging/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid_staging/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/zergid_staging/application/classes/Controller/Template/Home.php(49): Kohana_Controller_Template->after()
#5 /var/www/html/zergid_staging/system/classes/Kohana/Controller.php(87): Controller_Template_Home->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/zergid_staging/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/html/zergid_staging/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/zergid_staging/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/zergid_staging/application/views/template/home.php:27
2014-03-23 23:48:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template/home.php [ 27 ] in /var/www/html/zergid_staging/application/views/template/home.php:27
2014-03-23 23:48:51 --- DEBUG: #0 /var/www/html/zergid_staging/application/views/template/home.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 27, Array)
#1 /var/www/html/zergid_staging/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid_staging/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid_staging/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/zergid_staging/application/classes/Controller/Template/Home.php(49): Kohana_Controller_Template->after()
#5 /var/www/html/zergid_staging/system/classes/Kohana/Controller.php(87): Controller_Template_Home->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/zergid_staging/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/html/zergid_staging/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/zergid_staging/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/zergid_staging/application/views/template/home.php:27
2014-03-23 23:54:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH/views/template/home.php [ 27 ] in /var/www/html/zergid_staging/application/views/template/home.php:27
2014-03-23 23:54:01 --- DEBUG: #0 /var/www/html/zergid_staging/application/views/template/home.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 27, Array)
#1 /var/www/html/zergid_staging/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid_staging/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid_staging/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/zergid_staging/application/classes/Controller/Template/Home.php(49): Kohana_Controller_Template->after()
#5 /var/www/html/zergid_staging/system/classes/Kohana/Controller.php(87): Controller_Template_Home->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/html/zergid_staging/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 /var/www/html/zergid_staging/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/html/zergid_staging/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/html/zergid_staging/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/html/zergid_staging/application/views/template/home.php:27