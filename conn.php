<?php 
$server="localhost";
$user="root";
$password="";
$dbname="estoque";

try {
    $conn=mysqli_connect($server,$user,$password,$dbname);
} catch (Exception $e) {
    echo "Conexão falhou...";
}


?>