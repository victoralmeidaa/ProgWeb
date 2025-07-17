<?php 
session_start();
include("conexao.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){  //VERICIFAR SE O FORM FOI EMVIADO VIA POST
    $email = $_POST['email'];   //RECEBER EMAIL E SENHA ENVIADOS PELO FORM
    $senha = $_POST['senha'];
    
    $sql = "SELECT * FROM usuarios WHERE email = ?";  //CONSULTAR O BANCO DE DADOS COM QUERY
    $stmt = $conexao->prepare($sql);    //PREPARA A CONSULTA PARA EVITAR SQL INJECTION
    $stmt->bind_param("s", $email); //LIGA OS VALORES STRING("SS") COM AS ? DA QUERY
    $stmt->execute();   //EXECUTA NO BANCO
    $resultado = $stmt->get_result();   //PEGA OS DADOS RETORNADOS DA CONSULTA DO BANCO
    
    if ($resultado->num_rows > 0) {  //VERIFICA SE O REGISTO DO BANCO FOI ENCONTRADO
        $usuario = $resultado -> fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario'] = $usuario['email'];
            header('Location: dashboard.php');
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "E-mail não encontrado.";
    }
       
}
?>
<a href="index.php"> Voltar </a>


