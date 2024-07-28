<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <form action="cadastrar.php" method="post">
        <fieldset>
            <legend>
                <h1>Cadastro</h1>
            </legend>
            <h4><label>Nome de usuário: <input type="text" name="nome"></label></h4>
            <h4><label>Email: <input type="email" name="email"></label></h4>
            <h4><label>Senha: <input type="password" name="senha" required></label></h4>
            <br>
            <input type="submit" value="Cadastrar-se">

            <h4><a href="form_login.php">Ir para  login</a></h4>
        </fieldset>
    </form>
</body>

</html>