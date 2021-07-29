<?php


namespace App\http\models;


abstract class Model
{
    protected array $errors = [];

    abstract public function load(array $data): void;

    abstract public function isValid(): bool;

    /**
     * return the array containing all the errors related to the model values.
     *
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}