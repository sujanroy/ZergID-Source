<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-16 00:12:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$guild_member_id ~ APPPATH/views/guild/members.php [ 23 ] in /var/www/html/zergid/application/views/guild/members.php:23
2013-05-16 00:12:53 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/z...', 23, Array)
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
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:23
2013-05-16 00:13:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$guild_member_id ~ APPPATH/views/guild/members.php [ 23 ] in /var/www/html/zergid/application/views/guild/members.php:23
2013-05-16 00:13:35 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/z...', 23, Array)
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
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:23
2013-05-16 00:17:15 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-16 00:17:15 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(344): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_members()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-16 00:21:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$guild_member_id ~ APPPATH/views/guild/members.php [ 23 ] in /var/www/html/zergid/application/views/guild/members.php:23
2013-05-16 00:21:14 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/z...', 23, Array)
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
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:23
2013-05-16 00:22:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: guild_member ~ APPPATH/views/guild/members.php [ 23 ] in /var/www/html/zergid/application/views/guild/members.php:23
2013-05-16 00:22:35 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 23, Array)
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
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:23
2013-05-16 00:23:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$guild_member_id ~ APPPATH/views/guild/members.php [ 23 ] in /var/www/html/zergid/application/views/guild/members.php:23
2013-05-16 00:23:46 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/z...', 23, Array)
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
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:23
2013-05-16 00:23:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$guild_member_id ~ APPPATH/views/guild/members.php [ 23 ] in /var/www/html/zergid/application/views/guild/members.php:23
2013-05-16 00:23:58 --- DEBUG: #0 /var/www/html/zergid/application/views/guild/members.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/html/z...', 23, Array)
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
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/guild/members.php:23
2013-05-16 00:42:55 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory public/uploads/guild/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-16 00:42:55 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Guild.php(187): Kohana_Upload::save(Array, NULL, 'public/uploads/...')
#1 /var/www/html/zergid/application/classes/Controller/Guild.php(61): Controller_Guild->save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-16 00:45:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory public/uploads/guild/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-16 00:45:01 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Guild.php(187): Kohana_Upload::save(Array, NULL, 'public/uploads/...')
#1 /var/www/html/zergid/application/classes/Controller/Guild.php(61): Controller_Guild->save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-16 00:49:44 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory public/uploads/guild/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-16 00:49:44 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Guild.php(187): Kohana_Upload::save(Array, NULL, 'public/uploads/...')
#1 /var/www/html/zergid/application/classes/Controller/Guild.php(61): Controller_Guild->save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-16 00:50:55 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory public/uploads/guild/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-16 00:50:55 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Guild.php(187): Kohana_Upload::save(Array, NULL, 'public/uploads/...')
#1 /var/www/html/zergid/application/classes/Controller/Guild.php(61): Controller_Guild->save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-16 00:51:57 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory public/uploads/guild/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-16 00:51:57 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Guild.php(187): Kohana_Upload::save(Array, NULL, 'public/uploads/...')
#1 /var/www/html/zergid/application/classes/Controller/Guild.php(61): Controller_Guild->save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-16 00:56:57 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 00:56:57 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 00:57:03 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 00:57:03 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 00:57:08 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 00:57:08 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 00:58:43 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 00:58:43 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 01:04:23 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 01:04:23 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 01:09:46 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 01:09:46 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 01:12:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 01:12:07 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 01:22:09 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:22:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:22:09 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:22:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:24:58 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'GuildMembers.guild_id' in 'where clause' [ SELECT `zid_character_details`.`character_detail_id`, `zid_character_details`.`character_icon`, `zid_character_details`.`character_name`, `zid_guild_roles`.`role_name`, `zid_guild_roles`.`guild_role_id`, `guildmembers`.`guild_member_id` AS `guild_member_id`, `guildmembers`.`guild_id` AS `guild_id`, `guildmembers`.`user_id` AS `user_id`, `guildmembers`.`character_detail_id` AS `character_detail_id`, `guildmembers`.`guild_role_id` AS `guild_role_id`, `guildmembers`.`guild_play_style` AS `guild_play_style`, `guildmembers`.`about_character` AS `about_character`, `guildmembers`.`is_speaker_available` AS `is_speaker_available`, `guildmembers`.`is_headset_available` AS `is_headset_available`, `guildmembers`.`is_voice_chat_available` AS `is_voice_chat_available`, `guildmembers`.`is_accepted` AS `is_accepted`, `guildmembers`.`created_date` AS `created_date`, `guildmembers`.`last_modified_date` AS `last_modified_date` FROM `zid_guild_members` AS `guildmembers` INNER JOIN `zid_character_details` ON (`zid_character_details`.`character_detail_id` = `GuildMembers`.`character_detail_id`) INNER JOIN `zid_guild_roles` ON (`zid_guild_roles`.`guild_role_id` = `GuildMembers`.`guild_role_id`) WHERE `GuildMembers`.`guild_id` = '3' AND `GuildMembers`.`is_accepted` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-16 01:24:58 --- DEBUG: #0 /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `zid_cha...', 'Model_GuildMemb...', Array)
#1 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/html/zergid/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /var/www/html/zergid/application/classes/Controller/Guild.php(436): Kohana_ORM->find_all()
#4 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_guildmembers()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#7 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/zergid/modules/database/classes/Kohana/Database/Query.php:251
2013-05-16 01:32:58 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/profile/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-16 01:32:58 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/User.php(55): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/User.php(36): Controller_User->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_User->action_profileimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-16 01:33:29 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/profile/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-16 01:33:29 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/User.php(55): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/User.php(36): Controller_User->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_User->action_profileimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/User.php:55
2013-05-16 01:36:38 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:36:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:36:38 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:36:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:36:38 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:36:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:36:38 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:36:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:36:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:36:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:36:40 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:36:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:36:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:36:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:36:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:36:42 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:36:45 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:36:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:36:45 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:36:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:36:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-16 01:36:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-16 01:36:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_game' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-05-16 01:36:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-16 01:37:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:37:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:37:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:37:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:37:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:37:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:37:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:37:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:39:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:39:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:39:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:39:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:39:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:39:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:39:31 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:39:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:50:00 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:50:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:50:00 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:50:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:50:00 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:50:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:50:00 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:50:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:52:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:52:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:52:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:52:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:52:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:52:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:52:08 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 01:52:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 01:52:22 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/classes/Controller/Character.php [ 99 ] in :
2013-05-16 01:52:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/var/www/html/z...', 99, Array)
#1 /var/www/html/zergid/application/classes/Controller/Character.php(99): mkdir('/var/www/html/z...')
#2 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-16 01:56:36 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/classes/Controller/Character.php [ 99 ] in :
2013-05-16 01:56:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/var/www/html/z...', 99, Array)
#1 /var/www/html/zergid/application/classes/Controller/Character.php(99): mkdir('/var/www/html/z...')
#2 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-16 02:01:58 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/classes/Controller/Character.php [ 99 ] in :
2013-05-16 02:01:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/var/www/html/z...', 99, Array)
#1 /var/www/html/zergid/application/classes/Controller/Character.php(99): mkdir('/var/www/html/z...')
#2 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-16 02:02:24 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:101
2013-05-16 02:02:24 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(101): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:101
2013-05-16 02:07:19 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:101
2013-05-16 02:07:19 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(101): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:101
2013-05-16 02:08:02 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:101
2013-05-16 02:08:02 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(101): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:101
2013-05-16 02:08:31 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:101
2013-05-16 02:08:31 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(101): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:101
2013-05-16 02:19:17 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:19:17 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:22:13 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:22:13 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:35:06 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:35:06 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:35:15 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:35:15 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:38:37 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:38:37 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:40:10 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:40:10 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:41:09 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:41:09 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:58:29 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 02:58:29 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 03:02:55 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 03:02:55 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 03:04:05 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 03:04:05 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 03:06:53 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 03:06:53 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 03:52:43 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 03:52:43 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 03:54:56 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 03:54:56 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 04:17:07 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 04:17:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 04:17:07 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 04:17:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 04:17:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 04:17:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 04:17:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 04:17:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 04:17:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 04:17:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 04:25:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 04:25:59 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 04:35:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/classes/Controller/Character.php [ 105 ] in /var/www/html/zergid/application/classes/Controller/Character.php:105
2013-05-16 04:35:10 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(105): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 105, Array)
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:105
2013-05-16 04:36:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/Controller/Character.php [ 106 ] in :
2013-05-16 04:36:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-16 04:37:39 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 04:37:39 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 04:38:48 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/classes/Controller/Character.php [ 99 ] in :
2013-05-16 04:38:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/var/www/html/z...', 99, Array)
#1 /var/www/html/zergid/application/classes/Controller/Character.php(99): mkdir('/var/www/html/z...')
#2 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-16 04:39:26 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/classes/Controller/Character.php [ 99 ] in :
2013-05-16 04:39:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/var/www/html/z...', 99, Array)
#1 /var/www/html/zergid/application/classes/Controller/Character.php(99): mkdir('/var/www/html/z...')
#2 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-16 04:40:01 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/classes/Controller/Character.php [ 99 ] in :
2013-05-16 04:40:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/var/www/html/z...', 99, Array)
#1 /var/www/html/zergid/application/classes/Controller/Character.php(99): mkdir('public/uploads/...')
#2 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-05-16 04:54:36 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 04:54:36 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 05:04:05 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 05:04:05 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 05:05:19 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 05:05:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 05:05:19 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 05:05:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 05:05:19 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 05:05:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/js/ajaxu...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 05:05:19 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-05-16 05:05:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'public/ajaxuplo...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-05-16 05:07:22 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 05:07:22 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 05:07:28 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 05:07:28 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 05:09:34 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory public/uploads/guild/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-16 05:09:34 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Guild.php(187): Kohana_Upload::save(Array, NULL, 'public/uploads/...')
#1 /var/www/html/zergid/application/classes/Controller/Guild.php(61): Controller_Guild->save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Guild->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Guild))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Guild.php:187
2013-05-16 05:27:36 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/application ~ MODPATH/image/classes/Kohana/Image.php [ 631 ] in /var/www/html/zergid/application/classes/Controller/Character.php:106
2013-05-16 05:27:36 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(106): Kohana_Image->save('application/cac...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:106
2013-05-16 05:27:42 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory must be writable: DOCROOT/application ~ MODPATH/image/classes/Kohana/Image.php [ 631 ] in /var/www/html/zergid/application/classes/Controller/Character.php:106
2013-05-16 05:27:42 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(106): Kohana_Image->save('application/cac...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:106
2013-05-16 05:29:50 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory MODPATH/application/cache must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 05:29:50 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 06:15:49 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/public/uploads/character/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/html/zergid/application/classes/Controller/Character.php:102
2013-05-16 06:15:49 --- DEBUG: #0 /var/www/html/zergid/application/classes/Controller/Character.php(102): Kohana_Upload::save(Array, NULL, '/var/www/html/z...')
#1 /var/www/html/zergid/application/classes/Controller/Character.php(74): Controller_Character->_save_image(Array)
#2 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_Character->action_saveimage()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Character))
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/html/zergid/application/classes/Controller/Character.php:102