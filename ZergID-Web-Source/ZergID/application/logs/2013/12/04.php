<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-04 00:57:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH/views/solrsearch/search.php [ 82 ] in :
2013-12-04 00:57:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-12-04 03:12:35 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-12-04 03:12:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'jQuery & Canvas...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-12-04 03:12:36 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-12-04 03:12:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'jQuery & Canvas...', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-12-04 03:12:36 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-12-04 03:12:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'img/one.jpg', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-12-04 03:24:42 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(http://localhost:8983/solr/select?wt=json&json.nl=map&q=charactername%3Ap%2A%20and%20game_name%3A&start=0&rows=100000): failed to open stream: HTTP request failed! HTTP/1.1 400 orgapachelucenequeryParserParseException_Cannot_parse_characternamep_and_game_name_Encountered_EOF_at_line_1_colu ~ MODPATH/kohana-solr-master/classes/Kohana/Solr.php [ 420 ] in :
2013-12-04 03:24:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/modules/kohana-solr-master/classes/Kohana/Solr.php(420): file_get_contents('http://localhos...')
#2 /var/www/html/zergid/application/classes/Controller/SolrSearch.php(163): Kohana_Solr->search('charactername:p...')
#3 /var/www/html/zergid/system/classes/Kohana/Controller.php(84): Controller_SolrSearch->action_options()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_SolrSearch))
#6 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-12-04 03:43:29 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/solrsearch/search.php [ 143 ] in /var/www/html/zergid/application/views/solrsearch/search.php:143
2013-12-04 03:43:29 --- DEBUG: #0 /var/www/html/zergid/application/views/solrsearch/search.php(143): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/html/z...', 143, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/solrsearch/index.php(1): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /var/www/html/zergid/application/views/template/user.php(73): Kohana_View->__toString()
#9 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#10 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#11 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /var/www/html/zergid/application/classes/Controller/Template/User.php(88): Kohana_Controller_Template->after()
#13 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_SolrSearch))
#16 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/html/zergid/application/views/solrsearch/search.php:143
2013-12-04 03:49:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function youtubeEmbedFromUrl() ~ APPPATH/views/solrsearch/search.php [ 155 ] in :
2013-12-04 03:49:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-12-04 03:49:56 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function youtubeEmbedFromUrl() ~ APPPATH/views/solrsearch/search.php [ 155 ] in :
2013-12-04 03:49:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-12-04 03:50:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function youtubeEmbedFromUrl() ~ APPPATH/views/solrsearch/search.php [ 155 ] in :
2013-12-04 03:50:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-12-04 03:50:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function youtubeEmbedFromUrl() ~ APPPATH/views/solrsearch/search.php [ 155 ] in :
2013-12-04 03:50:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-12-04 03:50:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function youtubeEmbedFromUrl() ~ APPPATH/views/solrsearch/search.php [ 155 ] in :
2013-12-04 03:50:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-12-04 03:50:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function youtubeEmbedFromUrl() ~ APPPATH/views/solrsearch/search.php [ 155 ] in :
2013-12-04 03:50:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-12-04 03:51:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function youtubeEmbedFromUrl() ~ APPPATH/views/solrsearch/search.php [ 155 ] in :
2013-12-04 03:51:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-12-04 03:54:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: youtube_embed_script_view ~ APPPATH/views/solrsearch/search.php [ 31 ] in /var/www/html/zergid/application/views/solrsearch/search.php:31
2013-12-04 03:54:05 --- DEBUG: #0 /var/www/html/zergid/application/views/solrsearch/search.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 31, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/solrsearch/index.php(2): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /var/www/html/zergid/application/views/template/user.php(73): Kohana_View->__toString()
#9 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#10 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#11 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /var/www/html/zergid/application/classes/Controller/Template/User.php(88): Kohana_Controller_Template->after()
#13 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_SolrSearch))
#16 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/html/zergid/application/views/solrsearch/search.php:31
2013-12-04 03:59:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: youtube_embed_script_view ~ APPPATH/views/solrsearch/index.php [ 1 ] in /var/www/html/zergid/application/views/solrsearch/index.php:1
2013-12-04 03:59:20 --- DEBUG: #0 /var/www/html/zergid/application/views/solrsearch/index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/z...', 1, Array)
#1 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#2 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#3 /var/www/html/zergid/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/html/zergid/application/views/template/user.php(73): Kohana_View->__toString()
#5 /var/www/html/zergid/system/classes/Kohana/View.php(61): include('/var/www/html/z...')
#6 /var/www/html/zergid/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/html/z...', Array)
#7 /var/www/html/zergid/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/html/zergid/application/classes/Controller/Template/User.php(88): Kohana_Controller_Template->after()
#9 /var/www/html/zergid/system/classes/Kohana/Controller.php(87): Controller_Template_User->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/html/zergid/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_SolrSearch))
#12 /var/www/html/zergid/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/html/zergid/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/html/zergid/application/views/solrsearch/index.php:1
2013-12-04 04:23:14 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-12-04 04:23:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'favicon.ico', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-12-04 04:23:32 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-12-04 04:23:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'favicon.ico', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-12-04 04:23:43 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-12-04 04:23:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'favicon.ico', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :
2013-12-04 04:23:54 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 113 ~ SYSPATH/classes/Kohana/Route.php [ 420 ] in :
2013-12-04 04:23:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/html/z...', 420, Array)
#1 /var/www/html/zergid/system/classes/Kohana/Route.php(420): preg_match('#^(?:(?P<direct...', 'favicon.ico', NULL)
#2 /var/www/html/zergid/system/classes/Kohana/Request.php(470): Kohana_Route->matches(Object(Request))
#3 /var/www/html/zergid/system/classes/Kohana/Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 /var/www/html/zergid/index.php(118): Kohana_Request->execute()
#5 {main} in :