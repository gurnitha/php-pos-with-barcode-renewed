<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=php_pos_with_barcode", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>