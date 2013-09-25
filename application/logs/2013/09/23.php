<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-23 20:25:03 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: login ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Base.php:11
2013-09-23 20:25:03 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Base.php(11): Kohana_Route::get('login')
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Base.php:11
2013-09-23 20:30:01 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Route could not be converted to string ~ SYSPATH/classes/Kohana/Controller.php [ 127 ] in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:127
2013-09-23 20:30:01 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(127): Kohana_Core::error_handler(4096, 'Object of class...', '/home/cristiano...', 127, Array)
#1 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Base.php(11): Kohana_Controller::redirect(Object(Route), 302)
#2 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(69): Controller_Base->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#8 {main} in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:127
2013-09-23 20:52:07 --- INFO: invoked in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-23 20:52:26 --- INFO:  in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-23 20:54:32 --- INFO: <input type="text" name="username" value="" /><input type="text" name="password" value="" /> in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-23 20:54:43 --- INFO:  in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-23 20:56:20 --- INFO: username:<input type="text" name="username" value="" /><br />password:<input type="text" name="password" value="" /> in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-23 20:58:44 --- INFO: <form action="/login" method="post" accept-charset="utf-8">username:<input type="text" name="username" value="" /><br />password:<input type="text" name="password" value="" /></form> in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-23 21:00:32 --- INFO: <form action="/login" method="post" accept-charset="utf-8">username:<input type="text" name="username" value="" /><br />password:<input type="text" name="password" value="" /><button type="submit" name="login">Login</button></form> in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-23 21:00:44 --- INFO: <form action="/login" method="post" accept-charset="utf-8">username:<input type="text" name="username" value="" /><br />password:<input type="text" name="password" value="" /><button type="submit" name="login">Login</button></form> in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-23 21:04:26 --- INFO: <form action="/login" method="post" accept-charset="utf-8">username:<input type="text" name="username" value="" /><br />password:<input type="text" name="password" value="" /><button type="submit" name="login">Login</button></form> in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-23 21:18:48 --- INFO: <form action="/login" method="post" accept-charset="utf-8">username:<input type="text" name="username" value="" /><br />password:<input type="text" name="password" value="" /><button type="submit" name="login">Login</button></form> in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-23 21:18:54 --- INFO: <form action="/login" method="post" accept-charset="utf-8">username:<input type="text" name="username" value="" /><br />password:<input type="text" name="password" value="" /><button type="submit" name="login">Login</button></form> in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-23 21:22:58 --- INFO: password: administrator in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-23 21:24:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::csrf() ~ APPPATH/views/dashboard/index.php [ 3 ] in file:line
2013-09-23 21:24:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 21:28:46 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Form - assumed 'Form' ~ APPPATH/views/dashboard/index.php [ 3 ] in /home/cristiano/development/bitbucket/csrf/application/views/dashboard/index.php:3
2013-09-23 21:28:46 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/views/dashboard/index.php(3): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/cristiano...', 3, Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/View.php(61): include('/home/cristiano...')
#2 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/cristiano...', Array)
#3 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(8): Kohana_View->render()
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#7 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#10 {main} in /home/cristiano/development/bitbucket/csrf/application/views/dashboard/index.php:3
2013-09-23 21:29:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'Form' (T_STRING) ~ APPPATH/views/dashboard/index.php [ 3 ] in file:line
2013-09-23 21:29:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 21:29:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'Form' (T_STRING) ~ APPPATH/views/dashboard/index.php [ 3 ] in file:line
2013-09-23 21:29:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 21:32:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::csrf() ~ APPPATH/views/dashboard/index.php [ 4 ] in file:line
2013-09-23 21:32:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 21:35:52 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::csrf() ~ APPPATH/views/dashboard/index.php [ 4 ] in file:line
2013-09-23 21:35:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 21:37:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::csrf() ~ APPPATH/views/dashboard/index.php [ 4 ] in file:line
2013-09-23 21:37:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 21:38:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Form::csrf() ~ APPPATH/views/dashboard/index.php [ 4 ] in file:line
2013-09-23 21:38:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 21:40:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$namespace' (T_VARIABLE), expecting identifier (T_STRING) ~ MODPATH/csrf/classes/Csrf/Form.php [ 5 ] in file:line
2013-09-23 21:40:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 21:44:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$namespace' (T_VARIABLE), expecting identifier (T_STRING) ~ MODPATH/csrf/classes/Csrf/Form.php [ 5 ] in file:line
2013-09-23 21:44:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 21:44:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$namespace' (T_VARIABLE), expecting identifier (T_STRING) ~ MODPATH/csrf/classes/Csrf/Form.php [ 5 ] in file:line
2013-09-23 21:44:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-23 21:46:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$namespace' (T_VARIABLE), expecting identifier (T_STRING) ~ MODPATH/csrf/classes/Csrf/Form.php [ 5 ] in file:line
2013-09-23 21:46:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line