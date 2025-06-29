<?php
$host = "ep-patient-bread-ac0do6cf-pooler.sa-east-1.aws.neon.tech";
$dbname = "neondb";
$user = "neondb_owner";
$senha = "npg_cWIOS3jgp4ku";
$endpoint = "ep-patient-bread-ac0do6cf";

$conn_string = "host=$host port=5432 dbname=$dbname user=$user password=$senha sslmode=require options='--endpoint=$endpoint'";

$conn = pg_connect($conn_string);

if (!$conn) {
    echo json_encode(["erro" => "Falha na conexão PostgreSQL"]);
    exit;
}

// Teste
echo json_encode(["sucesso" => "Conectado com sucesso via pg_connect"]);
