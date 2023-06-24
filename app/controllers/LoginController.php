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
            flash('message', 'Você deve preencher todos os campos');

            return redirect('/');
        }

        $userFound = AccountModel::authenticateUser($email, $password);

        if (!$userFound) {
            flash('message', 'Email e senha inválidos ☹️');

            return redirect('/');
        }

        $_SESSION['logged'] = true;
        unset($userFound->password);
        $_SESSION['user'] = $userFound;
        $_SESSION['user_id'] = $userFound->id; // Definir o ID do usuário na sessão

        return redirect('/dashboard');
    }

    public function destroy()
    {
        unset($_SESSION['logged']);
        flash('message', 'Logout feito com sucesso! até a próxima 🤝', 'success');

        return redirect('/');
    }
}
