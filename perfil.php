<?php
session_start();

if (!isset($_SESSION['email'])) {
    echo "não está logado";
    die();
} else {

    $nome = $_SESSION['email'];
}
require_once "conexao.php";
$conexao = conectar();
//usuario
$sql = "SELECT * FROM usuario WHERE email='$nome'";

$resultado = executarSQL($conexao, $sql);
$usuario1 = mysqli_fetch_assoc($resultado);

$noo = $usuario1['nome'];

$foto = $usuario1['imagem'];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
       
    <a href='foto.php'><img src="<?php echo "$foto";  ?>" alt='Sua imagem de perfil'><br><br></a>

    <h1><?php echo"$noo<br>"; ?></h1>
    
    <a href='form_alterar.php'>Alterar perfil:</a>

</body>

</html>