<?php


namespace App\http\controllers;

use App\Core\Application;
use App\Core\Request;

class ContactController extends Controller
{
    public static function index(): void
    {
        $isLoggedIn = Application::getInstance()->isLoggedIn();
        view('contact', compact('isLoggedIn'));
    }

    public static function store(Request $request)
    {
        $body = $request->body();
        var_dump($body);
    }
}