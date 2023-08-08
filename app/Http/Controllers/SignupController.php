<?php

namespace App\Http\Controllers;

use App\Models\Model;
use PDO;

class SignupController implements ControllerInterface
{
    public static function isInputEmpty(string $username, string $password, string $email): bool {
        if (empty($username) || empty($password) || empty($email)) {
            return true;
        } else {
            return false;
        }
    }

    public static function isEmailInvalid(string $email): bool {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public static function isUsernameTaken(PDO $pdo, string $username): bool {
        $model = new Model();
        if ($model->getUsername($pdo, $username)) {
            return true;
        } else {
            return false;
        }
    }

    public static function isEmailRegistered(PDO $pdo, string $email): bool {
        $model = new Model();
        if ($model->getEmail($pdo, $email)) {
            return true;
        } else {
            return false;
        }
    }
}