<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-22 17:50:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/Welcome.php [ 10 ] in file:line
2013-09-22 17:50:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-09-22 17:50:55 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: login ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Welcome.php:10
2013-09-22 17:50:55 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Welcome.php(10): Kohana_Route::get('login')
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(69): Controller_Welcome->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Welcome.php:10
2013-09-22 17:50:55 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 17:50:55 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /home/cristiano/development/bitbucket/csrf/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:06:22 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:06:22 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /home/cristiano/development/bitbucket/csrf/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:06:22 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:06:22 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /home/cristiano/development/bitbucket/csrf/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:06:51 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:06:51 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /home/cristiano/development/bitbucket/csrf/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:06:51 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:06:51 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /home/cristiano/development/bitbucket/csrf/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:13:38 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:13:38 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /home/cristiano/development/bitbucket/csrf/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:13:38 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:13:38 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /home/cristiano/development/bitbucket/csrf/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Cookie.php:67
2013-09-22 18:15:29 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: login ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Welcome.php:10
2013-09-22 18:15:29 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Welcome.php(10): Kohana_Route::get('login')
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(69): Controller_Welcome->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Welcome.php:10
2013-09-22 18:17:35 --- INFO: Model_User Object
(
    [_has_many:protected] => Array
        (
            [user_tokens] => Array
                (
                    [foreign_key] => user_id
                    [through] => 
                    [far_key] => user_token_id
                    [model] => User_Token
                )

            [roles] => Array
                (
                    [foreign_key] => user_id
                    [through] => roles_users
                    [far_key] => role_id
                    [model] => Role
                )

        )

    [_has_one:protected] => Array
        (
        )

    [_belongs_to:protected] => Array
        (
        )

    [_load_with:protected] => Array
        (
        )

    [_validation:protected] => 
    [_object:protected] => Array
        (
            [id] => 
            [email] => 
            [username] => 
            [password] => 
            [logins] => 
            [last_login] => 
        )

    [_changed:protected] => Array
        (
        )

    [_original_values:protected] => Array
        (
        )

    [_related:protected] => Array
        (
        )

    [_valid:protected] => 
    [_loaded:protected] => 
    [_saved:protected] => 
    [_sorting:protected] => 
    [_foreign_key_suffix:protected] => _id
    [_object_name:protected] => user
    [_object_plural:protected] => users
    [_table_name:protected] => users
    [_table_columns:protected] => Array
        (
            [id] => Array
                (
                    [type] => int
                    [min] => 0
                    [max] => 4294967295
                    [column_name] => id
                    [column_default] => 
                    [data_type] => int unsigned
                    [is_nullable] => 
                    [ordinal_position] => 1
                    [display] => 11
                    [comment] => 
                    [extra] => auto_increment
                    [key] => PRI
                    [privileges] => select,insert,update,references
                )

            [email] => Array
                (
                    [type] => string
                    [column_name] => email
                    [column_default] => 
                    [data_type] => varchar
                    [is_nullable] => 
                    [ordinal_position] => 2
                    [character_maximum_length] => 254
                    [collation_name] => utf8_general_ci
                    [comment] => 
                    [extra] => 
                    [key] => UNI
                    [privileges] => select,insert,update,references
                )

            [username] => Array
                (
                    [type] => string
                    [column_name] => username
                    [column_default] => 
                    [data_type] => varchar
                    [is_nullable] => 
                    [ordinal_position] => 3
                    [character_maximum_length] => 32
                    [collation_name] => utf8_general_ci
                    [comment] => 
                    [extra] => 
                    [key] => UNI
                    [privileges] => select,insert,update,references
                )

            [password] => Array
                (
                    [type] => string
                    [column_name] => password
                    [column_default] => 
                    [data_type] => varchar
                    [is_nullable] => 
                    [ordinal_position] => 4
                    [character_maximum_length] => 64
                    [collation_name] => utf8_general_ci
                    [comment] => 
                    [extra] => 
                    [key] => 
                    [privileges] => select,insert,update,references
                )

            [logins] => Array
                (
                    [type] => int
                    [min] => 0
                    [max] => 4294967295
                    [column_name] => logins
                    [column_default] => 0
                    [data_type] => int unsigned
                    [is_nullable] => 
                    [ordinal_position] => 5
                    [display] => 10
                    [comment] => 
                    [extra] => 
                    [key] => 
                    [privileges] => select,insert,update,references
                )

            [last_login] => Array
                (
                    [type] => int
                    [min] => 0
                    [max] => 4294967295
                    [column_name] => last_login
                    [column_default] => 
                    [data_type] => int unsigned
                    [is_nullable] => 1
                    [ordinal_position] => 6
                    [display] => 10
                    [comment] => 
                    [extra] => 
                    [key] => 
                    [privileges] => select,insert,update,references
                )

        )

    [_updated_column:protected] => 
    [_created_column:protected] => 
    [_serialize_columns:protected] => Array
        (
        )

    [_primary_key:protected] => id
    [_primary_key_value:protected] => 
    [_table_names_plural:protected] => 1
    [_reload_on_wakeup:protected] => 1
    [_db:protected] => Database_MySQL Object
        (
            [_connection_id:protected] => a47f483d9a576e3a6ceae9769f6b1ea70282c00f
            [_identifier:protected] => `
            [last_query] => SHOW FULL COLUMNS FROM `users`
            [_instance:protected] => default
            [_connection:protected] => Resource id #47
            [_config:protected] => Array
                (
                    [type] => MySQL
                    [connection] => Array
                        (
                            [hostname] => localhost
                            [database] => csrftutorialdb
                            [persistent] => 
                        )

                    [table_prefix] => 
                    [charset] => utf8
                    [caching] => 
                )

        )

    [_db_group:protected] => 
    [_db_applied:protected] => Array
        (
        )

    [_db_pending:protected] => Array
        (
        )

    [_db_reset:protected] => 1
    [_db_builder:protected] => 
    [_with_applied:protected] => Array
        (
        )

    [_cast_data:protected] => Array
        (
        )

    [_errors_filename:protected] => user
)
 in /home/cristiano/development/bitbucket/csrf/index.php:102
2013-09-22 18:17:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: login ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Welcome.php:10
2013-09-22 18:17:35 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Welcome.php(10): Kohana_Route::get('login')
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(69): Controller_Welcome->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Welcome.php:10
2013-09-22 18:17:36 --- INFO: Model_User Object
(
    [_has_many:protected] => Array
        (
            [user_tokens] => Array
                (
                    [foreign_key] => user_id
                    [through] => 
                    [far_key] => user_token_id
                    [model] => User_Token
                )

            [roles] => Array
                (
                    [foreign_key] => user_id
                    [through] => roles_users
                    [far_key] => role_id
                    [model] => Role
                )

        )

    [_has_one:protected] => Array
        (
        )

    [_belongs_to:protected] => Array
        (
        )

    [_load_with:protected] => Array
        (
        )

    [_validation:protected] => 
    [_object:protected] => Array
        (
            [id] => 
            [email] => 
            [username] => 
            [password] => 
            [logins] => 
            [last_login] => 
        )

    [_changed:protected] => Array
        (
        )

    [_original_values:protected] => Array
        (
        )

    [_related:protected] => Array
        (
        )

    [_valid:protected] => 
    [_loaded:protected] => 
    [_saved:protected] => 
    [_sorting:protected] => 
    [_foreign_key_suffix:protected] => _id
    [_object_name:protected] => user
    [_object_plural:protected] => users
    [_table_name:protected] => users
    [_table_columns:protected] => Array
        (
            [id] => Array
                (
                    [type] => int
                    [min] => 0
                    [max] => 4294967295
                    [column_name] => id
                    [column_default] => 
                    [data_type] => int unsigned
                    [is_nullable] => 
                    [ordinal_position] => 1
                    [display] => 11
                    [comment] => 
                    [extra] => auto_increment
                    [key] => PRI
                    [privileges] => select,insert,update,references
                )

            [email] => Array
                (
                    [type] => string
                    [column_name] => email
                    [column_default] => 
                    [data_type] => varchar
                    [is_nullable] => 
                    [ordinal_position] => 2
                    [character_maximum_length] => 254
                    [collation_name] => utf8_general_ci
                    [comment] => 
                    [extra] => 
                    [key] => UNI
                    [privileges] => select,insert,update,references
                )

            [username] => Array
                (
                    [type] => string
                    [column_name] => username
                    [column_default] => 
                    [data_type] => varchar
                    [is_nullable] => 
                    [ordinal_position] => 3
                    [character_maximum_length] => 32
                    [collation_name] => utf8_general_ci
                    [comment] => 
                    [extra] => 
                    [key] => UNI
                    [privileges] => select,insert,update,references
                )

            [password] => Array
                (
                    [type] => string
                    [column_name] => password
                    [column_default] => 
                    [data_type] => varchar
                    [is_nullable] => 
                    [ordinal_position] => 4
                    [character_maximum_length] => 64
                    [collation_name] => utf8_general_ci
                    [comment] => 
                    [extra] => 
                    [key] => 
                    [privileges] => select,insert,update,references
                )

            [logins] => Array
                (
                    [type] => int
                    [min] => 0
                    [max] => 4294967295
                    [column_name] => logins
                    [column_default] => 0
                    [data_type] => int unsigned
                    [is_nullable] => 
                    [ordinal_position] => 5
                    [display] => 10
                    [comment] => 
                    [extra] => 
                    [key] => 
                    [privileges] => select,insert,update,references
                )

            [last_login] => Array
                (
                    [type] => int
                    [min] => 0
                    [max] => 4294967295
                    [column_name] => last_login
                    [column_default] => 
                    [data_type] => int unsigned
                    [is_nullable] => 1
                    [ordinal_position] => 6
                    [display] => 10
                    [comment] => 
                    [extra] => 
                    [key] => 
                    [privileges] => select,insert,update,references
                )

        )

    [_updated_column:protected] => 
    [_created_column:protected] => 
    [_serialize_columns:protected] => Array
        (
        )

    [_primary_key:protected] => id
    [_primary_key_value:protected] => 
    [_table_names_plural:protected] => 1
    [_reload_on_wakeup:protected] => 1
    [_db:protected] => Database_MySQL Object
        (
            [_connection_id:protected] => a47f483d9a576e3a6ceae9769f6b1ea70282c00f
            [_identifier:protected] => `
            [last_query] => SHOW FULL COLUMNS FROM `users`
            [_instance:protected] => default
            [_connection:protected] => Resource id #47
            [_config:protected] => Array
                (
                    [type] => MySQL
                    [connection] => Array
                        (
                            [hostname] => localhost
                            [database] => csrftutorialdb
                            [persistent] => 
                        )

                    [table_prefix] => 
                    [charset] => utf8
                    [caching] => 
                )

        )

    [_db_group:protected] => 
    [_db_applied:protected] => Array
        (
        )

    [_db_pending:protected] => Array
        (
        )

    [_db_reset:protected] => 1
    [_db_builder:protected] => 
    [_with_applied:protected] => Array
        (
        )

    [_cast_data:protected] => Array
        (
        )

    [_errors_filename:protected] => user
)
 in /home/cristiano/development/bitbucket/csrf/index.php:102
2013-09-22 18:19:47 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Kohana/ORM.php:702
2013-09-22 18:19:47 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('role', 'login')
#1 /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('role', 'login')
#2 /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#3 /home/cristiano/development/bitbucket/csrf/application/bootstrap.php(155): Model_Auth_User->create_user(Array, Array)
#4 /home/cristiano/development/bitbucket/csrf/index.php(102): require('/home/cristiano...')
#5 {main} in /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Kohana/ORM.php:702
2013-09-22 18:19:47 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Kohana/ORM.php:702
2013-09-22 18:19:47 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('role', 'login')
#1 /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('role', 'login')
#2 /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#3 /home/cristiano/development/bitbucket/csrf/application/bootstrap.php(155): Model_Auth_User->create_user(Array, Array)
#4 /home/cristiano/development/bitbucket/csrf/index.php(102): require('/home/cristiano...')
#5 {main} in /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Kohana/ORM.php:702
2013-09-22 18:23:46 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/cristiano/development/bitbucket/csrf/modules/database/classes/Kohana/Database/Query.php:251
2013-09-22 18:23:46 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/cristiano/development/bitbucket/csrf/application/bootstrap.php(155): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/cristiano/development/bitbucket/csrf/index.php(102): require('/home/cristiano...')
#4 {main} in /home/cristiano/development/bitbucket/csrf/modules/database/classes/Kohana/Database/Query.php:251
2013-09-22 18:23:47 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/cristiano/development/bitbucket/csrf/modules/database/classes/Kohana/Database/Query.php:251
2013-09-22 18:23:47 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/cristiano/development/bitbucket/csrf/application/bootstrap.php(155): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/cristiano/development/bitbucket/csrf/index.php(102): require('/home/cristiano...')
#4 {main} in /home/cristiano/development/bitbucket/csrf/modules/database/classes/Kohana/Database/Query.php:251
2013-09-22 18:25:24 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/cristiano/development/bitbucket/csrf/modules/database/classes/Kohana/Database/Query.php:251
2013-09-22 18:25:24 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/cristiano/development/bitbucket/csrf/application/bootstrap.php(155): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/cristiano/development/bitbucket/csrf/index.php(102): require('/home/cristiano...')
#4 {main} in /home/cristiano/development/bitbucket/csrf/modules/database/classes/Kohana/Database/Query.php:251
2013-09-22 18:25:25 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/cristiano/development/bitbucket/csrf/modules/database/classes/Kohana/Database/Query.php:251
2013-09-22 18:25:25 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /home/cristiano/development/bitbucket/csrf/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/cristiano/development/bitbucket/csrf/application/bootstrap.php(155): Kohana_ORM->add('roles', Object(Model_Role))
#3 /home/cristiano/development/bitbucket/csrf/index.php(102): require('/home/cristiano...')
#4 {main} in /home/cristiano/development/bitbucket/csrf/modules/database/classes/Kohana/Database/Query.php:251
2013-09-22 18:25:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The requested route does not exist: login ~ SYSPATH/classes/Kohana/Route.php [ 109 ] in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Welcome.php:10
2013-09-22 18:25:43 --- DEBUG: #0 /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Welcome.php(10): Kohana_Route::get('login')
#1 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Controller.php(69): Controller_Welcome->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/cristiano/development/bitbucket/csrf/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/cristiano/development/bitbucket/csrf/index.php(118): Kohana_Request->execute()
#7 {main} in /home/cristiano/development/bitbucket/csrf/application/classes/Controller/Welcome.php:10