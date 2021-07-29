<?php


namespace App\http\models;


class User extends Model
{
    public string $name;
    public string $email;
    public string $password;
    public string $passwordConfirm;
}