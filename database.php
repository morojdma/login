<?php

$server = 'localhost:33061';
$username = 'root';
$password = '';
$database = '3dmaker';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
