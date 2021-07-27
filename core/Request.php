<?php


namespace App\Core;


class Request
{
    public function getPath(): string
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        if (strpos($path, '?')) {
//            a query parameter exists in the requestURI.
            $path = explode('?', $path)[0];
        }

        return $path;
    }

    public function getMethod(): string
    {

        return strtoupper($_SERVER['REQUEST_METHOD']);
    }
}