<?php

    include_once 'config/db.php';

    $stmt = $conn->prepare('SELECT * FROM users');
    $stmt->execute();

    // Verifica se a consulta retornou algum resultado
    if ($stmt->rowCount() > 0) {
        // Exibe os resultados da consulta
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo 'ID: '.$row['id'].' - Nome: '.$row['name'].' - Email: '.$row['email'].'<br>';
        }
    } else {
        echo 'Nenhum resultado encontrado.';
    }
