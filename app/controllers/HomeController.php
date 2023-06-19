<?php

namespace app\controllers;

class HomeController
{
    public function index()
    {
        view('home', ['title' => 'Home']);
    }
}
