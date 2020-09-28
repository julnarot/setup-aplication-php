<?php

$host = "setup_db";
$username = "myUser";
$password = "myUser";
$dbname = "mydb";
$port = "3306";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
