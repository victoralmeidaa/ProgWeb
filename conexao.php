<?php
// BANCO
$host = "ep-patient-bread-ac0do6cf-pooler.sa-east-1.aws.neon.tech";
$dbname = "neondb";
$user = "neondb_owner";
$senha = "npg_cWIOS3jgp4ku"; 

try {
    $pdo = new PDO("pgsql:host=$host;port=5432;dbname=$dbname;sslmode=require", $user, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado com sucesso!";
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

