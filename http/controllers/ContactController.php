<?php


namespace App\http\controllers;

use App\Core\Request;

class ContactController extends Controller
{
    public static function index(): void
    {
        view('contact');
    }

    public static function store(Request $request)
    {
        $body = $request->body();
        var_dump($body);
    }
}