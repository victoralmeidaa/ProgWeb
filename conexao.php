<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "progweb"; // nome correto do seu banco de dados no phpMyAdmin

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
?>
