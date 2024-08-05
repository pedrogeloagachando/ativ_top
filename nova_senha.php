<?php

$email = $_GET['email'];
$token = $_GET['token'];

require_once "conexao.php";
$conexao = conectar();

$sql = "SELECT * FROM `recuperar_senha` WHERE email='$email' AND token='$token'";
$resultado = executarSQL($conexao, $sql);
$recuperar = mysqli_fetch_assoc($resultado);

if ($recuperar == null) {
    echo "<h2>Email ou token incorreto. Faça um novo pedido de recurperar senha.</h2>";
    die();
} else {
    date_default_timezone_set('America/Sao_Paulo');
    $agora = new DateTime('now');
    $data_criacao = DateTime::createFromFormat(
        'Y-m-d H:i:s',
        $recuperar['data_criacao']
    );

    $UmDia = DateInterval::createFromDateString('1 day');
    $dataExpiracao = date_add($data_criacao, $UmDia);

    if ($agora > $dataExpiracao) {
        echo "<h2> Essa solicitação de recuperação de senha expirou! </h2> <br>
        <h3> Faça um novo pedido de recuperação de senha. </h3>";
        die();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova senha</title>
</head>
<body>
    <form action="salvar_senha_nova.php" method="POST">
        <fieldset>
            <legend>
                <h1>Nova Senha</h1>
            </legend>
            <input type="hidden" name="email" value="<?= $email ?>">
            <input type="hidden" name="token" value="<?= $token ?>">

            <h3>Email: <?= $email ?> <br> <br> <br>

                <label>Senha: <input type="password" name="senha" placeholder="Senha"></label> <br> <br>
                <label>Repetir senha: <input type="password" name="repetirSenha" placeholder="Senha"></label> <br> <br>

                <input type="submit" value="Salvar">
            </h3>
        </fieldset>
    </form>
</body>
</html>