<?php

$host = "localhost";
$database = "sistema_gestao_produtos";
$user = "root";
$pass = "";
$port = 3308;

$conn = new mysqli($host, $user, $pass, $database, $port);

if ($conn->connect_errno) {
    printf("Conexão falhou: %s\n", $mysqli->connect_error);
    exit();
}

$conn -> set_charset("utf8mb4");

?>