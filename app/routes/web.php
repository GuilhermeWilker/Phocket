<?php

return [
    'get' => [
        '/' => 'HomeController@index',
        '/login' => 'LoginController@index',
        '/cadastrar' => 'CadastroController@index',
        '/dashboard' => 'DashboardController@index:auth',
        ],

    'post' => [
        '/login' => 'LoginController@store',
        '/cadastrar' => 'CadastroController@store',
        '/transaction' => 'TransactionController@store',
        ],
    ];
