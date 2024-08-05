<?php


require_once "conexao.php";
$conexao = conectar();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$hash = password_hash($senha, PASSWORD_ARGON2I);

$sql = "INSERT INTO usuario (nome, email, senha, imagem) VALUES ('$nome','$email','$hash','foto_perfil.jfif')";

$resultado = mysqli_query($conexao, $sql);

if ($resultado === false) {
    if (mysqli_errno($conexao) == 1062) {
        echo "Email já cadastrado no sistema! Tente fazer o login ou faça a recuperação de senha.";
    } else {
        echo "Erro ao inserir o novo usuário!"
            . mysqli_errno($conexao) . ":" . mysqli_error($conexao);
    }
}
header("location: index.php");