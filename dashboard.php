<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="dashboard">
        <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
        <p>Você está logado no sistema.</p>

        <a class="logout" href="logout.php">Sair</a>
        <br><br>
        <form action="excluir.php" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir sua conta?');">
            <button type="submit" class="excluir-btn">Excluir minha conta</button>
        </form>
    </div>


</body>
</html>