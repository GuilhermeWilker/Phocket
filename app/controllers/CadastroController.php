<?php

namespace app\controllers;

use app\config\database\Connection;

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

        $connect = Connection::getConnection();

        $prepare = $connect->prepare(
            'INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');

        $prepare->execute([
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ]);

        $prepare->fetchObject();

        // var_dump('Usuário cadastrado com sucesso!');

        return redirect('/');
    }
}
