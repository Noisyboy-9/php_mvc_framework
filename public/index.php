<?php

use App\Core\Application;

include_once __DIR__ . '/../vendor/autoload.php';
include_once '../core/helpers/view.php';

$app = new Application();

$app->router->view('/', 'home');

$app->router->view('/contact', "contact");


$app->run();