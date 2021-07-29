<?php


namespace App\http\controllers;


use App\Core\Application;

class LoginController extends Controller
{
    public function index()
    {
        $isLoggedIn = Application::getInstance()->isLoggedIn();
        view('login', compact('isLoggedIn'));
    }
}