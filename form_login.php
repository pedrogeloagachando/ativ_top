<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar</title>
</head>

<body>
    <form action="login.php" method="post">
        <fieldset>
            <legend>
                <h1>Login</h1>
            </legend>

            <h4><label>Email: <input type="email" name="email"></label></h4>
            <h4><label>Senha: <input type="password" name="senha" required></label></h4>
            <br>
            <input type="submit" value="Logar">
            <h4><a href="form-recuperar-senha.php">Recuperar senha</a></h4>
        </fieldset>
    </form>
</body>

</html>