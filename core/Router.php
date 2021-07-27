<?php

namespace App\Core;

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

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Add a get route to the list to the application GET routes.
     *
     * @param string $path
     * @param \Closure $closure
     */
    public function get(string $path, Closure $closure): void
    {
        $this->routes['GET'][$path] = $closure;
    }

    /**
     * @param string $path
     * @param string $viewName
     */
    public function view(string $path, string $viewName): void
    {
        $callback = function () use ($viewName) {
            view($viewName);
        };

        $this->get($path, $callback);
    }

    /**
     * Add a post route to the list of application POST routes.
     *
     * @param string $path
     * @param \Closure $closure
     */
    private function post(string $path, Closure $closure): void
    {
        $this->routes['POST'][$path] = $closure;
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
        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            Application::getInstance()->response->showNotFoundPage();
            return;
        }

        $callback();
    }
}