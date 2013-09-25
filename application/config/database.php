<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'default' => array(
	    'type'       => 'MySQL',
	    'connection' => array(
	        'hostname'   => 'localhost',
	        'username'   => 'cristiano',
	        'password'   => 'cristiano',
	        'persistent' => FALSE,
	        'database'   => 'csrftutorialdb',
	        ),
	    'table_prefix' => '',
	    'charset'      => 'utf8'
	    )
	);