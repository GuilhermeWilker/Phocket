<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'phocket';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        // Define o modo de erro para exceção
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Conexão realizada com sucesso!';
    } catch (PDOException $e) {
        echo 'Falha na conexão: '.$e->getMessage();
    }
