<?php
// Verificação de sessão/login
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['usuario'])){
    die("Você não pode acessar essa página porque não está logado.<p><a href=\"http://192.168.1.15/zhengchang/data/login/index.php\">Entrar</p>");
}

?>