<?php


namespace App\http\controllers;


class ContactController
{
    public static function index()
    {
        view('contact');
    }

    public static function store()
    {
        echo "handle data";
    }
}