<?php
include("conn.php");


$nome_produto=$_POST['nome_produto'];
$marca_produto=$_POST['marca_produto'];
$preco_produto=$_POST['preco_produto'];
$fornecedor_produto=$_POST['fornecedor_produto'];

try {
    $sql="INSERT INTO produto VALUES(default,'$nome_produto','$marca_produto','$preco_produto','$fornecedor_produto')";
    mysqli_query($conn, $sql);
    header('location:lista_produto.php');
} catch (Exception $e) {
    echo "$e";
}

?>