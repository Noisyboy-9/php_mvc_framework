<?php


namespace App\http\models;


class User extends Model
{
    public string $name;
    public string $email;
    public string $password;
    public string $passwordConfirmation;

    /**
     * populate the model fields with array data.
     *
     * @param array $data
     */
    public function load(array $data): void
    {
        $this->name = trim($data['name']);
        $this->email = trim($data['email']);
        $this->password = trim($data['password']);
        $this->passwordConfirmation = trim($data['password_confirmation']);
    }

    /**
     * Checks if the current state of the models value is valid or not.
     * if it isn't valid it will populate the errors array with corresponding key value pair.
     *
     * @return bool
     */
    public function isValid(): bool
    {
        $validationResult = true;

        if (empty($this->name)) {
            $this->errors['name'] = "The name field is required.";
            $validationResult = false;
        }

        if (empty($this->email)) {
            $this->errors['email'] = "The email field is required.";
            $validationResult = false;
        }

        if (empty($this->password)) {
            $this->errors['password'] = "The password field is required.";
            $validationResult = false;
        }

        if (empty($this->passwordConfirmation)) {
            $this->errors['password_confirmation'] = "The password confirmation field is required.";
            $validationResult = false;
        }

        if ($this->password !== $this->passwordConfirmation) {
            $this->errors['password'] = "The password confirmation doesn't match.";
            $validationResult = false;
        }

        return $validationResult;
    }
}