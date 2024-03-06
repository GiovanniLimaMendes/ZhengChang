<?php

// Chamando a conexão com o banco de dados
include('conexao.php');

// Verifica se os campos de usuário e senha foram preenchidos

if(isset($_POST['usuario']) && isset($_POST['senha'])){

    if(strlen($_POST['usuario']) == 0){
        echo "<p id='erro'>Preencha seu usuário</p>";
    }else if(strlen($_POST['senha']) == 0){
        echo "<p id='erro'>Preencha sua senha</p>";
    }else{
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        // Pega os dados do banco de dados para validar o login

        $sql_code = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli-> error);

        $quantidade = $sql_query->num_rows;

        // Inicia a sessão do usuáriro e redireciona para a página principal

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['usuario'] = $usuario['usuario'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: main/index.php");
        }else{
            echo "<p id='erro'>Falha ao logar! Usuário ou senha incorretos</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="imagem/png" href="../img/zhengchangdobrasil_logo-removebg-preview.png">
    <title>Login Reserva</title>
</head>
<body>
    <div class="login">
        <form action="" method="POST">
            <img src="../img/03 - Logo ZCBR Vertical.png" width="450px">
            <p>Usuário:</p>
            <input type="text" class="data[login]" id="usuario" name="usuario">
            <p>Senha:</p>
            <input type="password" id="senha" class="data[login]" name="senha">
            <input type="submit" value="Login" class="botao" id="login">
        </form>
    </div>
</body>
</html>