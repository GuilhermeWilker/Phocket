<?php

namespace app\models;

use app\config\database\Connection;

class TransactionModel
{
    public static function createTransaction(float|int $price, string $date, string $type)
    {
        $connect = Connection::getConnection();

        $prepare = $connect->prepare(
            'insert into transactions (price, date, type) values (:price, :date, :type)');

        $prepare->execute([
            'price' => $price,
            'date' => $date,
            'type' => $type,
            ]);

        return $connect->lastInsertId();
    }

    public static function getAllTransactions()
    {
        $connect = Connection::getConnection();

        $prepare = $connect->prepare('SELECT price, date, type FROM transactions');
        $prepare->execute();

        return $prepare->fetchAll(\PDO::FETCH_ASSOC);
    }
}
