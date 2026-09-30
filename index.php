<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <h1>Bem vindo!</h1>

    <form action="public/cadastro_produto.php" method="POST">

        <label for="nome">Nome:</label>
        <input type="text" name="nome">

        <label for="cat">Categoria:</label>
        <input type="text" name="cat">

        <label for="desc">Descrição rápida:</label>
        <input type="text" name="desc">

        <label for="preco">Preço:</label>
        <input type="number" name="preco">

        <label for="quantidade">Quantidade em estoque:</label>
        <input type="number" name="quantidade">

        <label for="data">Data:</label>
        <input type="date" name="data">

        <button type="submit">Cadastrar</button>
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade em estoque</th>
            <th>Data de validade</th>
        </tr>

        <?php

        include("infra/conexao.php");

        $sql = "SELECT * FROM produtos";

        $produtos = $conn->query($sql);

        while ($produto = mysqli_fetch_assoc($produtos)) {
            ?>

            <tr>
                <td><?php echo $produto["id"] ?></td>
                <td><?php echo $produto["nome"] ?></td>
                <td><?php echo $produto["categoria"] ?></td>
                <td><?php echo $produto["descricao"] ?></td>
                <td><?php echo $produto["preco"] ?></td>
                <td><?php echo $produto["quantidade_estoque"] ?></td>
                <td><?php echo $produto["data_validade"] ?></td>
                <td>
                    <a href="public/formulario_editar_produto.php?id=<?php echo $produto["id"] ?>">Editar produto</a>
                    <a href="public/excluir_produto.php?id=<?php echo $produto["id"] ?>">Excluir produto</a>
                </td>
            </tr>
        <?php } ?>

</body>

</html>