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

    public function get(string $path, Closure $closure)
    {
        $this->routes['GET'][$path] = $closure;
    }

    public function post(string $path, Closure $closure)
    {
        $this->routes['POST'][$path] = $closure;
    }
}