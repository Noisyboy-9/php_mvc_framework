<?php


namespace App\http\controllers;


use App\Core\Application;
use App\Core\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $isLoggedIn = Application::getInstance()->isLoggedIn();
        view("register", compact('isLoggedIn'));
    }

    public function store(Request $request)
    {
        var_dump($request->body());
        die();
        echo 'handle register';
    }
}