<?php

use App\Core\Application;
use App\http\controllers\ContactController;
use App\http\controllers\HomeController;

include_once __DIR__ . "/../vendor/autoload.php";
include_once "../core/helpers/helpers.php";

$app = Application::getInstance();

$app->router->get('/', [HomeController::class, 'index']);
$app->router->get('/contact', [ContactController::class, 'index']);
$app->router->post('/contact', [ContactController::class, 'store']);

$app->run();
