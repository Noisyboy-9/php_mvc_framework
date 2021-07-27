<?php


namespace App\Core;


class Response
{
    public function setStatusCode(int $code): void
    {
        http_response_code($code);
    }

    public function showNotFoundPage(): void
    {
        $this->setStatusCode(404);
        view("pageNotFound");
    }
}