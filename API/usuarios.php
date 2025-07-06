<?php
require 'conexao.php';

$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo === 'GET') {
    // 🔍 Listar todos os usuários // repor 
    
    $stmt = $pdo->query("SELECT id, email FROM usuarios ORDER BY id ASC");
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($usuarios);
    exit();
}

if ($metodo === 'POST') {
    // 📥 Cadastrar novo usuário (espera JSON: { "email": "", "senha": "" })
    $dados = json_decode(file_get_contents("php://input"), true);
    if (!isset($dados['email'], $dados['senha'])) {
        http_response_code(400);
        echo json_encode(["erro" => "Dados incompletos."]);
        exit();
    }

    $email = $dados['email'];
    $senha = password_hash($dados['senha'], PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios (email, senha) VALUES (?, ?)");
        $stmt->execute([$email, $senha]);
        http_response_code(201);
        echo json_encode(["mensagem" => "Usuário cadastrado com sucesso."]);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["erro" => "Erro ao cadastrar: " . $e->getMessage()]);
    }
}
