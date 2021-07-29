<?php


namespace App\http\controllers;


class RegisterController extends Controller
{
    public function index()
    {
        $isLoggedIn = Application::getInstance()->isLoggedIn();
        view("register", compact('isLoggedIn'));
    }

    public function store()
    {
        echo 'handle register';
    }
}