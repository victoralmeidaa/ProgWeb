# ProgWeb
Atividade disciplina Programação Web

Dicas PHP

iniviar um servidor interno para PHP
    > php -S 127.0.0.1:8050 
    comando php - endereço maquina local: porta;

Tela de login (index.php)

Tela de cadastro de usuário (registrar.php)

Validação no backend com conexão ao banco (conexao.php)

Página protegida (dashboard.php)

Arquivo de logout (logout.php)

Arquivo de estilos (style.css)

Arquivo de validação de login(login.php)

SQL BD do Projeto

CREATE DATABASE login_db;

USE login_db;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
