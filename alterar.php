<?php
require_once 'conexao.php';
session_start();



if (!isset($_SESSION['email'])) {
    echo "Você não está logado";
    die();
} else {

    $email = $_SESSION['email'];
}



$teste=$_FILES['arquivo'];
$pastaDestino = "/uploads/";
if($_FILES['arquivo']['size'] != 0){
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
    $conexao = conectar();
    $sql = "UPDATE usuario
    SET imagem='$nomeArquivo.$extensao'
    WHERE email='$email'";
    $resultado = mysqli_query($conexao, $sql);
    

}




    if ($resultado != false ) {
        // se for uma alteração de arquivo
        if (isset($_POST['nome_arquivo']) and $_POST['nome_arquivo'] != "foto_perfil.jfif") {
            $apagou = unlink(__DIR__ . $pastaDestino . $_POST['nome_arquivo']);
            
                }
             else {
                echo "Erro ao apagar o arquivo antigo.";
                die();
            }
        
        }
    }


    if($_POST['email'] != null){

        $conexao = conectar();
        $novoemail=$_POST['email'];
    
        

        $sql = "UPDATE usuario
        SET email='$novoemail'
        WHERE email='$email'";
        $resultado = mysqli_query($conexao, $sql);
        
        header('');

    }