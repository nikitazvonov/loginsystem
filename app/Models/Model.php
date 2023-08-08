<?php

namespace App\Models;

use PDO;

class Model
{
    public function getUsername(PDO $pdo, $username): array {
        $sql = "SELECT username FROM users WHERE username = :username";
        $statement = $pdo->prepare($sql);
        $statement->bindParam('username', $username);
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getEmail(PDO $pdo, $email) {
        $sql = "SELECT email FROM users WHERE email = :email";
        $statement = $pdo->prepare($sql);
        $statement->bindParam('email', $email);
        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}