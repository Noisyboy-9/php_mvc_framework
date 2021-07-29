<?php


namespace App\http\controllers;


use App\Core\Application;

class HomeController extends Controller
{
    public static function index(): void
    {
        $isLoggedIn = Application::getInstance()->isLoggedIn();
        view('home', compact('isLoggedIn'));
    }
}