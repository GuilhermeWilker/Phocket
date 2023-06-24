<?php

namespace app\models;

use app\config\database\Connection;

class TransactionModel
{
    public static function createTransaction(mixed $price, string $date, string $type, int $userId)
    {
        $connect = Connection::getConnection();

        $prepare = $connect->prepare(
            'INSERT INTO transactions (user_id, price, date, type) VALUES (:userId, :price, :date, :type)');

        $prepare->execute([
            'userId' => $userId,
            'price' => $price,
            'date' => $date,
            'type' => $type,
        ]);

        return $connect->lastInsertId();
    }

    public static function getUserTransactions(int $userId)
    {
        $connect = Connection::getConnection();

        $prepare = $connect->prepare(
            'SELECT t.price, t.date, t.type, u.username FROM transactions t JOIN users u ON t.user_id = u.id WHERE t.user_id = :userId ORDER BY t.date DESC');
        $prepare->execute([
            'userId' => $userId,
        ]);

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
