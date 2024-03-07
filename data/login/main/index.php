<?php

// Chama os arquivos necessários para funcionamento

include('../protect.php');
include('../conexao.php');
include('reservas.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="imagem/png" href="../../img/zhengchangdobrasil_logo-removebg-preview.png">
    <title>Fazer reserva</title>
</head>
<body>
    <nav id="sidebar">
        <div id="sidebar_content">
            <ul id="side_items">
                <li class="side-item-user">
                    <a>
                        <img src="../../img/circle-user-solid.svg" width="30px">
                        <span class="item-description">
                            <?php

                            if (isset($_SESSION['usuario'])) {
                                echo $_SESSION['usuario'] . "<br>";
                                echo " ID: " . $_SESSION['usuario_id'];
                            } else {
                                echo "Usuário não está logado";
                            }
                            ?>
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a onclick="menu()">
                        <img src="../../img/house-solid.svg" width="30px">
                        <span class="item-description">
                            Menu
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a onclick="">
                        <img src="../../img/car-solid.svg" width="25px">
                        <span class="item-description">
                            Reservar Carro
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a onclick="reservas()">
                        <img src="../../img/thumbtack-solid.svg" width="25px">
                        <span class="item-description">
                            Reservas
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a onclick="chamado()">
                        <img src="../../img/phone-solid.svg" width="25px">
                        <span class="item-description">
                            Abrir Chamado
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a onclick="meusChamados()">
                        <img src="../../img/ticket-solid.svg" width="25px">
                        <span class="item-description">
                            Meus Chamados
                        </span>
                    </a>
                </li>
            </ul>
            <button id="open_btn">
                <img src="../../img/chevron-right-solid.svg" id="open_rotate" width="7px">
            </button>
        </div>
        <div id="logout">
            <button class="side-btn"id="logout_btn">
                <a id="logout_btn" href="../logout.php">
                    <img src="../../img/right-from-bracket-solid.svg">
                        <span class="item-description">
                            Logout
                        </span>
                    </a>
            </button>
        </div>
    </nav>
    <div id="corpo">
        <header id="cabecalho">
            <div>
                <img src="../../img/02 - Logo ZCBR Retangular.png" id="logoCabecalho" id="logo">
                <hr>
            </div>
        </header>
        <main class="principal">
            <div class="container">
                <div class="main">
                    <form method="post">
                        <p>E-mail:</p>
                        <input type="text" id="email" class="formulario" placeholder="Exemplo: email@email.com.br" name="email"><br>
                        <p>Responsável pela Reserva:</p>
                        <input type="text" class="formulario" id="nome" placeholder="Exemplo: João" name="responsavel">
                        <p>Motivo da Reserva:</p>
                        <input type="text" class="formulario" id="motivo" placeholder="Exemplo: Reunião com cliente" name="motivo">
                        <p>Data da Reserva:</p>
                        <input type="date" class="data" id="data" name="data">
                </div>
                <div class="main3">
                        <p>Horário de Inicio:</p>
                        <input type="time" class="formulario" id="inicio" name="inicio">
                        <p>Horário Final:</p>
                        <input type="time" class="formulario" id="fim" name="final">
                        <p>Sala que irá Utilizar:</p>
                        <select class="sala" id="sala" name="sala">
                            <option></option>
                            <option>Sala de reuniao comercial</option>
                            <option>Sala de reuniao administrativo</option>
                            <option>Sala de treinamento</option>
                        </select>
                        <p>Observação:</p>
                        <input type="text" class="formulario" id="observacao" name="observacao">
                </div>
            </div>
            <input type="submit" class="formulario" id="botao" name="enviar" onclick="reserva()">
            </form>
        </main>
        <hr>
        <footer id="rodape">
            <img src="../../img/02 - Logo ZCBR Retangular.png" id="logoRodape">
            <div id="rodapeFaleConosco">
                <h2 class="info">Fale Conosco</h2>
                <p class="info">+55 19 3761-3700</p>
                <p class="info">contato@calibras.com.br</p>
            </div>
            <div id="rodapeEndereco">
                <h2 class="info">Endereço</h2>
                <p class="info">Estrada Velha Campinas Monte Mor.</p>
                <p class="info">Km 01. n°718, Campinas-SP | 13058-326</p>
            </div>
            <div id="rodapeRedesSociais">
                <h2 class="info">Redes Sociais</h2>
                <a href="https://www.facebook.com/zhengchangbrasil" class="linkRedesSociais"><img src="../../img/1024px-Facebook_icon_(black).svg.png" id="facebook" class="redesSociais"></a>
                <a href="https://www.instagram.com/zhengchangbrasil/" class="linkRedesSociais"><img src="../../img/instagram-circular-black-icon-vector-29783030-removebg-preview_updated.png" id="instagram" class="redesSociais"></a>
                <a href="https://www.linkedin.com/company/zhengchangbrasil/mycompany/" class="linkRedesSociais"><img src="../../img/linkedin_black_logo_icon_147114.png" id="linkedin" class="redesSociais"></a>
            </div>
        </footer>
        <hr>
    </div>
    <script src="main.js"></script>
</body>
</html>