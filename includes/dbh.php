<?php

namespace Includes;

use PDO;
use PDOException;

$host = 'localhost';
$dbname = 'loginsystem';
$dbuser = 'root';
$dbpassword = '386342';

$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
};