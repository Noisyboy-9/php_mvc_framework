<?php

use App\Core\Application;

include_once __DIR__ . "/../vendor/autoload.php";
include_once "../core/helpers/helpers.php";

$app = Application::getInstance();

$app->router->view('/', 'home');

$app->router->view('/contact', "contact");


$app->run();
