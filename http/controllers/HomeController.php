<?php


namespace App\http\controllers;


class HomeController
{
    public static function index()
    {
        view('home');
    }
}