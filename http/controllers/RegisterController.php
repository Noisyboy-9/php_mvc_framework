<?php


namespace App\http\controllers;


use App\Core\Application;
use App\Core\Request;
use App\http\models\User;

class RegisterController extends Controller
{
    public function index()
    {
        $isLoggedIn = Application::getInstance()->isLoggedIn();
        view("register", compact('isLoggedIn'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->load($request->body());

        if ($user->isValid() && $user->save()) {
            die('success');
        }

        die('failure');
    }
}