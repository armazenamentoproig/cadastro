<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// o resto do seu código aqui...

$conn = mysqli_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

echo "Conexão estabelecida com sucesso";
