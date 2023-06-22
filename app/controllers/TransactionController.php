<?php

namespace app\controllers;

use app\models\TransactionModel;

class TransactionController
{
    public function store()
    {
        $price = strip_tags($_POST['price']);

        $date = new \DateTime($_POST['date']);
        $dateFormatToString = $date->format('Y-m-d H:i:s');

        $type = strip_tags($_POST['type']);

        if (empty($price) || empty($date) || empty($type)) {
            flash('message', 'Por favor preencha todos os campos...');

            return redirect('/dashboard');
        }

        TransactionModel::createTransaction($price, $dateFormatToString, $type);

        return redirect('/dashboard');
    }
}
