<?php 
$server="localhost";
$user="root";
$password="";
$dbname="produto";

try {
    $conn=mysqli_connect($server,$user,$password,$dbname);
} catch (Exception $e) {
    echo "Conexão falhou...";
}


?>