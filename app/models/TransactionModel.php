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

        $prepare = $connect->prepare(
            'SELECT price, date, type FROM transactions ORDER BY date  DESC');
        $prepare->execute();

        $transactions = $prepare->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($transactions as &$transaction) {
            $dateTime = new \DateTime($transaction['date']);
            $formattedDate = $dateTime->format('d/m/Y');
            $transaction['date'] = $formattedDate;
        }

        return $transactions;
    }

    public static function getTotalIncome($transactions)
    {
        $totalIncome = 0;

        foreach ($transactions as $transaction) {
            if ($transaction['type'] === 'Receita') {
                $totalIncome += $transaction['price'];
            }
        }

        return $totalIncome;
    }

    public static function getTotalExpenses($transactions)
    {
        $totalExpenses = 0;

        foreach ($transactions as $transaction) {
            if ($transaction['type'] === 'Despesa') {
                $totalExpenses += $transaction['price'];
            }
        }

        return $totalExpenses;
    }
}
