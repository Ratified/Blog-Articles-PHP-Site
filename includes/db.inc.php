<?php 
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "blogs";

$dsn = "mysql:host=" . $serverName . ";dbname=" . $dbname;
try{
    $pdo = new PDO($dsn, $username, $password);
    return $pdo;
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}