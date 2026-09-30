<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$categoria = $_POST["cat"];
$desc = $_POST["desc"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$data = $_POST["data"];
$id = $_GET["id"];

$sql = "UPDATE produtos SET nome = ?, categoria = ?, descricao = ?, preco = ?, quantidade_estoque = ?, data_validade = ? WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssiiii",$nome,$categoria,$desc,$preco,$quantidade,$data,$id);

$stmt->execute();

header("Location:../index.php");
exit;

?>