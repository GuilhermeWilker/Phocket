<?php

namespace app\controllers;

use app\config\database\Connection;

class LoginController
{
    public function index()
    {
        var_dump('index login');
    }

    public function store()
    {
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);

        if (empty($email) || empty($password)) {
            var_dump('Email ou senha inválidos');
            exit;
        }

        $connect = Connection::getConnection();

        $prepare = $connect->prepare('select id, username, password from users where email = :email');
        $prepare->execute([
           'email' => $email,
           ]);

        $userFound = $prepare->fetchObject();

        if (!$userFound) {
            var_dump('Email ou senha inválidos');
            exit;
        }

        if (!password_verify($password, $userFound->password)) {
            var_dump('Senha inválida');
            exit;
        }

        $_SESSION['logged'] = true;
        unset($userFound->password);
        $_SESSION['user'] = $userFound;

        return redirect('/dashboard');
    }
}
