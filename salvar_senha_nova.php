<?php

$email = $_POST['email'];
$token = $_POST['token'];
$senha = $_POST['senha'];
$repetirSenha = $_POST['repetirSenha'];

require_once "conexao.php";
$conexao = conectar();

$sql = "SELECT * FROM `recuperar_senha` WHERE email='$email' AND token='$token'";
$resultado = executarSQL($conexao, $sql);
$recuperar = mysqli_fetch_assoc($resultado);

if ($recuperar == null) {
    echo "<h2>Email ou token incorreto. Tente fazer um novo pedido de recurperar senha.</h2>";
    die();
} else {
    date_default_timezone_set('America/Sao_Paulo');
    $agora = new DateTime('now');
    $data_criacao = DateTime::createFromFormat(
        'Y-m-d H:i:s',
        $recuperar['data_criacao']);

    $UmDia = DateInterval::createFromDateString('1 day');
    $dataExpiracao = date_add($data_criacao, $UmDia);

    if ($agora > $dataExpiracao) {
        echo "<h2> Essa solicitação de recuperação de senha expirou! </h2> <br>
        <h3> Faça um novo pedido de recuperação de senha. </h3>";
        die();
    }

    if ($recuperar['usado'] == 1) {
        echo "<h2>Esse pedido de recuperação de senha já foi utilizado!
        Para recuperar a senha, faça um novo pedido de recuperação se senha.</h2>";
        die();
    }

    if ($senha != $repetirSenha) {
        echo "<h2>A senha que você digitou é diferente da senha que
        você digitou no repetir senha. Por favor tente novamente!</h2>";
        die();
    }

    $sql2 = "UPDATE usuario SET senha='$senha' WHERE email='$email'";

    executarSQL($conexao, $sql2);

    $sql3 = "UPDATE `recuperar_senha` SET usado=1 WHERE email='$email' AND token='$token'";

    executarSQL($conexao, $sql3);

    echo "<h2>Nova senha cadastrada com sucesso! Faça o login para acessar o sistema. </h2><br>";
    echo "<h2><a href='form_login.php'>Acessar o sistema</a></h2>";
}