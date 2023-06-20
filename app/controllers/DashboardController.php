<?php

namespace app\controllers;

class DashboardController
{
    public function index()
    {
        view('dashboard', ['title' => 'Dashboard 🪙']);
    }
}
