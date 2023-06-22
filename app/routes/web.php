<?php

return [
    'get' => [
        '/' => 'HomeController@index',
        '/cadastrar' => 'CadastroController@index',
        '/dashboard' => 'DashboardController@index:auth',
        ],

    'post' => [
        '/login' => 'LoginController@store',
        '/cadastrar' => 'CadastroController@store',
        '/transaction' => 'TransactionController@store',
        ],
    ];
