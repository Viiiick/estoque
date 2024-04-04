<?php
include ('conn.php');
include ('incluir_produto.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        
        }
        th, td {
            border: 1px black solid;
            text-align: center;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Lista de Produtos</h1>
    
    <table>
        <tr>
            <th>Nome</th>
            <th>Marca</th>
            <th>Preço</th>
            <th>Fornecedor</th>
        </tr>

        <?php 
        $dados=mysqli_query($conn, "SELECT * FROM produto");
        while($item=mysqli_fetch_array($dados)) {
        ?>
        <td><?=$item["nome_produto"]?></td>
        <td><?=$item["marca_produto"]?></td>
        <td><?=$item["preco_produto"]?></td>
        <td><?=$item["fornecedor_produto"]?></td>

        <?php }?>

    </table>
</body>
</html>