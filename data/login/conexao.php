<?php

// Faz a conexão com o banco de dados

$usuario = 'root';
$senha = 'Zheng@2023';
$database = 'zhengchang';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->connect_error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->connect_error);
}
?>