<?php 
include ("conn.php");

$select="SELECT * FROM produto";
$result=$conn->query($select);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <style>
        h1 {
            text-align: center;
        }

        body {
            font-family: Arial, sans-serif;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Produtos</h1>

    <table border="1">
    <tr>
        <th>Nome</th>
        <th>Marca</th>
        <th>Preço</th>
        <th>Fornecedor</th>
    </tr>
    <?php 
    if ($result->num_rows>0) {
        while ($produto=$result->fetch_assoc()) {
    ?>
    <tr>
        <td><?=$produto['nome_produto']?></td>
        <td><?=$produto['marca_produto']?></td>
        <td>R$ <?=$produto['preco_produto']?></td>
        <td><?=$produto['fornecedor_produto']?></td>
    </tr>
    <?php } }?>
    </table>

</body>
</html>