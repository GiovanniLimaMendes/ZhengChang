<?php

include('chamados.php');
include('../../protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="imagem/png" href="../../../img/zhengchangdobrasil_logo-removebg-preview.png">
    <title>Abrir Chamado</title>
</head>
<body>
    <nav id="sidebar">
        <div id="sidebar_content">
            <ul id="side_items">
                <li class="side-item-user">
                    <a>
                        <img src="../../../img/circle-user-solid.svg" width="30px">
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
                <li class="side-item">
                    <a onclick="meusChamados()">
                        <img src="../../../img/ticket-solid.svg" width="25px">
                        <span class="item-description">
                            Meus Chamados
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
        <main class="abrirChamado">
            <div class="classes">
                <p>SELECIONE A CLASSE DO SERVIÇO DESEJADO:</p>
            </div>
            <hr class="hrClass">
            <div id="main">
                <form method="post" id="options">
                    <div class="opcoes">
                        <a href="#" id="computadores" class="opcao" onclick="servicosComputadores()">
                        <img src="../../../img/computer-solid.svg" width="50px"><br>
                        <span class="item-description">
                        Computadores
                        </span>
                        </a>
                    </div>
                    <div class="opcoes">
                        <a href="#" id="internet" class="opcao" onclick="servicosInternet()">
                        <img src="../../../img/wifi-solid.svg" width="45px"><br>
                        <span class="item-description">
                        Internet
                        </span>
                        </a>
                    </div>
                    <div class="opcoes">
                        <a href="#" id="impressora" class="opcao" onclick="servicosImpressora()">
                        <img src="../../../img/print-solid.svg" width="40px"><br>
                        <span class="item-description">
                        Impressora
                        </span>
                        </a>
                    </div>
                    <div class="opcoes">
                        <a href="#" id="telefone" class="opcao" onclick="servicosTelefone()">
                        <img src="../../../img/phone-volume-solid.svg" width="40px"><br>
                        <span class="item-description">
                        Telefone Ramal
                        </span>
                        </a>
                    </div>
                    <div class="opcoes">
                        <a href="#" id="email" class="opcao" onclick="servicosEmail()">
                        <img src="../../../img/envelope-solid.svg" width="40px"><br>
                        <span class="item-description">
                        E-mail
                        </span>
                        </a>
                    </div>
                    <div class="opcoes">
                        <a href="#" id="outro" class="opcao" onclick="exibirFormulario()">
                        <img src="../../../img/ellipsis-solid.svg" width="40px"><br>
                        <span class="item-description">
                        Outro
                        </span>
                        </a>
                    </div>
            </div>
            <div  id="servicosComputadores" name="optionChamado" class="todosServicos" style="display: none;">
                <form method="post">
                    <div class="todosServicos">
                    <p id="selectService">SELECIONE O SERVIÇO DESEJADO:</p>
                    <ul>
                        <hr class="hrClass">
                        <li class="servicos">
                            <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                                <img src="../../../img/chevron-right-solid.svg" width="7px">
                                <span class="servicoDescricao" id="option1">
                                    Computador nao liga
                                </span>
                            </a>
                        </li>
                        <hr class="hrClass">
                        <li class="servicos">
                            <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                                <img src="../../../img/chevron-right-solid.svg" width="7px">
                                <span class="servicoDescricao" id="option2">
                                    Computador sem imagem
                                </span>
                            </a>
                        </li>
                        <hr class="hrClass">
                        <li class="servicos">
                            <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                                <img src="../../../img/chevron-right-solid.svg" width="7px">
                                <span class="servicoDescricao" id="option3">
                                    Formatar computador
                                </span>
                            </a>
                        </li>
                        <hr class="hrClass">
                    </ul>
                    <form>
                </div>
            </div>
            <div id="servicosInternet" id="teste"style="display: none;">
            <div class="todosServicos">
            <p selectService>SELECIONE O SERVIÇO DESEJADO:</p>
            <ul>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="descricaoServico" id="option4">
                            Sem internet
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao" id="option5">
                            Site não abre
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
                <li class="servicos">
                    <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                        <img src="../../../img/chevron-right-solid.svg" width="7px">
                        <span class="servicoDescricao" id="option6">
                            Internet lenta
                        </span>
                    </a>
                </li>
                <hr class="hrClass">
            </ul>
            </div>
            </div>
            <div id="servicosImpressora" name="optionChamado" class="todosServicos" style="display: none;">
                <div class="todosServicos">
                <p id="selectService">SELECIONE O SERVIÇO DESEJADO:</p>
                <ul>
                    <hr class="hrClass">
                    <li class="servicos">
                        <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                            <img src="../../../img/chevron-right-solid.svg" width="7px">
                            <span class="descricaoServico" id="option7">
                                Instalar impressora
                            </span>
                        </a>
                    </li>
                    <hr class="hrClass">
                    <li class="servicos">
                        <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                            <img src="../../../img/chevron-right-solid.svg" width="7px">
                            <span class="servicoDescricao" id="option8">
                                Nao imprime
                            </span>
                        </a>
                    </li>
                    <hr class="hrClass">
                    <li class="servicos">
                        <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                            <img src="../../../img/chevron-right-solid.svg" width="7px">
                            <span class="servicoDescricao" id="option9">
                            Nao esta digitalizando
                            </span>
                        </a>
                    </li>
                    <hr class="hrClass">
                </ul>
                </div>
            </div>
            <div id="servicosTelefone" name="optionChamado" class="todosServicos" style="display: none;">
                <div class="todosServicos">
                <p id="selectService">SELECIONE O SERVIÇO DESEJADO:</p>
                <ul>
                    <hr class="hrClass">
                    <li class="servicos">
                        <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                            <img src="../../../img/chevron-right-solid.svg" width="7px">
                            <span class="descricaoServico" id="option10">
                                Nao recebo ligacoes
                            </span>
                        </a>
                    </li>
                    <hr class="hrClass">
                    <li class="servicos">
                        <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                            <img src="../../../img/chevron-right-solid.svg" width="7px">
                            <span class="servicoDescricao" id="option11">
                                Nao consigo fazer ligacoes
                            </span>
                        </a>
                    </li>
                    <hr class="hrClass">
                    <li class="servicos">
                        <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                            <img src="../../../img/chevron-right-solid.svg" width="7px">
                            <span class="servicoDescricao" id="option12">
                            Telefone Mudo
                            </span>
                        </a>
                    </li>
                    <hr class="hrClass">
                    <li class="servicos">
                        <a href="#" class="optionChamado" id="enviarDados" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                            <img src="../../../img/chevron-right-solid.svg" width="7px">
                            <span class="servicoDescricao" id="option13">
                            Sem servico
                            </span>
                        </a>
                    </li>
                    <hr class="hrClass">
                </ul>
                </div>
            </div>
            <div id="servicosEmail" name="optionChamado" class="todosServicos" style="display: none;">
                <div class="todosServicos">
                <p id="selectService">SELECIONE O SERVIÇO DESEJADO:</p>
                <ul>
                    <hr class="hrClass">
                    <li class="servicos">
                        <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                            <img src="../../../img/chevron-right-solid.svg" width="7px">
                            <span class="descricaoServico" id="option14">
                                Nao recebo e-mail
                            </span>
                        </a>
                    </li>
                    <hr class="hrClass">
                    <li class="servicos">
                        <a href="#" id="enviarEmail" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                            <img src="../../../img/chevron-right-solid.svg" width="7px">
                            <span class="servicoDescricao" id="option15">
                                Nao consigo enviar e-mail
                            </span>
                        </a>
                    </li>
                    <hr class="hrClass">
                    <li class="servicos">
                        <a href="#" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                            <img src="../../../img/chevron-right-solid.svg" width="7px">
                            <span class="servicoDescricao" id="option16">
                            E-mail caindo no lixo eletronico
                            </span>
                        </a>
                    </li>
                    <hr class="hrClass">
                    <li class="servicos">
                        <a href="#" id="configEmail" class="optionChamado" name="optionChamado" onclick="exibirFormulario()" id="enviarDados">
                            <img src="../../../img/chevron-right-solid.svg" width="7px">
                            <span class="servicoDescricao" id="option17">
                            Configurar e-mail
                            </span>
                        </a>
                    </li>
                    <hr class="hrClass">
                </ul>
                </div>
            </div>
                
            <div id="exibirFormulario" style="display: none;">
                <form method="post">
                    <input type="text" name="dadosParaPHP" id="dadosParaPHP" style="display: none;">
                    <p>Solicitante:</p>
                    <input type="text" name="nome" id="nomeChamado"value="<?php echo $_SESSION['usuario']; ?>" readonly>
                    <p>Descrição:</p>
                    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea><br>
                    <input type="submit" class="formulario" id="botao" value="enviar" name="enviar">
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
                    <div id="redesSociaisLink">
                        <a href="https://www.facebook.com/zhengchangbrasil" class="linkRedesSociais"><img src="../../../img/1024px-Facebook_icon_(black).svg.png" id="facebook" class="redesSociais" width="35px"></a>
                        <a href="https://www.instagram.com/zhengchangbrasil/" class="linkRedesSociais"><img src="../../../img/instagram-circular-black-icon-vector-29783030-removebg-preview_updated.png" id="instagram" class="redesSociais" width="35px"></a>
                        <a href="https://www.linkedin.com/company/zhengchangbrasil/mycompany/" class="linkRedesSociais"><img src="../../../img/linkedin_black_logo_icon_147114.png" id="linkedin" class="redesSociais" width="35px"></a>
                    </div>
                </div>
        </footer>
        <hr>
    </div>
    <script src="../main.js"></script>
</body>
</html>