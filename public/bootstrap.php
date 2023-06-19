<?php

use app\config\database\Connection;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();

// $connection = Connection::getConnection();
// $query = $connection->query('select * from incomes');
// var_dump($query->fetchAll());

routerExecute();
