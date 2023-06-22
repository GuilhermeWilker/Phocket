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

    public function chartData()
    {
        $transactions = Transactions::getAllTransactions();

        $rentabilidadeData = [];
        $despesasData = [];
        $months = [];

        // Organizar os dados por mês
        foreach ($transactions as $transaction) {
            $date = \DateTime::createFromFormat('d/m/Y', $transaction['date']);
            $month = $date->format('M');

            if (!in_array($month, $months)) {
                $months[] = $month;
            }

            switch ($transaction['type']) {
                case 'Receita':
                    isset($rentabilidadeData[$month])
                        ? $rentabilidadeData[$month] += $transaction['price']
                        : $rentabilidadeData[$month] = $transaction['price'];
                    break;
                case 'Despesa':
                    isset($despesasData[$month])
                        ? $despesasData[$month] += $transaction['price']
                        : $despesasData[$month] = $transaction['price'];
                    break;
                default:
                    // ..
                    break;
            }
        }

        $rentabilidade = [];
        $despesas = [];

        foreach ($months as $month) {
            $rentabilidade[] = $rentabilidadeData[$month] ?? 0;
            $despesas[] = $despesasData[$month] ?? 0;
        }

        $chartData = [
            'months' => $months,
            'rentabilidade' => $rentabilidade,
            'despesas' => $despesas,
        ];

        header('Content-Type: application/json');
        echo json_encode($chartData);
    }
}
