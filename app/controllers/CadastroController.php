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

        if (empty($username) || empty($email) || empty($password) || empty($confirmpassword)) {
            flash('message', 'Você deve preencher todos os campos');

            return redirect('/cadastrar');
        }

        if ($password !== $confirmpassword) {
            flash('message', 'As senhas devem coincidirem!');

            return redirect('/cadastrar');
        }

        AccountModel::createUser($username, $email, $password);

        flash('message', 'Cadastro feito com sucesso! faça o login abaixo..', 'success');

        return redirect('/');
    }
}
