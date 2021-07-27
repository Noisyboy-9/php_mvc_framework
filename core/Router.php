<?php

namespace App\Core;

use App\Exceptions\PageNotFoundException;
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
     * Add a post route to the list of application POST rouets.
     *
     * @param string $path
     * @param \Closure $closure
     */
    public function post(string $path, Closure $closure): void
    {
        $this->routes['POST'][$path] = $closure;
    }

    /**
     * Figure what is the current url and resolve the URL if the route
     * is registered.
     *
     * @throws \App\Exceptions\PageNotFoundException
     */
    public function resolve(): void
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            throw new PageNotFoundException("Not found Exception.", 404);
        }

        $callback();
    }
}