<?php include ("conn.php")?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    
    <form method="post" action="">
    <input type="email" placeholder="E-mail" name="email" required><br>
    <input type="password" placeholder="Senha" name="senha" required><br>
    <input type="submit"><br>
    </form>
</body>
</html>

<?php 
if (!empty($_POST)) {

    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $hash=password_hash($senha, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO usuario VALUES (null, '$email', '$hash')");

}
?>