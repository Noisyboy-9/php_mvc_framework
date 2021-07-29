<?php


namespace App\http\models;


abstract class Model
{
    protected array $errors = [];

    /**
     * Loads the data from the given array and sets it to the fields in the model.
     *
     * @param array $data
     */
    abstract public function load(array $data): void;

    /**
     * Checks if the current fields state is valid and
     * if not populates the errors array with corresponding key value pairs
     *
     * @return bool
     */
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

    /**
     * Write the current state of the model to the database.
     *
     * @return bool
     */
    abstract public function save(): bool;
}