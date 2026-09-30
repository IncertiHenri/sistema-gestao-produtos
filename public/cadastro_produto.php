<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$categoria = $_POST["cat"];
$desc = $_POST["desc"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$data = $_POST["data"];

$sql = "INSERT INTO produtos(nome, categoria, descricao, preco, quantidade_estoque, data_validade) VALUES (?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssiis",$nome,$categoria,$desc,$preco,$quantidade,$data);

$stmt->execute();

header("Location:../index.php");
exit;

?>