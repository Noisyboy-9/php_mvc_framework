<?php


namespace App\Core;


/**
 * Class Request to model the incoming request to the server.
 * @package App\Core
 */
class Request
{
    /**
     * Gets the incoming request path
     *
     * @return string
     */
    public function getPath(): string
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        if (strpos($path, '?')) {
//            a query parameter exists in the requestURI.
            $path = explode('?', $path)[0];
        }

        return $path;
    }

    /**
     * Gets the method of the incoming request
     *
     * @return string
     */
    public function getMethod(): string
    {
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }

    /**
     * Gets a sanitized version of the request body.
     *
     * @return array
     */
    public function getBody(): array
    {
        $body = [];

        if ($this->getMethod() === 'GET') {
//            our request is a get method, so have to get the data from $_GET super global.
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
            return $body;
        }

        if ($this->getMethod() === 'POST') {
//        our request is using post method, so have to use the $_POST super global.
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $body;
    }
}