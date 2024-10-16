<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "Você não está logado";
    die();
} else {
    $email = $_SESSION['email'];
}
require_once "conexao.php";
$pastaDestino = "/uploads/";
$conexao = conectar();
$sql1 = "SELECT * FROM usuario WHERE email='$email'";
$resultado1 = executarSQL($conexao, $sql1);
if ($resultado1 == false) {
    echo "erro ao buscar no banco";
}
$usuario1 = mysqli_fetch_assoc($resultado1);


,
$foto = $usuario1['imagem'];
$sql = "DELETE FROM usuario WHERE email='$email'";
$resultado = executarSQL($conexao, $sql);
if ($resultado =!false) {
    if ($foto == 'foto_perfil.jfif') {
        header('location:index.php');
        
        session_destroy();
        die();
    } 
    
    
    if($foto != 'foto_perfil.jfif')  {


        $apagou = unlink(__DIR__ . $pastaDestino . $foto);
    }
    if ($apagou == false) {

        echo "erro ao apagar imagem antiga";
        die();
    } else {
        
        session_destroy();
        header('location:index.php');
    }
} else {
    echo "Erro ao deletar";
    die();
}
