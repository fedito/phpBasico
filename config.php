<?php

return [
    'database' => [
        'connection'=> 'mysql:host=127.0.0.1',
        'name' => 'todos',
        'username' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];