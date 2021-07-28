<?php


namespace App\http\controllers;


class HomeController extends Controller
{
    public static function index(): void
    {
        view('home');
    }
}