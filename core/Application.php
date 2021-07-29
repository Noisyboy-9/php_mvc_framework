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
    private bool $loggedIn = false;

    /**
     * Application constructor.
     */
    private function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
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

    /**
     * Changes the loggedIn field to true.
     */
    public function login(): void
    {
        $this->loggedIn = true;
    }

    /**
     * checks if the user is logged in or not.
     *
     * @return bool
     */
    public function isLoggedIn(): bool
    {
        return $this->loggedIn;
    }

    /**
     * run the application.
     */
    public function run()
    {
        $this->router->resolve();
    }
}