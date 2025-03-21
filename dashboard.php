<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit();
}

echo "<h2>Bem-vindo, " . $_SESSION['usuario'] . "!</h2>";
echo "<a href='logout.php'>Sair</a>";
?> 