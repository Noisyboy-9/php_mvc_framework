<?php

namespace App\Core;

/**
 * Class Application
 * @package App\Core
 */
class Application
{
    private static ?self $instance = null;
    public Router $router;
    public Request $request;
    public Response $response;

    /**
     * Application constructor.
     */
    private function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
        $this->response = new Response();
    }

    /**
     * @throws \App\Exceptions\PageNotFoundException
     */
    public function run()
    {
        $this->router->resolve();
    }

    /**
     * get the singleton instance of the application class.
     *
     * @return \App\Core\Application
     */
    public static function getInstance(): Application
    {
        if (is_null(static::$instance)) {
            static::$instance = new self();
        }

        return static::$instance;
    }
}