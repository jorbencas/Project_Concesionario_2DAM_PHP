<?php
return [
        'database' => ['name' => 'concesionario_beneyto',
            'username' => 'concesionario_beneyto',
            'password' => 'concesionario_beneyto',
            'connection' => 'mysql:host=localhost',
            'options' => [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_PERSISTENT => true
            ]
        ]
];