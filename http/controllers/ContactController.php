<?php


namespace App\http\controllers;


class ContactController
{
    public static function index(): void
    {
        view('contact');
    }

    public static function store()
    {
        echo "handle data";
    }
}