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
    $descricao      = $_POST['descricao'];
    $email          = $_SESSION['email'];
    $usuario_id     = $_SESSION['usuario_id'];
    $dadosParaPHP   = $_POST['dadosParaPHP'];


    $sql = "INSERT INTO chamados (email, titulo, descricao, situacao, usuario_id) VALUES ('$email', '$dadosParaPHP', '$descricao' , 'Aguardando', '$usuario_id')";

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
        $mail->addAddress('giovanni.mendes@calibras.com.br');
        $mail->addReplyTo('giovanni.mendes@calibras.com.br');

        $mail->isHTML(true);
        $mail->Subject = 'Confirmacao chamado para TI';
        $mail->Body    = 'Chamado aberto para o setor de TI com sucesso. <br>' . "Assunto: " . $dadosParaPHP . "<br> Descricao: " . $descricao;

        $mail->send();
    }catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    }
}