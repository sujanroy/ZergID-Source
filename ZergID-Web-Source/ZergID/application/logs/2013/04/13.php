<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-13 01:29:27 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-13 01:29:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'images/popup-cl...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-13 01:29:35 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-13 01:29:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'images/popup-cl...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-13 01:29:43 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-13 01:29:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'images/popup-cl...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-13 01:29:51 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-13 01:29:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'images/popup-cl...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-13 01:30:28 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-13 01:30:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'images/popup-cl...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-13 04:39:29 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'No Guilds yet', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:39:29 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(20): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:41:04 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'No Guilds yet', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:41:04 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(20): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:45:32 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'No Guilds yet', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:45:32 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(20): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:45:38 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'No Guilds yet', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:45:38 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(20): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:48:13 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'No Guilds yet', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:48:13 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(20): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:48:19 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'No Guilds yet', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:48:19 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(20): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:48:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pve ~ APPPATH\classes\model\characterDetail.php [ 19 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:19
2013-04-13 04:48:28 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 19, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(47): Model_CharacterDetail->add_character('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_post()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:19
2013-04-13 04:49:07 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'No Guilds yet', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 04:49:07 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(20): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 05:02:26 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'c_game_id' at row 1 [ CALL add_character('53',1,'','1', '1', '1', '1', '1', '1', '1', '', 'No Guilds yet', '0','0','0','','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 05:02:26 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_charac...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(20): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(56): Model_CharacterDetail->add_character('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 05:23:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: pve ~ APPPATH\classes\model\characterDetail.php [ 26 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:26
2013-04-13 05:23:58 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 26, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(105): Model_CharacterDetail->update_character('53', '22', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:26
2013-04-13 05:40:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: char_id ~ APPPATH\classes\Controller\character.php [ 57 ] in D:\wamp\www\zergid\application\classes\Controller\character.php:57
2013-04-13 05:40:08 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\Controller\character.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 57, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#7 {main} in D:\wamp\www\zergid\application\classes\Controller\character.php:57
2013-04-13 05:42:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: level ~ APPPATH\classes\model\characterDetail.php [ 26 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:26
2013-04-13 05:42:01 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 26, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(58): Model_CharacterDetail->update_character('53', NULL, Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:26
2013-04-13 05:46:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: level ~ APPPATH\classes\model\characterDetail.php [ 26 ] in D:\wamp\www\zergid\application\classes\model\characterDetail.php:26
2013-04-13 05:46:53 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\characterDetail.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 26, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(58): Model_CharacterDetail->update_character('53', NULL, Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\characterDetail.php:26
2013-04-13 05:47:39 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1,'1', '1', '1', '1', '1', '1', '1', 'No Guilds yet', '0','0','0','50','This is ' at line 1 [ CALL update_character('53',,1,'1', '1', '1', '1', '1', '1', '1', 'No Guilds yet', '0','0','0','50','This is for testing','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 05:47:39 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL update_cha...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(27): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(58): Model_CharacterDetail->update_character('53', NULL, Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 05:57:26 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1,'1', '1', '1', '1', '1', '1', '1', 'No Guilds yet', '0','0','0','50','','0')' at line 1 [ CALL update_character('53',,1,'1', '1', '1', '1', '1', '1', '1', 'No Guilds yet', '0','0','0','50','','0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 05:57:26 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'CALL update_cha...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\characterDetail.php(27): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(60): Model_CharacterDetail->update_character('53', NULL, Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_save()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 09:01:42 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-13 09:01:42 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
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
2013-04-13 09:08:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: character_id ~ APPPATH\classes\model\message.php [ 10 ] in D:\wamp\www\zergid\application\classes\model\message.php:10
2013-04-13 09:08:08 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\message.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 10, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(125): Model_Message->add_message('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\message.php:10
2013-04-13 09:13:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: parent_message ~ APPPATH\classes\model\message.php [ 10 ] in D:\wamp\www\zergid\application\classes\model\message.php:10
2013-04-13 09:13:07 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\message.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 10, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(125): Model_Message->add_message('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\message.php:10
2013-04-13 09:24:42 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'm_parent_message_id' at row 1 [ CALL add_message('53',null,'76','null', 'My game is not listed', 'My game', '0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 09:24:42 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_messag...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\message.php(11): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(125): Model_Message->add_message('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 09:30:55 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'm_parent_message_id' at row 1 [ CALL add_message('53',null,'76','null', 'My game is not listed', 'My game', '0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 09:30:55 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_messag...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\message.php(11): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(125): Model_Message->add_message('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 09:31:51 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'm_parent_message_id' at row 1 [ CALL add_message('53',null,'76','', 'My game is not listed', 'sdfsdfs', '0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 09:31:51 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_messag...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\message.php(11): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(125): Model_Message->add_message('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 09:44:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: character_id ~ APPPATH\classes\model\message.php [ 10 ] in D:\wamp\www\zergid\application\classes\model\message.php:10
2013-04-13 09:44:07 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\message.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 10, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(125): Model_Message->add_message('53', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\message.php:10
2013-04-13 09:47:30 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-13 09:47:30 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Session\Database.php(74): Kohana_Session->__construct(Array, NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Session.php(54): Kohana_Session_Database->__construct(Array, NULL)
#3 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('database')
#4 D:\wamp\www\zergid\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#5 D:\wamp\www\zergid\application\classes\Controller\template\user.php(14): Kohana_Auth::instance()
#6 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(69): Controller_Template_User->before()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#9 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#12 {main} in D:\wamp\www\zergid\system\classes\Kohana\Session.php:125
2013-04-13 09:47:44 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'm_parent_message_id' at row 1 [ CALL add_message('53',null,'76','null', 'My game is not listed', 'My game', '0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 09:47:44 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_messag...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\message.php(11): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(125): Model_Message->add_message('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 09:53:31 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'm_parent_message_id' at row 1 [ CALL add_message('53',null,'76','NULL', 'My game is not listed', 'sdfsdf', '0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 09:53:31 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_messag...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\message.php(11): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(125): Model_Message->add_message('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 09:54:56 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'm_parent_message_id' at row 1 [ CALL add_message('53',null,'76','null', 'My game is not listed', 'Testing..', '0'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-13 09:54:56 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_messag...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\message.php(11): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\character.php(125): Model_Message->add_message('53', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251