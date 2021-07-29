<?php


namespace App\http\controllers;


class HomeController extends Controller
{
    public static function index(): void
    {
        $isLoggedIn = Application::getInstance()->isLoggedIn();
        view('home', compact('isLoggedIn'));
    }
}