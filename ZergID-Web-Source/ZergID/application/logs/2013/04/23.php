<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-23 01:00:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: character_id ~ APPPATH\classes\model\message.php [ 10 ] in D:\wamp\www\zergid\application\classes\model\message.php:10
2013-04-23 01:00:42 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\message.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 10, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(313): Model_Message->add_message('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\message.php:10
2013-04-23 01:37:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: character_id ~ APPPATH\classes\model\message.php [ 10 ] in D:\wamp\www\zergid\application\classes\model\message.php:10
2013-04-23 01:37:48 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\message.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 10, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(313): Model_Message->add_message('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\message.php:10
2013-04-23 02:47:42 --- CRITICAL: Database_Exception [ 1264 ]: Out of range value adjusted for column 'mem_guild_id' at row 1 [ CALL add_members('', '83','42','1','This is for testing','1','1','1'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 02:47:42 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'CALL add_member...', false, Array)
#1 D:\wamp\www\zergid\application\classes\model\guild.php(35): Kohana_Database_Query->execute()
#2 D:\wamp\www\zergid\application\classes\Controller\guild.php(265): Model_Guild->add_members('83', NULL, Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#9 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 04:55:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: playrole ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 04:55:43 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 04:56:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: playrole ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 04:56:41 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 04:57:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: playrole ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 04:57:23 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 04:58:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: playrole ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 04:58:06 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 04:59:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: playrole ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 04:59:10 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 04:59:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: playrole ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 04:59:59 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:00:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: playrole ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:00:18 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:06:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: guild_id ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:06:01 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:07:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: guild_id ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:07:54 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:09:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: guild_id ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:09:53 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:10:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: playrole ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:10:18 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:18:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: playrole ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:18:36 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:19:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: playrole ~ APPPATH\classes\model\guild.php [ 34 ] in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:19:37 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\guild.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 34, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(264): Model_Guild->add_members('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_apply_membership()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\guild.php:34
2013-04-23 05:23:26 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 05:23:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 05:24:36 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 05:24:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 05:24:36 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 05:24:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 05:24:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 05:24:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 05:33:10 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 05:33:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 05:45:51 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 05:45:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 06:24:57 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 06:24:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'user/others//53', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 07:23:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  play_role ~ APPPATH\views\guild\other_left_bar.php [ 27 ] in D:\wamp\www\zergid\application\views\guild\other_left_bar.php:27
2013-04-23 07:23:57 --- DEBUG: #0 D:\wamp\www\zergid\application\views\guild\other_left_bar.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 27, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\user.php(91): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\guild\other_left_bar.php:27
2013-04-23 07:24:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  play_role ~ APPPATH\views\guild\other_left_bar.php [ 27 ] in D:\wamp\www\zergid\application\views\guild\other_left_bar.php:27
2013-04-23 07:24:37 --- DEBUG: #0 D:\wamp\www\zergid\application\views\guild\other_left_bar.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 27, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\user.php(91): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\guild\other_left_bar.php:27
2013-04-23 07:40:32 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\guild\other_left_bar.php [ 29 ] in D:\wamp\www\zergid\application\views\guild\other_left_bar.php:29
2013-04-23 07:40:32 --- DEBUG: #0 D:\wamp\www\zergid\application\views\guild\other_left_bar.php(29): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\wamp\www\zer...', 29, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\user.php(91): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\guild\other_left_bar.php:29
2013-04-23 07:40:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 0 ~ APPPATH\views\guild\other_left_bar.php [ 29 ] in D:\wamp\www\zergid\application\views\guild\other_left_bar.php:29
2013-04-23 07:40:44 --- DEBUG: #0 D:\wamp\www\zergid\application\views\guild\other_left_bar.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 29, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\user.php(91): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\user.php(64): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\guild\other_left_bar.php:29
2013-04-23 08:39:18 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 08:39:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 08:39:19 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 08:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 08:39:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: guild_id ~ APPPATH\classes\model\message.php [ 9 ] in D:\wamp\www\zergid\application\classes\model\message.php:9
2013-04-23 08:39:35 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\message.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 9, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(313): Model_Message->add_message('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\message.php:9
2013-04-23 08:45:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 08:45:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 08:45:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 08:45:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 08:45:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 08:45:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 08:45:00 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 08:45:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 08:45:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: guild_id ~ APPPATH\classes\model\message.php [ 9 ] in D:\wamp\www\zergid\application\classes\model\message.php:9
2013-04-23 08:45:06 --- DEBUG: #0 D:\wamp\www\zergid\application\classes\model\message.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\zer...', 9, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\character.php(313): Model_Message->add_message('83', Array)
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_character->action_gamerequest()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_character))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\application\classes\model\message.php:9
2013-04-23 08:53:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 08:53:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 08:53:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 08:53:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 08:53:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 08:53:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 08:55:08 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 08:55:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 08:55:08 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 08:55:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 08:55:08 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 08:55:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 09:26:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_GuildMembers' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-04-23 09:26:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-23 09:27:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_guildmembers' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-04-23 09:27:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-23 09:53:39 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 09:53:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 09:54:37 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 09:54:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 09:54:38 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 09:54:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 09:55:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 09:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 09:55:29 --- CRITICAL: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 113 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in :
2013-04-23 09:55:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\wamp\www\zer...', 420, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\Route.php(420): preg_match('#^(?:(?P<direct...', 'public/uploads/...', NULL)
#2 D:\wamp\www\zergid\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 D:\wamp\www\zergid\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-04-23 12:36:59 --- CRITICAL: Database_Exception [ 1146 ]: Table 'bulkdb_zergid.characterdetail' doesn't exist [ SELECT `GuildMembers`.`guild_member_id` AS `CharacterDetail.character_icon`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `CharacterDetail` ON (`CharacterDetail`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `guildrole` ON (`guildrole`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '118' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:36:59 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `GuildMe...', 'Model_GuildMemb...', Array)
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\wamp\www\zergid\application\classes\Controller\guild.php(294): Kohana_ORM->find_all()
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:41:12 --- CRITICAL: Database_Exception [ 1146 ]: Table 'bulkdb_zergid.characterdetail' doesn't exist [ SELECT `GuildMembers`.`guild_member_id`, `CharacterDetail`.`character_icon`, `CharacterDetail`.`character_name`, `guildrole`.`role_name`, `guildrole`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `CharacterDetail` ON (`CharacterDetail`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `guildrole` ON (`guildrole`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '118' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:41:12 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `GuildMe...', 'Model_GuildMemb...', Array)
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\wamp\www\zergid\application\classes\Controller\guild.php(294): Kohana_ORM->find_all()
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:42:22 --- CRITICAL: Database_Exception [ 1066 ]: Not unique table/alias: 'CharacterDetail' [ SELECT `GuildMembers`.`guild_member_id`, `CharacterDetail`.`character_icon`, `CharacterDetail`.`character_name`, `guildrole`.`role_name`, `guildrole`.`guild_role_id`, `characterdetail`.`character_detail_id` AS `character_detail_id`, `characterdetail`.`user_id` AS `user_id`, `characterdetail`.`game_id` AS `game_id`, `characterdetail`.`character_id` AS `character_id`, `characterdetail`.`server_id` AS `server_id`, `characterdetail`.`faction_id` AS `faction_id`, `characterdetail`.`class_id` AS `class_id`, `characterdetail`.`profession1_id` AS `profession1_id`, `characterdetail`.`profession2_id` AS `profession2_id`, `characterdetail`.`profession3_id` AS `profession3_id`, `characterdetail`.`media_info_id` AS `media_info_id`, `characterdetail`.`character_icon` AS `character_icon`, `characterdetail`.`character_name` AS `character_name`, `characterdetail`.`guild_text` AS `guild_text`, `characterdetail`.`is_pve_enabled` AS `is_pve_enabled`, `characterdetail`.`is_pvp_enabled` AS `is_pvp_enabled`, `characterdetail`.`is_rp_enabled` AS `is_rp_enabled`, `characterdetail`.`level` AS `level`, `characterdetail`.`is_public` AS `is_public`, `characterdetail`.`mini_bio` AS `mini_bio`, `characterdetail`.`is_minibio_enabled` AS `is_minibio_enabled`, `characterdetail`.`created_date` AS `created_date`, `characterdetail`.`last_modified_date` AS `last_modified_date` FROM `zid_character_details` AS `characterdetail` INNER JOIN `CharacterDetail` ON (`CharacterDetail`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `guildrole` ON (`guildrole`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '118' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:42:22 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `GuildMe...', 'Model_Character...', Array)
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\wamp\www\zergid\application\classes\Controller\guild.php(294): Kohana_ORM->find_all()
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:43:01 --- CRITICAL: Database_Exception [ 1146 ]: Table 'bulkdb_zergid.characterdetail' doesn't exist [ SELECT `GuildMembers`.`guild_member_id`, `CharacterDetail`.`character_icon`, `CharacterDetail`.`character_name`, `guildrole`.`role_name`, `guildrole`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `CharacterDetail` ON (`CharacterDetail`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `guildrole` ON (`guildrole`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '118' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:43:01 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `GuildMe...', 'Model_GuildMemb...', Array)
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\wamp\www\zergid\application\classes\Controller\guild.php(294): Kohana_ORM->find_all()
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:43:52 --- CRITICAL: Database_Exception [ 1066 ]: Not unique table/alias: 'CharacterDetail' [ SELECT `GuildMembers`.`guild_member_id`, `CharacterDetail`.`character_icon`, `CharacterDetail`.`character_name`, `guildrole`.`role_name`, `guildrole`.`guild_role_id`, `characterdetail`.`character_detail_id` AS `character_detail_id`, `characterdetail`.`user_id` AS `user_id`, `characterdetail`.`game_id` AS `game_id`, `characterdetail`.`character_id` AS `character_id`, `characterdetail`.`server_id` AS `server_id`, `characterdetail`.`faction_id` AS `faction_id`, `characterdetail`.`class_id` AS `class_id`, `characterdetail`.`profession1_id` AS `profession1_id`, `characterdetail`.`profession2_id` AS `profession2_id`, `characterdetail`.`profession3_id` AS `profession3_id`, `characterdetail`.`media_info_id` AS `media_info_id`, `characterdetail`.`character_icon` AS `character_icon`, `characterdetail`.`character_name` AS `character_name`, `characterdetail`.`guild_text` AS `guild_text`, `characterdetail`.`is_pve_enabled` AS `is_pve_enabled`, `characterdetail`.`is_pvp_enabled` AS `is_pvp_enabled`, `characterdetail`.`is_rp_enabled` AS `is_rp_enabled`, `characterdetail`.`level` AS `level`, `characterdetail`.`is_public` AS `is_public`, `characterdetail`.`mini_bio` AS `mini_bio`, `characterdetail`.`is_minibio_enabled` AS `is_minibio_enabled`, `characterdetail`.`created_date` AS `created_date`, `characterdetail`.`last_modified_date` AS `last_modified_date` FROM `zid_character_details` AS `characterdetail` INNER JOIN `CharacterDetail` ON (`CharacterDetail`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `guildrole` ON (`guildrole`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '118' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:43:52 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `GuildMe...', 'Model_Character...', Array)
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\wamp\www\zergid\application\classes\Controller\guild.php(294): Kohana_ORM->find_all()
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:50:16 --- CRITICAL: Database_Exception [ 1146 ]: Table 'bulkdb_zergid.characterdetail' doesn't exist [ SELECT `GuildMembers`.`guild_member_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `CharacterDetail` ON (`CharacterDetail`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `guildrole` ON (`guildrole`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '118' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:50:16 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `GuildMe...', 'Model_GuildMemb...', Array)
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\wamp\www\zergid\application\classes\Controller\guild.php(294): Kohana_ORM->find_all()
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:50:44 --- CRITICAL: Database_Exception [ 1146 ]: Table 'bulkdb_zergid.characterdetail' doesn't exist [ SELECT `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `CharacterDetail` ON (`CharacterDetail`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `guildrole` ON (`guildrole`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '118' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:50:44 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `guildme...', 'Model_GuildMemb...', Array)
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\wamp\www\zergid\application\classes\Controller\guild.php(293): Kohana_ORM->find_all()
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:51:05 --- CRITICAL: Database_Exception [ 1066 ]: Not unique table/alias: 'CharacterDetail' [ SELECT `characterdetail`.`character_detail_id` AS `character_detail_id`, `characterdetail`.`user_id` AS `user_id`, `characterdetail`.`game_id` AS `game_id`, `characterdetail`.`character_id` AS `character_id`, `characterdetail`.`server_id` AS `server_id`, `characterdetail`.`faction_id` AS `faction_id`, `characterdetail`.`class_id` AS `class_id`, `characterdetail`.`profession1_id` AS `profession1_id`, `characterdetail`.`profession2_id` AS `profession2_id`, `characterdetail`.`profession3_id` AS `profession3_id`, `characterdetail`.`media_info_id` AS `media_info_id`, `characterdetail`.`character_icon` AS `character_icon`, `characterdetail`.`character_name` AS `character_name`, `characterdetail`.`guild_text` AS `guild_text`, `characterdetail`.`is_pve_enabled` AS `is_pve_enabled`, `characterdetail`.`is_pvp_enabled` AS `is_pvp_enabled`, `characterdetail`.`is_rp_enabled` AS `is_rp_enabled`, `characterdetail`.`level` AS `level`, `characterdetail`.`is_public` AS `is_public`, `characterdetail`.`mini_bio` AS `mini_bio`, `characterdetail`.`is_minibio_enabled` AS `is_minibio_enabled`, `characterdetail`.`created_date` AS `created_date`, `characterdetail`.`last_modified_date` AS `last_modified_date` FROM `zid_character_details` AS `characterdetail` INNER JOIN `CharacterDetail` ON (`CharacterDetail`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `guildrole` ON (`guildrole`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '118' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:51:05 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `charact...', 'Model_Character...', Array)
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\wamp\www\zergid\application\classes\Controller\guild.php(293): Kohana_ORM->find_all()
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:54:14 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::factory(), called in D:\wamp\www\zergid\application\classes\Controller\guild.php on line 286 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 41 ] in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:41
2013-04-23 12:54:14 --- DEBUG: #0 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(41): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\zer...', 41, Array)
#1 D:\wamp\www\zergid\application\classes\Controller\guild.php(286): Kohana_ORM::factory()
#2 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_members()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#5 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#8 {main} in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:41
2013-04-23 12:54:48 --- CRITICAL: Database_Exception [ 1066 ]: Not unique table/alias: 'CharacterDetail' [ SELECT `GuildMembers`.`guild_member_id`, `CharacterDetail`.`character_icon`, `CharacterDetail`.`character_name`, `guildrole`.`role_name`, `guildrole`.`guild_role_id`, `characterdetail`.`character_detail_id` AS `character_detail_id`, `characterdetail`.`user_id` AS `user_id`, `characterdetail`.`game_id` AS `game_id`, `characterdetail`.`character_id` AS `character_id`, `characterdetail`.`server_id` AS `server_id`, `characterdetail`.`faction_id` AS `faction_id`, `characterdetail`.`class_id` AS `class_id`, `characterdetail`.`profession1_id` AS `profession1_id`, `characterdetail`.`profession2_id` AS `profession2_id`, `characterdetail`.`profession3_id` AS `profession3_id`, `characterdetail`.`media_info_id` AS `media_info_id`, `characterdetail`.`character_icon` AS `character_icon`, `characterdetail`.`character_name` AS `character_name`, `characterdetail`.`guild_text` AS `guild_text`, `characterdetail`.`is_pve_enabled` AS `is_pve_enabled`, `characterdetail`.`is_pvp_enabled` AS `is_pvp_enabled`, `characterdetail`.`is_rp_enabled` AS `is_rp_enabled`, `characterdetail`.`level` AS `level`, `characterdetail`.`is_public` AS `is_public`, `characterdetail`.`mini_bio` AS `mini_bio`, `characterdetail`.`is_minibio_enabled` AS `is_minibio_enabled`, `characterdetail`.`created_date` AS `created_date`, `characterdetail`.`last_modified_date` AS `last_modified_date` FROM `zid_character_details` AS `characterdetail` INNER JOIN `CharacterDetail` ON (`CharacterDetail`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `guildrole` ON (`guildrole`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '118' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 12:54:48 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `GuildMe...', 'Model_Character...', Array)
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\wamp\www\zergid\application\classes\Controller\guild.php(294): Kohana_ORM->find_all()
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 23:56:58 --- CRITICAL: Database_Exception [ 1066 ]: Not unique table/alias: 'CharacterDetail' [ SELECT `GuildMembers`.`guild_member_id`, `CharacterDetail`.`character_icon`, `CharacterDetail`.`character_name`, `guildrole`.`role_name`, `guildrole`.`guild_role_id`, `characterdetail`.`character_detail_id` AS `character_detail_id`, `characterdetail`.`user_id` AS `user_id`, `characterdetail`.`game_id` AS `game_id`, `characterdetail`.`character_id` AS `character_id`, `characterdetail`.`server_id` AS `server_id`, `characterdetail`.`faction_id` AS `faction_id`, `characterdetail`.`class_id` AS `class_id`, `characterdetail`.`profession1_id` AS `profession1_id`, `characterdetail`.`profession2_id` AS `profession2_id`, `characterdetail`.`profession3_id` AS `profession3_id`, `characterdetail`.`media_info_id` AS `media_info_id`, `characterdetail`.`character_icon` AS `character_icon`, `characterdetail`.`character_name` AS `character_name`, `characterdetail`.`guild_text` AS `guild_text`, `characterdetail`.`is_pve_enabled` AS `is_pve_enabled`, `characterdetail`.`is_pvp_enabled` AS `is_pvp_enabled`, `characterdetail`.`is_rp_enabled` AS `is_rp_enabled`, `characterdetail`.`level` AS `level`, `characterdetail`.`is_public` AS `is_public`, `characterdetail`.`mini_bio` AS `mini_bio`, `characterdetail`.`is_minibio_enabled` AS `is_minibio_enabled`, `characterdetail`.`created_date` AS `created_date`, `characterdetail`.`last_modified_date` AS `last_modified_date` FROM `zid_character_details` AS `characterdetail` INNER JOIN `CharacterDetail` ON (`CharacterDetail`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `guildrole` ON (`guildrole`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '118' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251
2013-04-23 23:56:58 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `GuildMe...', 'Model_Character...', Array)
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 D:\wamp\www\zergid\application\classes\Controller\guild.php(294): Kohana_ORM->find_all()
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_guild))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\Query.php:251