<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "genotipo";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$bdname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES UTF8");
} catch (PDOException $e) {
}
