<?php

return array(
    'db' => array(
        'adapters' => array(
            'DbAdapter' => array(
                'driver'         => 'Pdo',
                'dsn'            => 'mysql:dbname=h2;host=10.132.154.71',
                'driver_options' => array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                ),
                'username' => 'lazhacks',
                'password' => 'pw4lazhacks',
            ),
        ),
    ),
);
