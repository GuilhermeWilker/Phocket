<?php

namespace app\controllers;

use app\models\AccountModel;

class LoginController
{
    public function store()
    {
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);

        if (empty($email) || empty($password)) {
            var_dump('Email ou senha inválidos');
            exit;
        }

        $userFound = AccountModel::authenticateUser($email, $password);

        if (!$userFound) {
            var_dump('Email ou senha inválidos');
            exit;
        }

        $_SESSION['logged'] = true;
        unset($userFound->password);
        $_SESSION['user'] = $userFound;

        return redirect('/dashboard');
    }

    public function destroy()
    {
        unset($_SESSION['logged']);
        session_destroy();

        return redirect('/');
    }
}
