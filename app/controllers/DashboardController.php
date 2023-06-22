<?php

namespace app\controllers;

use app\models\TransactionModel as Transactions;

class DashboardController
{
    public function index()
    {
        $transactions = Transactions::getAllTransactions();
        $totalExpenses = Transactions::getTotalExpenses($transactions);
        $totalIncome = Transactions::getTotalIncome($transactions);

        view('dashboard', [
        'title' => 'Dashboard 🪙',
        'transactions' => $transactions,
        'totalExpenses' => $totalExpenses,
        'totalIncome' => $totalIncome,
        'totalBalance' => $totalIncome - $totalExpenses,
    ]);
    }
}
