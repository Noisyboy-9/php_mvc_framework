<?php

namespace App\Core;

use App\http\controllers\Controller;
use Closure;

/**
 * Class Router
 * @package App\Core
 */
class Router
{
    protected array $routes = [
        'GET' => [],
        'POST' => [],
    ];
    private Request $request;
    private Response $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * Add a get route to the list to the application GET routes.
     *
     * @param string $path
     * @param \Closure $handler
     */
    public function get(string $path, array $handler): void
    {
        $this->routes['GET'][$path] = $handler;
    }

    /**
     * Add a post route to the list of application POST routes.
     *
     * @param string $path
     * @param \Closure $handler
     */
    public function post(string $path, array $handler): void
    {
        $this->routes['POST'][$path] = $handler;
    }

    /**
     * Figure what is the current url and resolve the URL if the route
     * is registered.
     *
     */
    public function resolve(): void
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $handler = $this->routes[$method][$path] ?? false;

        if (!$handler) {
            $this->response->showNotFoundPage();
            return;
        }

        [$controller, $method] = $handler;

        (new $controller())->$method();
    }
}