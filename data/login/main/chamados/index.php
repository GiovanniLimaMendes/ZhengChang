<?php

include('chamados.php');
include('../../protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="imagem/png" href="../../../img/zhengchangdobrasil_logo-removebg-preview.png">
    <title>Abrir Chamado</title>
</head>
<body>
    <nav id="sidebar">
        <div id="sidebar_content">
            <ul id="side_items">
                <li class="side-item">
                    <a onclick="menu()">
                        <img src="../../../img/house-solid.svg" width="30px">
                        <span class="item-description">
                            Menu
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a onclick="reservas()">
                        <img src="../../../img/thumbtack-solid.svg" width="25px">
                        <span class="item-description">
                            Reservas
                        </span>
                    </a>
                <li class="side-item">
                    <a onclick="chamado()">
                        <img src="../../../img/phone-solid.svg" width="25px">
                        <span class="item-description">
                            Abrir Chamado
                        </span>
                    </a>
                </li>
            </ul>
            <button id="open_btn">
                <img src="../../../img/chevron-right-solid.svg" width="7px">
            </button>
        </div>
        <div id="logout">
            <button id="logout_btn">
                <a id="logout_btn" href="../../logout.php">
                    <img src="../../../img/right-from-bracket-solid.svg">
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
                <img src="../../../img/02 - Logo ZCBR Retangular.png" id="logoCabecalho" id="logo">
                <hr>
            </div>
        </header>
        <main class="principal">
            <div id="main">
                <form method="post">
                    <p class="text">Selecione o setor que deseja contatar:</p>
                    <select id="setor" class="formulario" name="setor">
                        <option>TI</option>
                        <option>Engenharia</option>
                        <option>Comercial</option>
                        <option>Financeiro</option>
                        <option>Manutenção</option>
                        <option>Qualidade</option>
                        <option>PCP</option>
                    </select>
                    <p class="text">E-mail:</p>
                    <input type="email" class="formulario" id="email" name="email">
                    <p class="text">Título:</p>
                    <input type="text" class="formulario" id="titulo" name="titulo">
                    <p class="text">Descrição:</p>
                    <textarea name="descricao" class="formulario" id="descricao" cols="30" rows="10" name="descricao"></textarea><br>
                    <input type="submit" class="formulario" value="Abrir Chamado" id="enviar" name="enviar">
                </form>
            </div>
        </main>
        <hr>
        <footer id="rodape">
            <img src="../../../img/02 - Logo ZCBR Retangular.png" id="logoRodape">
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
                <a href="https://www.facebook.com/zhengchangbrasil" class="linkRedesSociais"><img src="../../../img/1024px-Facebook_icon_(black).svg.png" id="facebook" width="35px"></a>
                <a href="https://www.instagram.com/zhengchangbrasil/" class="linkRedesSociais"><img src="../../../img/instagram-circular-black-icon-vector-29783030-removebg-preview_updated.png" id="instagram" class="redesSociais" width="35px"></a>
                <a href="https://www.linkedin.com/company/zhengchangbrasil/mycompany/" class="linkRedesSociais"><img src="../../../img/linkedin_black_logo_icon_147114.png" id="linkedin" class="redesSociais" width="35px"></a>
            </div>
        </footer>
        <hr>
    </div>
    <script src="main.js"></script>
</body>
</html>