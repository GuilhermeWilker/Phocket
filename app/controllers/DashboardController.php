<?php

namespace app\controllers;

use app\models\TransactionModel as Transactions;

class DashboardController
{
    public function index()
    {
        $transactions = Transactions::getAllTransactions();

        view('dashboard', ['title' => 'Dashboard 🪙', 'transactions' => $transactions]);
    }
}
