<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flaDB";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // setting the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE $dbname";
    // using exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully with the name $dbname";
} catch (PDOException $e) {
    echo " " . $e->getMessage();
}
$conn = null;
?>