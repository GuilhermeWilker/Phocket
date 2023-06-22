<?php

return [
    'get' => [
        '/' => 'HomeController@index',
        '/cadastrar' => 'CadastroController@index',
        '/dashboard' => 'DashboardController@index:auth',
        '/api/chartdata' => 'DashboardController@chartData:auth',
        ],

    'post' => [
        '/login' => 'LoginController@store',
        '/cadastrar' => 'CadastroController@store',
        '/transaction' => 'TransactionController@store',
        ],
    ];
