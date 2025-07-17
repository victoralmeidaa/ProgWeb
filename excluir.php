<?php
session_start();
include("conexao.php");

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION['usuario'];

$sql = "DELETE FROM usuarios WHERE email = ?";
$stmt = $cpnexao -> prepare($sql);
$stmt -> bind_param("s", $email);

if ($stmt -> execute()) {
    session_destroy();
    header("Location: index.php?msg=Conta_excluida");
    exit();
} else {
    echo "Erro ao excluir a conta.";
}

?>