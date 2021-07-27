<?php

use App\Core\Application;

include_once __DIR__ . '/../vendor/autoload.php';

$app = new Application();

$app->router->get('/', function () {
    echo 'hello world';
    echo "<br>";
    echo "this is the best thing I have ever created";
});

$app->router->get('/contact', function () {
    echo "contact";
});


$app->run();