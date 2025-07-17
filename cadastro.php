<?php
include("conexao.php");

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    // Verifica se o e-mail já existe
    $sql = "SELECT id FROM usuarios WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $mensagem = "E-mail já cadastrado!";
    } else {
        $stmt = $conexao->prepare("INSERT INTO usuarios (email, senha) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $senha);
        if ($stmt->execute()) {
            $mensagem = "Usuário cadastrado com sucesso!";
        } else {
            $mensagem = "Erro ao cadastrar usuário.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuário</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <div class="cadastro-container">
        <h2>Cadastrar novo usuário</h2>
        <form action="" method="POST" class="form" >
            <div class="input-group">
                <label for="email">E-mail:</label>
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <br>
            <div class="input-group"> 
                <label for="senha">Senha:</label>
                <input type="password" placeholder="Senha" name="senha" required>
            </div>
            <br>
            <button type="submit" class="cadastro-btn">Cadastrar</button>
            <p><a href="dashboard.php" class="link-voltar">Voltar para Login</a></p>
        </form><br>
        <?php if ($mensagem): ?>
            <p class="error-message"><?php echo $mensagem; ?></p>
        <?php endif; ?>
        
    </div>
</body>
</html>
