<?php

namespace App\Http\Controllers;

interface ControllerInterface
{
    public function isInputEmpty(string $username, string $password, string $email): bool;
    public function isEmailInvalid(string $email): bool;
    public function isUsernameTaken(string $username): bool;
    public function isEmailRegistered(string $email): bool;
}