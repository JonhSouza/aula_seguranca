<?php

session_start();

include('conexao.php');
include('validarlogin.php');

$nivel = $_SESSION['nivel'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>

<body>
    <center>

        <?php
        if ($nivel < 3) { ?>
            <a href="addusuarios.php">Adicionar usuário</a>
        <?php } ?> <br>

        <?php
        if ($nivel == 1) { ?>
            <a href="mudaracesso.php">Mudar acesso</a>
        <?php } ?> <br>
        <a href="logout.php">Sair</a>

    </center>
</body>

</html>