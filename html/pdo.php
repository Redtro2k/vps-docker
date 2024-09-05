<?php
$dsn = 'mysql:host=mysql;dbname=mydb;charset=utf8mb4';
$username = 'user';
$password = 'userpassword';

try{
    $pdo = new PDO($dsn, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "PDO Connection successful!";

} catch (PDOException $e){
    echo "Connection field: ". $e->getMessage();
}
