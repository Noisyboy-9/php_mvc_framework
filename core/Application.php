<?php


use JetBrains\PhpStorm\Pure;

class Application
{
    private Router $router;

    #[Pure] public function __construct()
    {
        $this->router = new Router();
    }

}