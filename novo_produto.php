<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
</head>
<body>
    <h1>Novo Produto</h1>
    <form method="POST" action="incluir_produto.php">
        <input type="text" name="nome_produto" placeholder="Nome:"><br>
        <input type="text" name="marca_produto" placeholder="Marca:"><br>
        <input type="number" name="preco_produto" placeholder="Preço:"><br>
        <input type="text" name="fornecedor_produto" placeholder="Fornecedor:"><br>
        <input type="submit">
    </form>
</body>
</html>
