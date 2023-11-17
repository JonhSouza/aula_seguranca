<?php

session_start();

include('conexao.php');
include('validaradmin.php');

$cpf = $_GET['cod'];

$select = "SELECT nome, descricao, nivel.id, login.cpf FROM usuario 
			INNER JOIN login ON usuario.cpf = login.cpf
			INNER JOIN nivel ON nivel.id = nivel
			WHERE usuario.cpf = '$cpf'";
$queryselect = mysqli_query($conexao, $select);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>
    <center>
        <form name="mudatipo" action="mudartipo.php" method="POST">
            <table border="1px">
                <tr>
                    <td>Nome</td>
                    <td>Tipo de Usuário</td>
                    <td>Novo Tipo de Usuário</td>
                    <td>Alterar</td>
                </tr>
                <?php
                while ($linha = mysqli_fetch_row($queryselect)) { ?>
                    <tr>
                        <td>
                            <?php echo $linha[0] ?>
                        </td>
                        <td>
                            <?php echo $linha[1] ?>
                        </td>
                        <td>
                            <select name="nivel">
                                <option value="1">Administrador</option>
                                <option value="2">Gerente</option>
                                <option value="3">Usuário</option>
                            </select>
                        </td>
                        <td>
                            <input type="hidden" name="cpf" value=<?php echo $linha[3] ?>>
                            <input type="submit" name="alterar" value="Alterar">
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    </center>
</body>

</html>