<?php

return [
    'get' => [
        '/' => 'HomeController@index',
        '/login' => 'LoginController@index',
        '/cadastrar' => 'CadastroController@index',
        '/dashboard' => 'DashboardController@index',
        ],

    'post' => [
        '/login' => 'LoginController@store',
        ],
    ];
