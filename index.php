<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST" class="form">
            <div class="input-group"> 
                <label for="email">E-mail:</label>
                <input type="email" placeholder="Email" name="email" required>
            </div> 
            <br>
            <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" placeholder="Senha" name="senha"> 
            </div>
            <br>
            <button type="submit" class="login-btn">Entrar</button>
            <p><a href="cadastro.php">Cadastrar-se</a></p>
           
        </form>
    </div>
</body>

</html>