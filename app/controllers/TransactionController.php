<?php

namespace app\controllers;

use app\models\TransactionModel;

class TransactionController
{
    public function store()
    {
        $price = strip_tags($_POST['price']);
        $date = new \DateTime($_POST['date']);
        $type = strip_tags($_POST['type']);
        $userId = $_SESSION['user_id'];

        if (empty($price) || empty($date) || empty($type)) {
            flash('message', 'Por favor, preencha todos os campos...');

            return redirect('/dashboard');
        }

        $dateFormatToString = $date->format('Y-m-d H:i:s');
        TransactionModel::createTransaction($price, $dateFormatToString, $type, $userId);

        return redirect('/dashboard');
    }
}
