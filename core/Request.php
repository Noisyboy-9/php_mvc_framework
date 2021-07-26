<?php


namespace App\Core;


class Request
{
    private string $method;

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        if (strpos($path, '?')) {
//            a query parameter exists in the requestURI.
            $path = explode('?', $path)[0];
        }

        return $path;
    }

    public function getMethod()
    {

        return strtoupper($_SERVER['REQUEST_METHOD']);
    }
}