<?php 
require "config.php";

$conn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try{
    $pdo = new PDO($conn,$user,$password);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // if ($pdo){
    //     echo "db connnected";
    // }
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}