<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <form action="cadastrar.php" method="post">
        <label>Nome de usuário: <input type="text" name="nome"></label><br><br>
        <label>Email: <input type="email" name="email"></label><br><br>
        <label>Senha: <input type="password" name="senha" required></label><br>
        <br>
        <input type="submit" value="Cadastrar-se">
    </form>
</body>

</html>