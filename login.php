
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1.1">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="processa_login.php" method="POST">
            <div class="input-group"> 
                <label for="email">E-mail:</label>
                <input type="email" name="email" required>
            </div>
            <br>
            <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required>
            </div>
            <br>
            <button type="submit" class="login-btn">Entrar</button>
        </form>
    </div>
</body>

</html>