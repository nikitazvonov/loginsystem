<?php

namespace Includes;

use App\Http\Controllers\SignupController;
use PDO;
use PDOException;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    try {
        require_once('dbh.php');

        if (SignupController::isInputEmpty($username, $password, $email)) {

        }
        if (SignupController::isEmailInvalid($email)) {

        }
        if (SignupController::isUsernameTaken($pdo, $username)) {

        }
        if (SignupController::isEmailRegistered($pdo, $email)) {

        } 



    } catch (PDOException $e) {
    die($e->getMessage());
    };
} else {
    header('Location: ../index.php');
    die();
}

