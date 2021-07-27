<?php

use App\Core\Application;

include_once __DIR__ . '/../vendor/autoload.php';
include_once '../core/helpers/view.php';

$app = new Application();

$app->router->get('/', function () {
    echo 'hello world';
    echo "<br>";
    echo "this is the best thing I have ever created";
});

$app->router->view('/contact', "contact");


$app->run();