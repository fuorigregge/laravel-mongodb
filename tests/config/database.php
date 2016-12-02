<?php

return array(

	'connections' => array(

        'mongodb' => array(
            'driver'   => 'mongodb',
            'host'     => '127.0.0.1',
            'port'     => 3001,
            //'username' => 'username',
            //'password' => 'password',
            'database' => 'meteor'
        ),

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'unittest',
			'username'  => 'travis',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
	)

);
