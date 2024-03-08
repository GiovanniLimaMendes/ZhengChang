<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';

include('../../conexao.php');

if ($mysqli->connect_error){
    die("Falha na conexão: " . $mysqli->connect_error);
}

if (isset($_POST['enviar'])){
    $setor      = $_POST['setor'];
    $titulo     = $_POST['titulo'];
    $descricao  = $_POST['descricao'];
    $email      = $_SESSION['email'];
    $usuario_id = $_SESSION['usuario_id'];

    $sql = "INSERT INTO chamados (setor, email, titulo, descricao, situacao, usuario_id) VALUES ('$setor', '$email', '$titulo', '$descricao' , 'Aguardando', '$usuario_id')";

    if ($mysqli->query($sql) === TRUE){
        echo "<script>alert('Chamado aberto com sucesso, entraremos em contato com você.')</script>";
        $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug  = 0;                      
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.exchangecorp.com.br';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'giovanni.mendes@calibras.com.br';
        $mail->Password   = 'GMC@libras2024';
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('giovanni.mendes@calibras.com.br');
        $mail->addAddress($email);

        switch ($setor){
            case "TI":
                $destinatario = 'giovanni.mendes@calibras.com.br';
                break;
            
            case "Engenharia":
                $destinatario = 'giovannilmendes@gmail.com';
        }

        $mail->addAddress($destinatario);
        $mail->addAddress($email);
        $mail->addReplyTo('giovanni.mendes@calibras.com.br');

        $mail->isHTML(true);
        $mail->Subject = 'Confirmacao chamado para o setor: ' . $setor;
        $mail->Body    = 'Chamado aberto para o setor de ' . $setor . ' com sucesso. <br>' . "Titulo: " . $titulo . "<br> Descricao: " . $descricao;

        $mail->send();
    }catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    }
}