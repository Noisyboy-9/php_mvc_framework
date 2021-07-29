<?php

use App\Core\Application;
use App\http\controllers\ContactController;
use App\http\controllers\HomeController;
use App\http\controllers\LoginController;
use App\http\controllers\RegisterController;

include_once __DIR__ . "/../vendor/autoload.php";
include_once "../core/helpers/helpers.php";

$app = Application::getInstance();

//home page
$app->router->get('/', [HomeController::class, 'index']);

//contact
$app->router->get('/contact', [ContactController::class, 'index']);
$app->router->post('/contact', [ContactController::class, 'store']);
$app->router->get('/register', [RegisterController::class, 'index']);
$app->router->get('/login', [LoginController::class, 'index']);

$app->run();
