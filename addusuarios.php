<?php

session_start();

include('conexao.php');

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$selectcpf = "SELECT cpf FROM usuario WHERE cpf = '$cpf'";
$querycpf = mysqli_query($conexao, $selectcpf);
$dadocpf = mysqli_fetch_row($querycpf);

var_dump ($dadocpf);

$selectlogin = "SELECT login FROM login WHERE login = '$login'";
$querylogin = mysqli_query($conexao, $selectlogin);
$dadologin = mysqli_fetch_row($querylogin);

var_dump ($dadologin);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Adicionar usuário</h1>
        <form id="form-addusuarios" action="#" method="POST">
            Nome: <input type="text" name="nome" required><br>
            CPF: <input type="text" name="cpf" required><br>
            Telefone: <input type="text" name="telefone" required><br>
            Login: <input type="text" name="login" required><br>
            Senha: <input type="text" name="password" required><br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </center>
</body>
</html>