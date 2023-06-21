<?php

namespace app\controllers;

use app\models\AccountModel;

class CadastroController
{
    public function index()
    {
        view('cadastro', ['title' => 'Cadastro']);
    }

    public function store()
    {
        $username = strip_tags($_POST['username']);
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);
        $confirmpassword = strip_tags($_POST['confirm-password']);

        if ($password !== $confirmpassword) {
            var_dump('As senhas deve se coincidirem!');
            exit;
        }

        AccountModel::createUser($username, $email, $password);

        return redirect('/');
    }
}
