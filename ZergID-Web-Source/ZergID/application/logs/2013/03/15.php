<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-15 06:06:06 --- CRITICAL: Database_Exception [ 1049 ]: Unknown database 'zerg_id' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\MySQL.php:75
2013-03-15 06:06:06 --- DEBUG: #0 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('zerg_id')
#1 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 D:\wamp\www\zergid\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('zid_users')
#4 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 D:\wamp\www\zergid\application\classes\Controller\Home.php(21): Kohana_ORM::factory('user')
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\modules\database\classes\Kohana\Database\MySQL.php:75
2013-03-15 06:09:40 --- CRITICAL: Kohana_Exception [ 0 ]: The username property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:699
2013-03-15 06:09:40 --- DEBUG: #0 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('username', 'shanmu12')
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(801): Kohana_ORM->__set('username', 'shanmu12')
#2 D:\wamp\www\zergid\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#3 D:\wamp\www\zergid\application\classes\Controller\Home.php(25): Model_Auth_User->create_user(Array, Array)
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:699
2013-03-15 06:52:34 --- CRITICAL: Kohana_Exception [ 0 ]: The username property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:699
2013-03-15 06:52:34 --- DEBUG: #0 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('username', '')
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(801): Kohana_ORM->__set('username', '')
#2 D:\wamp\www\zergid\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#3 D:\wamp\www\zergid\application\classes\Controller\Home.php(25): Model_Auth_User->create_user(Array, Array)
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:699
2013-03-15 08:38:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: input ~ APPPATH\views\user\signup.php [ 4 ] in D:\wamp\www\zergid\application\views\user\signup.php:4
2013-03-15 08:38:26 --- DEBUG: #0 D:\wamp\www\zergid\application\views\user\signup.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 4, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\home.php(19): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\home.php(41): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_Home->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\user\signup.php:4
2013-03-15 08:55:17 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be an array, string given, called in D:\wamp\www\zergid\application\views\user\signup.php on line 8 and defined ~ SYSPATH\classes\Kohana\Form.php [ 93 ] in D:\wamp\www\zergid\system\classes\Kohana\Form.php:93
2013-03-15 08:55:17 --- DEBUG: #0 D:\wamp\www\zergid\system\classes\Kohana\Form.php(93): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'D:\wamp\www\zer...', 93, Array)
#1 D:\wamp\www\zergid\application\views\user\signup.php(8): Kohana_Form::input('username', '', ' class="form-in...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#4 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 D:\wamp\www\zergid\application\views\template\home.php(19): Kohana_View->__toString()
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#7 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#8 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\wamp\www\zergid\application\classes\Controller\template\home.php(41): Kohana_Controller_Template->after()
#10 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_Home->after()
#11 [internal function]: Kohana_Controller->execute()
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#16 {main} in D:\wamp\www\zergid\system\classes\Kohana\Form.php:93
2013-03-15 09:15:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: input ~ APPPATH\views\user\login.php [ 11 ] in D:\wamp\www\zergid\application\views\user\login.php:11
2013-03-15 09:15:18 --- DEBUG: #0 D:\wamp\www\zergid\application\views\user\login.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 11, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\home.php(20): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\home.php(41): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_Home->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\user\login.php:11
2013-03-15 09:16:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: input_password ~ APPPATH\views\user\login.php [ 11 ] in D:\wamp\www\zergid\application\views\user\login.php:11
2013-03-15 09:16:03 --- DEBUG: #0 D:\wamp\www\zergid\application\views\user\login.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 11, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\home.php(20): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\home.php(41): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_Home->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\user\login.php:11
2013-03-15 09:16:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: input_password ~ APPPATH\views\user\login.php [ 11 ] in D:\wamp\www\zergid\application\views\user\login.php:11
2013-03-15 09:16:04 --- DEBUG: #0 D:\wamp\www\zergid\application\views\user\login.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\zer...', 11, Array)
#1 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#2 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#3 D:\wamp\www\zergid\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\wamp\www\zergid\application\views\template\home.php(20): Kohana_View->__toString()
#5 D:\wamp\www\zergid\system\classes\Kohana\View.php(61): include('D:\wamp\www\zer...')
#6 D:\wamp\www\zergid\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\wamp\www\zer...', Array)
#7 D:\wamp\www\zergid\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\wamp\www\zergid\application\classes\Controller\template\home.php(41): Kohana_Controller_Template->after()
#9 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(87): Controller_Template_Home->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#15 {main} in D:\wamp\www\zergid\application\views\user\login.php:11
2013-03-15 09:47:15 --- CRITICAL: Kohana_Exception [ 0 ]: The username property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:699
2013-03-15 09:47:15 --- DEBUG: #0 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('username', 'sdfsdfsdfsdfsss...')
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(801): Kohana_ORM->__set('username', 'sdfsdfsdfsdfsss...')
#2 D:\wamp\www\zergid\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#3 D:\wamp\www\zergid\application\classes\Controller\Home.php(25): Model_Auth_User->create_user(Array, Array)
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:699
2013-03-15 10:21:27 --- CRITICAL: Kohana_Exception [ 0 ]: The username property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:699
2013-03-15 10:21:27 --- DEBUG: #0 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('username', '')
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(801): Kohana_ORM->__set('username', '')
#2 D:\wamp\www\zergid\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#3 D:\wamp\www\zergid\application\classes\Controller\Home.php(25): Model_Auth_User->create_user(Array, Array)
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:699
2013-03-15 10:22:07 --- CRITICAL: Kohana_Exception [ 0 ]: The username property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:699
2013-03-15 10:22:07 --- DEBUG: #0 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('username', '')
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(801): Kohana_ORM->__set('username', '')
#2 D:\wamp\www\zergid\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#3 D:\wamp\www\zergid\application\classes\Controller\Home.php(25): Model_Auth_User->create_user(Array, Array)
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:699
2013-03-15 10:25:13 --- CRITICAL: Kohana_Exception [ 0 ]: The username property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:699
2013-03-15 10:25:13 --- DEBUG: #0 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('username', '')
#1 D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php(801): Kohana_ORM->__set('username', '')
#2 D:\wamp\www\zergid\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->values(Array, Array)
#3 D:\wamp\www\zergid\application\classes\Controller\Home.php(25): Model_Auth_User->create_user(Array, Array)
#4 D:\wamp\www\zergid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\wamp\www\zergid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 D:\wamp\www\zergid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\wamp\www\zergid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 D:\wamp\www\zergid\index.php(118): Kohana_Request->execute()
#10 {main} in D:\wamp\www\zergid\modules\orm\classes\Kohana\ORM.php:699