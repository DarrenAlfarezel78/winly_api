<?php
$host = "localhost";
$db_name = "winly_db";
$username = "root";
$password = ""; // Default Laragon biasanya kosong

try {
    $con = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
} catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}
?>