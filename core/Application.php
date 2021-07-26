<?php

namespace App\Core;

/**
 * Class Application
 * @package App\Core
 */
class Application
{
    /**
     * @var \App\Core\Router
     */
    public Router $router;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->router = new Router();
    }

}