<?php
require_once 'conexao.php';
$conexao = conectar();
session_start();

if (!isset($_SESSION['email'])) {
    echo "Você não está logado";
    die();
} else {

    $email = $_SESSION['email'];
}

$teste = $_FILES['arquivo'];
$pastaDestino = "/uploads/";



if ($_POST['email'] != null) {
    
    $novoemail = $_POST['email'];

    $sql = "UPDATE usuario
        SET email='$novoemail'
        WHERE email='$email'";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_errno($conexao) == 1062) {
        echo "Email já está sendo usado. Tente outro email";
        die();
    }

    if ($resultado != false) {
        session_destroy();
        session_start();
        $_SESSION['email'] = $novoemail;
       // header('location:perfil.php');
    } else {
        echo "Erro ao alterar email";
    }
}


if ($_POST['nome'] != null) {

    
    $novonome = $_POST['nome'];
    $em=$_SESSION['email'];


    $sql = "UPDATE usuario
        SET nome='$novonome'
        WHERE email='$em'";
    $resultado = mysqli_query($conexao, $sql);
   

    if ($resultado != false) {
        echo'trocou';
    } else {
        echo "Erro ao alterar nome";
    }
}






if ($_FILES['arquivo']['size'] != 0) {
    //print_r($teste);

    // verificar se o tamanho do arquivo é maior que 2 MB
    if ($_FILES['arquivo']['size'] > 2000000) {  // condição de guarda 👮
        echo "O tamanho do arquivo é maior que o limite permitido. Limite máximo: 2 MB.";
        die();
    }

    // verificar se o arquivo é uma imagem
    $extensao = strtolower(pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION));

    if (
        $extensao != "png" && $extensao != "jpg" &&
        $extensao != "jpeg" && $extensao != "gif" &&
        $extensao != "jfif" && $extensao != "svg"
    ) { // condição de guarda 👮
        echo "O arquivo não é uma imagem! Apenas selecione arquivos 
    com extensão png, jpg, jpeg, gif, jfif ou svg.";
        die();
    }

    // verificar se é uma imagem de fato
    if (getimagesize($_FILES['arquivo']['tmp_name']) === false) {
        echo "Problemas ao enviar a imagem. Tente novamente.";
        die();
    }

    $nomeArquivo = uniqid();

    // se deu tudo certo até aqui, faz o upload
    $fezUpload = move_uploaded_file(
        $_FILES['arquivo']['tmp_name'],
        __DIR__ . $pastaDestino . $nomeArquivo . "." . $extensao
    );






    if ($fezUpload == true) {
        $em=$_SESSION['email'];
        $sql = "UPDATE usuario
    SET imagem='$nomeArquivo.$extensao'
    WHERE email='$em'";
        $resultado = mysqli_query($conexao, $sql);
    }




    if ($resultado != false) {
        // se for uma alteração de arquivo
        if ($_POST['nome_arquivo'] == "foto_perfil.jfif") {
            header('location:perfil.php');
        }


        if (isset($_POST['nome_arquivo']) and $_POST['nome_arquivo'] != "foto_perfil.jfif") {
            $apagou = unlink(__DIR__ . $pastaDestino . $_POST['nome_arquivo']);
        } else {
            echo "Erro ao apagar o arquivo antigo.";
            die();
        }
    }
}


header('location:perfil.php');