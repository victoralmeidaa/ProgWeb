<?php
$servername = "localhost";
$username = "root";
$password = ""; // por padrão no XAMPP o root não tem senha
$dbname = "progweb"; // troque pelo nome do seu banco

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão bem sucedida!";
?>
