<?php 
    
    // GRAVAR NO BANCO
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "progweb";

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
     
    if ($link->connect_error) {
        die("Erro na conexão com o banco: " . $conexao->connect_error);
    }
?>
<a href="login.php"> Voltar </a>