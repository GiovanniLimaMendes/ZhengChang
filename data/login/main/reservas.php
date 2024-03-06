<?php

// Declaração de namespace do pacote PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// Chama a conexão com o banco de dados

include('../conexao.php');

// Verifique a conexão

if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

// Verifica se o formulário foi enviado

if(isset($_POST['enviar'])){

    // Pega os valores do formulário
    $email =       $_POST['email'];
    $responsavel = $_POST['responsavel'];
    $motivo =      $_POST['motivo'];
    $data =        $_POST['data'];
    $inicio =      $_POST['inicio'];
    $final =       $_POST['final'];
    $sala =        $_POST['sala'];
    $observacao =  $_POST['observacao'];

    // Query SQL para verificar se já existe uma reserva com a mesma data e sala

    $sql_verificar = "SELECT * FROM reservas WHERE data = '$data' AND sala = '$sala'";
    $result_verificar = $mysqli->query($sql_verificar);

    // Verifica se já existe uma reserva com a mesma data e sala

    if ($result_verificar->num_rows > 0) {
        echo "<script>alert('Sala já reservada nessa data.');</script>";

    } else {

        // Query SQL para inserir os dados na tabela

        $sql = "INSERT INTO reservas (email, responsavel, motivo, data, inicio, final, sala, observacao) VALUES ('$email', '$responsavel', '$motivo', '$data', '$inicio', '$final', '$sala', '$observacao')";

        
        if($mysqli->query($sql) === TRUE){
            echo "<script>alert('Sala reservada com sucesso.');</script>";

            $mail = new PHPMailer(true);

            try {

                // Configuração do servidor para envio de e-mail

                $mail->SMTPDebug = 0;                      
                $mail->isSMTP();                                           
                $mail->Host       = 'smtp.exchangecorp.com.br';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'giovanni.mendes@calibras.com.br';
                $mail->Password   = 'GMC@libras2024';
                $mail->Port       = 587;
    
                // Configuração dos destinatarios do e-mail
                $mail->setFrom('giovanni.mendes@calibras.com.br');
                $mail->addAddress($email);
                $mail->addReplyTo('giovanni.mendes@calibras.com.br');
    
                $mail->isHTML(true);
                $mail->Subject = 'Confirmacao reserva da sala de reuniao';
                $mail->Body    = 'Reserva da ' . $sala . ' realizada com sucesso. <br>' . "Dia: " . $data . "<br> Das: " . $inicio . "<br> Ate: " . $final . "<br> Motivo da reuniao: " . $motivo . "<br> Responsavel pela reserva: " . $responsavel . "<br> Observacao: " . $observacao;
    
                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }else{
            echo "Erro ao inserir registro: " . $mysqli->error;
        }
    }
    $mysqli->close();
}
?>