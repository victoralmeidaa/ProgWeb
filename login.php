<?php 
session_start();
include("conexao.php");

if($_SERVER["REQUEST_METHOD"] === "POST"){  //VERICIFAR SE O FORM FOI EMVIADO VIA POST
    $email = $_POST['email'];   //RECEBER EMAIL E SENHA ENVIADOS PELO FORM
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";  //CONSULTAR O BANCO DE DADOS COM QUERY
    $stmt = $conexao->prepare($sql);    //PREPARA A CONSULTA PARA EVITAR SQL INJECTION
    $stmt->bind_param("ss", $email, $senha); //LIGA OS VALORES STRING("SS") COM AS ? DA QUERY
    $stmt->execute();   //EXECUTA NO BANCO

    $resultado = $stmt->get_result();   //PEGA OS DADOS RETORNADOS DA CONSULTA DO BANCO
    if ($resultado->num_rows > 0){  //VERIFICA SE O REGISTO DO BANCO FOI ENCONTRADO
        $_SESSION['usuarios']= $email;  //CRIA A SESSAO COM O EMAIL DO USUARIO 
        header('Location: dashboard.php');  //REDIRECIONA O USUARIO PARA DASHBOARD.PHP
        exit();

    } else {
        $erro = "Email ou Senha invalida";
    }
}
?>


