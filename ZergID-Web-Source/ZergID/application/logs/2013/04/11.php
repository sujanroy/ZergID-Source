<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-11 02:12:23 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 02:12:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 02:14:18 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 02:14:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/images/a...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 02:20:58 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Test' in 'field list' [ CALL add_character('53',Test,'Cricket','192.169.34.23', 'Lipsum', 'Lipsum', 'Lipsum', 'Lipsum', 'Lipsum', '1', 'Bowler', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 02:20:58 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(15): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(49): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 02:22:44 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Test' in 'field list' [ CALL add_character('55',Test,'Select Game Name','192.169.34.23', 'Lipsum', 'Lipsum', 'Lipsum', 'Lipsum', 'Lipsum', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 02:22:44 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(15): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(49): Model_CharacterDetail->add_character('55', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 02:22:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Test' in 'field list' [ CALL add_character('55',Test,'Select Game Name','192.169.34.23', 'Lipsum', 'Lipsum', 'Lipsum', 'Lipsum', 'Lipsum', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 02:22:46 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(15): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(49): Model_CharacterDetail->add_character('55', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 02:22:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Test' in 'field list' [ CALL add_character('55',Test,'Select Game Name','192.169.34.23', 'Lipsum', 'Lipsum', 'Lipsum', 'Lipsum', 'Lipsum', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 02:22:46 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(15): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(49): Model_CharacterDetail->add_character('55', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 02:24:52 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Test' in 'field list' [ CALL add_character('53',Test,'Cricket','192.169.34.23', 'Lipsum', 'Lipsum', 'Lipsum', 'Lipsum', 'Lipsum', '1', 'Bowler', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 02:24:52 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(15): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(49): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 02:41:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: insert_id ~ APPPATH\classes\Controller\character.php [ 51 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 02:41:58 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 51, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 02:44:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: insert_id ~ APPPATH\classes\Controller\character.php [ 60 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:60
2013-04-11 02:44:23 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 60, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_saveimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:60
2013-04-11 02:57:12 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\character.php [ 51 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 02:57:12 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\wamp\www\zer...', 51, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 03:01:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: CharacterDetail ~ APPPATH\classes\Controller\character.php [ 51 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 03:01:11 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 51, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 03:01:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: insert_id ~ APPPATH\classes\Controller\character.php [ 51 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 03:01:47 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 51, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 03:02:19 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\character.php [ 51 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 03:02:19 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\wamp\www\zer...', 51, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 03:02:59 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\character.php [ 51 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 03:02:59 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\wamp\www\zer...', 51, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 03:03:35 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\character.php [ 51 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 03:03:35 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\wamp\www\zer...', 51, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 03:54:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: insert_id ~ APPPATH\classes\Controller\character.php [ 60 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:60
2013-04-11 03:54:42 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 60, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_saveimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:60
2013-04-11 04:00:39 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\character.php [ 51 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 04:00:39 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\wamp\www\zer...', 51, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 04:01:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: insert_id ~ APPPATH\classes\Controller\character.php [ 60 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:60
2013-04-11 04:01:19 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 60, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_saveimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:60
2013-04-11 04:02:21 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\character.php [ 51 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 04:02:21 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\wamp\www\zer...', 51, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 04:13:17 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('55',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 04:13:17 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(15): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(49): Model_CharacterDetail->add_character('55', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 04:13:23 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('55',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 04:13:23 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(15): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(49): Model_CharacterDetail->add_character('55', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 04:13:27 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('55',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','1'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 04:13:27 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(15): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(49): Model_CharacterDetail->add_character('55', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 04:14:35 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('55',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','1'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 04:14:35 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(15): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(49): Model_CharacterDetail->add_character('55', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 04:14:36 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('55',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','1'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 04:14:36 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(15): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(49): Model_CharacterDetail->add_character('55', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 04:31:18 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\character.php [ 51 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 04:31:18 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(51): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\wamp\www\zer...', 51, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:51
2013-04-11 04:31:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: insert_id ~ APPPATH\classes\Controller\character.php [ 60 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:60
2013-04-11 04:31:50 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 60, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_saveimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:60
2013-04-11 04:36:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function insert_id() on a non-object ~ APPPATH\classes\model\characterDetail.php [ 17 ] in :
2013-04-11 04:36:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-11 04:48:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: insert_id ~ APPPATH\classes\Controller\character.php [ 60 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:60
2013-04-11 04:48:52 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 60, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_saveimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:60
2013-04-11 05:12:27 --- CRITICAL: Kohana_Exception [ 0 ]: The character_name property does not exist in the Model_Character class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:600
2013-04-11 05:12:27 --- DEBUG: #0 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('character_name')
#1 D:\wamp\www\zergid\application\views\character\add.php(102): Kohana_ORM->__get('character_name')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#4 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\wamp\www\zergid\application\views\template\user.php(86): Kohana_View->__toString()
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#7 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#8 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\wamp\www\zergid\application\classes\Controller\template\user.php(55): Kohana_Controller_Template->after()
#10 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#16 {main} in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:600
2013-04-11 05:12:57 --- CRITICAL: Kohana_Exception [ 0 ]: The character_name property does not exist in the Model_Character class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:600
2013-04-11 05:12:57 --- DEBUG: #0 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('character_name')
#1 D:\wamp\www\zergid\application\views\character\add.php(102): Kohana_ORM->__get('character_name')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#4 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\wamp\www\zergid\application\views\template\user.php(86): Kohana_View->__toString()
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#7 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#8 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\wamp\www\zergid\application\classes\Controller\template\user.php(55): Kohana_Controller_Template->after()
#10 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#16 {main} in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:600
2013-04-11 05:21:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: insert_id ~ APPPATH\classes\Controller\character.php [ 67 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:67
2013-04-11 05:21:07 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 67, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_saveimage()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:67
2013-04-11 05:24:15 --- CRITICAL: ErrorException [ 1 ]: Call to a member function insert_id() on a non-object ~ APPPATH\classes\model\characterDetail.php [ 20 ] in :
2013-04-11 05:24:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-11 05:41:53 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\model\characterDetail.php [ 21 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:21
2013-04-11 05:41:53 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(21): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\wamp\www\zer...', 21, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:21
2013-04-11 06:52:16 --- CRITICAL: Database_Exception [ 1305 ]: FUNCTION bulkdb_zergid.LAST_INSERT_ID does not exist [ SELECT LAST_INSERT_ID () as ID ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 06:52:16 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT LAST_INS...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(20): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:09:03 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:09:03 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:09:07 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:09:07 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:09:07 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:09:07 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:09:08 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:09:08 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:09:12 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:09:12 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:24:25 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 08:24:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 08:24:42 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 08:24:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 08:24:43 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 08:24:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 08:24:56 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 08:24:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 08:24:56 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 08:24:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 08:26:59 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 08:26:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 08:27:59 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 08:27:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 08:27:59 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 08:27:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 08:28:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 08:28:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 08:28:06 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 08:28:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 08:40:40 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\user\left_bar.php [ 44 ] in :
2013-04-11 08:40:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-11 08:46:53 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('56',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:46:53 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:46:54 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('56',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:46:54 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:47:07 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('56',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:47:07 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:47:12 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('56',1,'','1', '1', '1', '1', '1', '1', '1', '', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:47:12 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:47:26 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('56',1,'','1', '1', '1', '1', '1', '1', '1', 'sdfsdf', 'sample', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:47:26 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 08:54:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::current() ~ APPPATH\views\user\left_bar.php [ 46 ] in :
2013-04-11 08:54:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-11 08:55:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\user\left_bar.php [ 46 ] in :
2013-04-11 08:55:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-11 08:55:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::current() ~ APPPATH\views\user\left_bar.php [ 46 ] in :
2013-04-11 08:55:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-11 09:23:33 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1','1', '1', '1', '1', '1', '1', '1', 'sdfsdf', 'sample', '0','0','0','15','','' at line 1 [ CALL add_character('56',,'1','1', '1', '1', '1', '1', '1', '1', 'sdfsdf', 'sample', '0','0','0','15','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:23:33 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:23:36 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1','1', '1', '1', '1', '1', '1', '1', 'sdfsdf', 'sample', '0','0','0','15','','' at line 1 [ CALL add_character('56',,'1','1', '1', '1', '1', '1', '1', '1', 'sdfsdf', 'sample', '0','0','0','15','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:23:36 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:23:43 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'sdfsdf', 'sample', '0','0','0','15','','' at line 1 [ CALL add_character('56',,'3','1', '1', '1', '1', '1', '1', '1', 'sdfsdf', 'sample', '0','0','0','15','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:23:43 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:23:46 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'sdfsdf', 'sample', '0','0','0','15','','' at line 1 [ CALL add_character('56',,'3','1', '1', '1', '1', '1', '1', '1', 'sdfsdf', 'sample', '0','0','0','15','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:23:46 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:24:18 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','',' at line 1 [ CALL add_character('56',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:24:18 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:24:23 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','',' at line 1 [ CALL add_character('56',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:24:23 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:25:10 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','sd' at line 1 [ CALL add_character('56',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','sdfds','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:25:10 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:25:11 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','sd' at line 1 [ CALL add_character('56',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','sdfds','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:25:11 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:25:14 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','sd' at line 1 [ CALL add_character('56',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','sdfds','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:25:14 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:27:15 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','15','',' at line 1 [ CALL add_character('56',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','15','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:27:15 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:31:19 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '1','1','1','45','sf' at line 1 [ CALL add_character('56',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '1','1','1','45','sfsdf','1'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:31:19 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:31:24 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '1','1','1','45','sf' at line 1 [ CALL add_character('56',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '1','1','1','45','sfsdf','1'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:31:24 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:33:12 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '1','1','1','45','sf' at line 1 [ CALL add_character('56',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '1','1','1','45','sfsdf','1'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:33:12 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:35:14 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','',' at line 1 [ CALL add_character('56',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:35:14 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('56', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:37:20 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Test', 'sample', '0','0','0','50','','0'' at line 1 [ CALL add_character('53',,'3','1', '1', '1', '1', '1', '1', '1', 'Test', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:37:20 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:40:14 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Test', 'sample', '0','0','0','50','','0'' at line 1 [ CALL add_character('53',,'3','1', '1', '1', '1', '1', '1', '1', 'Test', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:40:14 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:42:13 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Test', 'sample', '0','0','0','50','','0'' at line 1 [ CALL add_character('53',,'3','1', '1', '1', '1', '1', '1', '1', 'Test', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:42:13 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:49:32 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Test', 'sample', '0','0','0','50','','0'' at line 1 [ CALL add_character('53',,'3','1', '1', '1', '1', '1', '1', '1', 'Test', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:49:32 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:50:18 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '1','1','1','50','sd' at line 1 [ CALL add_character('53',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '1','1','1','50','sdfsdf','1'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:50:18 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:53:10 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','',' at line 1 [ CALL add_character('53',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:53:10 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:57:32 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Test', 'sample', '0','0','0','50','','0'' at line 1 [ CALL add_character('53',,'3','1', '1', '1', '1', '1', '1', '1', 'Test', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 09:57:32 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 10:55:02 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 10:55:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 10:55:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Batsman', 'sample', '0','0','0','50','',' at line 1 [ CALL add_character('53',,'3','1', '1', '1', '1', '1', '1', '1', 'Batsman', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 10:55:58 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 10:57:47 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 10:57:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 10:57:47 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 10:57:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 10:57:58 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','',' at line 1 [ CALL add_character('53',,'3','1', '1', '1', '1', '1', '1', '1', 'Fielder', 'sample', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 10:57:58 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 10:59:47 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 10:59:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 10:59:52 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 10:59:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:01:25 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:01:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:01:25 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:01:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:03:06 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:03:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:03:50 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:03:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:03:50 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:03:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:04:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:04:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:04:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:04:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:04:19 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:04:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:04:24 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:04:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:04:32 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:04:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:04:32 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:04:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:16:30 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', 'Batsman', 'sample', '0','0','0','','sdfsdf','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 11:16:30 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 11:16:38 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', 'Batsman', 'sample', '0','0','0','','sdfsdf','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 11:16:38 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-11 11:17:57 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:17:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:17:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:17:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:19:42 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:19:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:19:43 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:19:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:27:20 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:27:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:27:20 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:27:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:27:26 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:27:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:27:26 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:27:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:27:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:27:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:44:04 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:44:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:44:04 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:44:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:45:11 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:45:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:45:11 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:45:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:45:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pve ~ APPPATH\classes\model\characterDetail.php [ 18 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 11:45:13 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 18, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(47): Model_CharacterDetail->add_character('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_post()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 11:46:26 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:46:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:46:26 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:46:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:46:33 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:46:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:46:33 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:46:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:46:41 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:46:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:46:42 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:46:43 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:46:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:46:44 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:46:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:46:52 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:46:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:46:52 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:46:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:46:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pve ~ APPPATH\classes\model\characterDetail.php [ 18 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 11:46:56 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 18, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(47): Model_CharacterDetail->add_character('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_post()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 11:46:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:46:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:46:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:46:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:47:41 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:47:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:47:41 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:47:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:47:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pve ~ APPPATH\classes\model\characterDetail.php [ 18 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 11:47:44 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 18, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(47): Model_CharacterDetail->add_character('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_post()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 11:47:46 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:47:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:47:46 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:47:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:50:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:50:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:50:06 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:50:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:50:52 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:50:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:50:52 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:50:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:54:48 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:54:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 11:54:48 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 11:54:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:00:32 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:00:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:00:32 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:00:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:01:20 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:01:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:01:20 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:01:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:03:27 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:03:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:03:27 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:03:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:03:46 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:03:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:03:46 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:03:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:03:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:03:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:03:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:03:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:04:30 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:04:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:04:31 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:04:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:04:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pve ~ APPPATH\classes\model\characterDetail.php [ 18 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 12:04:44 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 18, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(47): Model_CharacterDetail->add_character('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_post()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 12:04:47 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:04:47 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:07:41 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:07:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:07:41 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:07:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:09:22 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:09:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:11:06 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:11:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:13:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:13:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:13:59 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:13:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:14:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pve ~ APPPATH\classes\model\characterDetail.php [ 18 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 12:14:07 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 18, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(47): Model_CharacterDetail->add_character('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_post()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 12:14:13 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:14:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:14:15 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:14:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:14:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pve ~ APPPATH\classes\model\characterDetail.php [ 18 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 12:14:20 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 18, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(47): Model_CharacterDetail->add_character('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_post()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 12:15:03 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:15:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:15:05 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:15:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:16:39 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:16:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:16:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pve ~ APPPATH\classes\model\characterDetail.php [ 18 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 12:16:47 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 18, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(47): Model_CharacterDetail->add_character('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_post()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 12:17:20 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:17:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:17:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pve ~ APPPATH\classes\model\characterDetail.php [ 18 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 12:17:26 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 18, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(47): Model_CharacterDetail->add_character('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_post()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 12:17:45 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:17:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:17:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pve ~ APPPATH\classes\model\characterDetail.php [ 18 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 12:17:54 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 18, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(47): Model_CharacterDetail->add_character('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_post()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:18
2013-04-11 12:18:45 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:18:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:18:51 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:18:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:19:15 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:19:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:19:15 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:19:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:19:21 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:19:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:20:47 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:20:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:24:01 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:24:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:26:41 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:26:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:27:07 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:27:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:27:41 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:27:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:28:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:28:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:28:22 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:28:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:30:54 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:30:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-11 12:31:58 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-11 12:31:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :