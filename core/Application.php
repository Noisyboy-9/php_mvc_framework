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
    public Request $request;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}