<?php


namespace App\http\controllers;


class RegisterController extends Controller
{
    public function index()
    {
        view("register");
    }

    public function store()
    {
        return 'handle register';
    }
}