<?php

$nome = $_POST['email'];
$senha = $_POST['senha'];
require_once "conexao.php";
$conexao = conectar();

$sql = "SELECT * FROM usuario WHERE email='$nome'";

$resultado = executarSQL($conexao, $sql);
$usuario = mysqli_fetch_assoc($resultado);











    if ($usuario == null) {
        echo "Email não existe no sistema! por favor, primeiro realize o cadastro no sistema.";
        die();
    }

    $hash = $usuario['senha'];
    if (password_verify($senha, $hash)) {


    if ($hash == $usuario['senha']) {
        echo "Senha correta";
        header('location:perfil.php');
        session_start();
        $_SESSION['email'] = $usuario['email'];
    }}
 else {
    echo "Senha inválida! Tente novamente.";
}
