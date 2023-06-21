<?php

namespace app\controllers;

use app\models\TransactionModel;

class TransactionModelController
{
    public function store()
    {
        $price = strip_tags($_POST['price']);

        $date = new \DateTime($_POST['date']);
        $dateFormatToString = $date->format('Y-m-d');

        $type = strip_tags($_POST['type']);

        if (empty($price) || empty($date) || empty($type)) {
            var_dump('Preencha todos os campos..');
            exit;
        }

        TransactionModel::createTransaction($price, $dateFormatToString, $type);

        return redirect('/dashboard');
    }
}
