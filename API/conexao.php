<?php
$host = getenv("DB_HOST");
$dbname = getenv("DB_NAME");
$user = getenv("DB_USER");
$senha = getenv("DB_PASSWORD");
$endpoint = getenv("DB_ENDPOINT");

$conn_string = "host=$host port=5432 dbname=$dbname user=$user password=$senha sslmode=require options='--endpoint=$endpoint'";
$conn = pg_connect($conn_string);

if (!$conn) {
    echo json_encode(["erro" => "Falha na conexão PostgreSQL"]);
    exit;
}
?>
