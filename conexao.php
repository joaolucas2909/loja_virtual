<?php

$host = "localhost";
$usuario = "root";
$senha = "&tec77@info!";
$banco = "db_sistema_vendas";

// Conexão com o banco de dados
$conexao = mysqli_connect(
    $host,
    $usuario,
    $senha,
    $banco
);


if (!$conexao) {
    die("ERRO na conexão: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8mb4");

?>