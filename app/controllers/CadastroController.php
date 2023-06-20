<?php

namespace app\controllers;

class CadastroController
{
    public function index()
    {
        view('cadastro', ['title' => 'Cadastro']);
    }
}
