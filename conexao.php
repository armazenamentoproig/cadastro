<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// o resto do seu código aqui...


$db_host = getenv("HOST");
$db_user = getenv("USERNAME");
$db_password = getenv("PASSWORD");
$db_name = getenv("DATABASE");

// Establish a connection to the database
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
