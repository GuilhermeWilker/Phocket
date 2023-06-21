<?php

namespace app\models;

use app\config\database\Connection;

class AccountModel
{
    public static function createUser(string $username, string $email, mixed $password)
    {
        $connect = Connection::getConnection();

        $prepare = $connect->prepare(
            'INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');

        $prepare->execute([
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ]);

        $prepare->fetchObject();
    }

    public static function authenticateUser(string $email, mixed $password)
    {
        $connect = Connection::getConnection();

        $prepare = $connect->prepare(
            'select id, username, password from users where email = :email');

        $prepare->execute([
           'email' => $email,
           ]);

        $userFound = $prepare->fetchObject();

        if ($userFound && password_verify($password, $userFound->password)) {
            return $userFound;
        }

        return false;
    }
}
