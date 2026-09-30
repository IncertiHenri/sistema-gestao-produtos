<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$categoria = $_POST["cat"];
$desc = $_POST["desc"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$data = $_POST["data"];
$id = $_GET["id"];

if (mb_strlen($nome) < 3) {
    echo "<script>alert('O nome deve conter no mínimo 3 caracteres');
    window.location.href = '../index.php';
    </script>";
    exit;
}
if (mb_strlen($categoria) < 5) {
    echo "<script>alert('A categoria deve conter no mínimo 5 caracteres');
    window.location.href = '../index.php';
    </script>";
    exit;
}
if (mb_strlen($desc) < 1) {
    echo "<script>alert('A descrição deve ser preenchida');
    window.location.href = '../index.php';
    </script>";
    exit;
}
if ($preco <= 1) {
    echo "<script>alert('O preço deve ser acima de 1 real');
    window.location.href = '../index.php';
    </script>";
    exit;
}
if ($quantidade <= 1) {
    echo "<script>alert('A quantidade em estoque deve ser de pelo menos 1');
    window.location.href = '../index.php';
    </script>";
    exit;
}

if ($data <= 1) {
    echo "<script>alert('Insira uma data válida');
    window.location.href = '../index.php';
    </script>";
    exit;
}

$sql = "UPDATE produtos SET nome = ?, categoria = ?, descricao = ?, preco = ?, quantidade_estoque = ?, data_validade = ? WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssiiii", $nome, $categoria, $desc, $preco, $quantidade, $data, $id);

$stmt->execute();

header("Location:../index.php");
exit;

?>