<?php
$host = "localhost";
$db ="winkel";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
    echo "Connected to database (Winkel)";
} catch (PDOException $error) {
    die($error->getMessage());
};

?>