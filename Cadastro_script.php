<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Clientes </title>
</head>
<body>

<?php
    include "conexao.php";
    
    if (mysqli_connect_error()) {
        echo "Problemas para conectar no banco. Vericar dados";
        die();
    }

        $sql = "INSERT INTO pessoas (nome, endereco, telefone, email)" . "VALUES ('{$_POST["nome"]}', '{$_POST["endereco"]}', '{$_POST["telefone"]}', '{$_POST["email"]}')";

    $conexao->query($sql);
    $conexao->close();
  
    echo "Cadastrado com sucesso!";

    header("refresh:1;url=cadastro.html");

?>


</body>
</html>