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

</body>
</html>