<?php

use App\Core\Application;

include_once __DIR__ . '/vendor/autoload.php';

$app = new Application();

$app->router->get('/', function () {
    return 'hello world';
});

$app->run();