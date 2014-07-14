<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-03 07:18:04 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php:1299
2014-01-03 07:18:04 --- DEBUG: #0 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1419): Kohana_ORM->create(NULL)
#2 /var/www/html/zergid/application/classes/Controller/Home.php(117): Kohana_ORM->save()
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Home->action_forgot_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php:1299
2014-01-03 08:12:03 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php:1299
2014-01-03 08:12:03 --- DEBUG: #0 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1419): Kohana_ORM->create(NULL)
#2 /var/www/html/zergid/application/classes/Controller/Home.php(117): Kohana_ORM->save()
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Home->action_forgot_password()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php:1299
2014-01-03 23:10:51 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2014-01-03 23:10:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'favicon.ico', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :