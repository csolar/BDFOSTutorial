<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-24 09:46:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$namespace' (T_VARIABLE), expecting identifier (T_STRING) ~ MODPATH/csrf/classes/Csrf/Form.php [ 5 ] in file:line
2013-09-24 09:46:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-24 09:50:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'namespace' (T_NAMESPACE), expecting identifier (T_STRING) ~ MODPATH/csrf/classes/Csrf/Form.php [ 5 ] in file:line
2013-09-24 09:50:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-24 09:51:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$logl' (T_VARIABLE), expecting identifier (T_STRING) ~ MODPATH/csrf/classes/Csrf/Form.php [ 5 ] in file:line
2013-09-24 09:51:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-24 09:51:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''$logl'' (T_CONSTANT_ENCAPSED_STRING), expecting identifier (T_STRING) ~ MODPATH/csrf/classes/Csrf/Form.php [ 5 ] in file:line
2013-09-24 09:51:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-24 09:51:57 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Csrf_Form::$csrf_input_key_attribute ~ MODPATH/csrf/classes/Csrf/Form.php [ 12 ] in file:line
2013-09-24 09:51:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-24 20:57:43 --- INFO: <form action="/login" method="post" accept-charset="utf-8">username:<input type="text" name="username" value="" /><br />password:<input type="text" name="password" value="" /><button type="submit" name="login">Login</button></form> in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-24 20:57:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'namespace' (T_NAMESPACE), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 30 ] in file:line
2013-09-24 20:57:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-24 20:58:56 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 20:58:56 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:00:26 --- INFO: key:csrf_guard_1812545628 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:00:26 --- INFO: token:d3ad10b8fcbe73855786d9efad61002d1984f2cc9221d2c2c45988b6d10a997051d2ee96f78c2ee496a824910d4654cd0c2b4a0c6f4c4bdbb7d3d1951b0458f0 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:00:26 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:00:26 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:01:21 --- INFO: <form action="/login" method="post" accept-charset="utf-8">username:<input type="text" name="username" value="" /><br />password:<input type="text" name="password" value="" /><button type="submit" name="login">Login</button></form> in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-24 21:02:33 --- INFO: key:csrf_guard_1817265404 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:02:33 --- INFO: token:5d5b7717b8c0b35686b4cbac9eb68caa6261ac46143139cf9957a1bb210dd45384d045e84d2e12d1743273c0986876cdfb431fa5024b05ce9e4d1ce51cf63053 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:02:33 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:02:33 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:04:31 --- INFO: <form action="/login" method="post" accept-charset="utf-8">username:<input type="text" name="username" value="" /><br />password:<input type="text" name="password" value="" /><button type="submit" name="login">Login</button></form> in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-24 21:04:42 --- INFO: key:csrf_guard_1357190483 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:04:42 --- INFO: token:16279546fba156d61df328b9058fadc18c7b812ca5ae1e515fb9da755a7a14d1054ae5c614afa2095e61596511cb4e2db5f0587614317fd49363e7dd6f9efbd4 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:04:42 --- INFO: session_token: in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:04:42 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:04:42 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:24:04 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/Kohana/Encrypt.php [ 68 ] in file:line
2013-09-24 21:24:20 --- INFO: key:csrf_guard_616041131 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:24:20 --- INFO: token:6710ca9f2a9f7e4472a94ef5d75904bbec2c3d40fc5ad32510161cd93d1e5320187f75a9eea788010de81ef251d672d187454bb3747c5d053223eb5b189fc99f in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:24:20 --- INFO: session_token: in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:24:20 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:24:20 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:24:20 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/Kohana/Encrypt.php [ 68 ] in file:line
2013-09-24 21:26:14 --- ERROR: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/Kohana/Encrypt.php [ 68 ] in file:line
2013-09-24 21:30:27 --- INFO: key:csrf_guard_1574073357 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:30:27 --- INFO: token:fc677e4d64827fef3d2e23a7b4835e32f68ea4daddb5619c8c65d86eb4ffe194c452b71f5fb3e010d16b2a5eb14abd2eaf40d3051294cd90f71b51701e76913f in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:30:27 --- INFO: session_token: in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:30:27 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:30:27 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:38:15 --- INFO: key:csrf_guard_37474707 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:38:15 --- INFO: token:2c501f9accd2bd3dc8f343e325cfdda863c60ea4fdb93b63c7115d639b82e99a9709450882de9c39b10a776ecb30a5e83d8c2c12a25b7072c54b15faf46f8c00 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:38:15 --- INFO: session_token: in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:38:15 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:38:15 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:40:54 --- INFO: key:csrf_guard_950840130 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:40:54 --- INFO: token:20e32514077961aa2879147b6fa08556ba3083ce830d914a64557f725bf82a68a90e1e4430d98ba02825004af5c95dd27ba4a89727e0fc8c7a7a337ec825a95a in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:40:54 --- INFO: session_token: in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:40:54 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:40:54 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:46:25 --- INFO: key:csrf_guard_477801157 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:46:25 --- INFO: token:648f003dcc0d723037b3c39dee0ea4f7dd11bb96f57bb1bac5a7a650e9c6943b04d404563ef8b6a22d51e512e747b46836bebfdfec4700c959c1fdecf99efe6d in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:46:25 --- INFO: session_token: in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:46:25 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:46:25 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:48:06 --- INFO: key:csrf_guard_343311861 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:48:06 --- INFO: token:7da0b2b33f974c777d5eb26e631799f6d22a4827b575a7c3199506c3d2ae5885fc327a09f9fd75fa07c16ed8a4eb3f6c96e80db7965c2068c12718d779c19f41 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:48:06 --- INFO: session_token: in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:48:06 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:48:06 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:53:28 --- INFO: key:csrf_guard_432859685 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:53:28 --- INFO: token:50e3c209c772c8c60d7401049e0563fa1e243bf58306cd02ee22efc5bf5508893d0989c364be7157e984434b42fb034cec2336ed7eccea0a9809f79456d07d4f in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:53:28 --- INFO: session_token: in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:53:28 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:53:28 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:59:09 --- INFO: key:csrf_guard_1716821993 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:59:09 --- INFO: token:32b0b95e12c0d33ae5a26803f218f745be0b022177320dc3e2b5e1d90607a03f3aa4223e142474ddfb4ca6e926649b2c3967cd60054cbb72b41ff54e4ffc3687 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:59:09 --- INFO: session_token: in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 21:59:09 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 21:59:09 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 22:00:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$session' (T_VARIABLE) ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 59 ] in file:line
2013-09-24 22:00:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-24 22:01:02 --- INFO: key:csrf_guard_367798314 in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 22:01:02 --- INFO: token:0e91e8fa7f05e60bf6b6f31839d60857456a2833ebc1dd29bb6d846714ab5aa937a1faacf7b7bfdef35885ec794b32f1b3b6921de2f3bd9c44e370fa8c3d01bf in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 22:01:02 --- INFO: session_token: in /home/cristiano/development/bitbucket/csrf/modules/csrf/classes/Kohana/Csrf.php:41
2013-09-24 22:01:02 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 22:01:02 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 22:03:30 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 22:03:30 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 22:05:43 --- EMERGENCY: Csrf_Exception [ 0 ]: invalid csrf token ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 42 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 22:05:43 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 22:06:38 --- EMERGENCY: Csrf_Exception [ 0 ]: cannot find csrf key ~ MODPATH/csrf/classes/Kohana/Csrf.php [ 35 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13
2013-09-24 22:06:38 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php(13): Kohana_Csrf::check(Array)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Dashboard->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Dashboard.php:13