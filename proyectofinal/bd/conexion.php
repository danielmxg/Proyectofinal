<?php
$server= 'localhost';
$username = 'root';
$password = '';
$database = 'login';

try {
   $sconn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);

} catch (PDOException $e) {
    die('Connected failed: '.$e->getMessage());

}
?>