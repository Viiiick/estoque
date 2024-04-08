<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            margin-top: 15%;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 10px 10px 20px #BDBDBD;

        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        input[type="text"],input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: 16px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }        
    </style>
</head>
<body>
    <div class="container">
    <h1>Novo Produto</h1>
    <form method="POST" action="incluir_produto.php">
        <input type="text" name="nome_produto" placeholder="Nome" required><br>
        <input type="text" name="marca_produto" placeholder="Marca" required><br>
        <input type="number" name="preco_produto" placeholder="Preço" required><br>
        <input type="text" name="fornecedor_produto" placeholder="Fornecedor" required><br>
        <input type="submit">
    </form>
    </div>
</body>
</html>
