<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-20 05:46:42 --- EMERGENCY: Exception [ 0 ]: testing the writer ~ APPPATH/classes/Controller/Welcome.php [ 7 ] in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84
2013-09-20 05:46:42 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#6 {main} in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php:84