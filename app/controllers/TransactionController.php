<?php

namespace app\controllers;

use app\config\database\Connection;

class TransactionController
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

        $connect = Connection::getConnection();

        $prepare = $connect->prepare(
            'insert into transactions (price, date, type) values (:price, :date, :type)');
        $prepare->execute([
            'price' => $price,
            'date' => $dateFormatToString,
            'type' => $type,
            ]);

        return redirect('/dashboard');
    }
}
