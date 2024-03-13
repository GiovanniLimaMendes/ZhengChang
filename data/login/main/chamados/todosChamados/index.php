<?php

include('../../../protect.php');
include('../../../conexao.php');
include('atualizar_situacao.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="icon" type="imagem/png" href="../../../../img/zhengchangdobrasil_logo-removebg-preview.png">
    <title>Fechar Chamados</title>
</head>
<body>
    <nav id="sidebar">
        <div id="sidebar_content">
            <ul id="side_items">
                <li class="side-item-user">
                    <a>
                        <img src="../../../../img/circle-user-solid.svg" width="30px">
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
                        <img src="../../../../img/house-solid.svg" width="30px">
                        <span class="item-description">
                            Menu
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a onclick="fazerReserva()">
                        <img src="../../../../img/calendar-days-solid.svg" width="30px">
                        <span class="item-description">
                            Fazer reserva sala
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a onclick="fazerReservaCarro()">
                        <img src="../../../../img/car-solid.svg" width="30px">
                        <span class="item-description">
                            Fazer reserva carro
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a onclick="reservas()">
                        <img src="../../../../img/thumbtack-solid.svg" width="25px">
                        <span class="item-description">
                            Reservas
                        </span>
                    </a>
                <li class="side-item">
                    <a onclick="chamado()">
                        <img src="../../../../img/phone-solid.svg" width="25px">
                        <span class="item-description">
                            Abrir Chamado
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a onclick="meusChamados()">
                        <img src="../../../../img/ticket-solid.svg" width="25px">
                        <span class="item-description">
                            Meus Chamados
                        </span>
                    </a>
                </li>
            </ul>
            <button id="open_btn">
                <img src="../../../../img/chevron-right-solid.svg" width="7px">
            </button>
        </div>
        <div id="logout">
            <button id="logout_btn">
                <a id="logout_btn" href="../../logout.php">
                    <img src="../../../../img/right-from-bracket-solid.svg">
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
                <img src="../../../../img/02 - Logo ZCBR Retangular.png" id="logoCabecalho" id="logo">
                
            </div>
        </header>
        <hr>
        <main class="meusChamados">
            <div id="mainChamados">
                
                <?php

                $sql_code = "SELECT * FROM chamados";
                $results = $mysqli->query($sql_code);

                if ($results->num_rows > 0) {
                    echo "<table border='1'>";
                    echo "<tr><th>ID do chamado</th><th>Email do usuário</th><th>Título do chamado</th><th>Descrição do chamado</th><th>Situação do chamado</th><th>Alterar situação do chamado</th></tr>";
                    while($row = $results->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"]. "</td>";
                        echo "<td>" . $row["email"]. "</td>";
                        echo "<td>" . $row["titulo"]. "</td>";
                        echo "<td>" . $row["descricao"]. "</td>";
                        echo "<td>" . $row["situacao"]. "</td>";
                        echo "<td><select class='situacao' data-id='" . $row["id"] . "'>";
                        echo "<option " . ($row["situacao"] == "Aguardando" ? "selected" : "") . ">Aguardando</option>";
                        echo "<option " . ($row["situacao"] == "Em andamento" ? "selected" : "") . ">Em andamento</option>";
                        echo "<option " . ($row["situacao"] == "Concluído" ? "selected" : "") . ">Concluído</option>";
                        echo "</select></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 resultados";
                }

                $mysqli->close();
                
                ?>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                $(document).ready(function(){
                    $('.situacao').change(function(){
                        var id = $(this).data('id');
                        var situacao = $(this).val();
                        $.ajax({
                            url: 'atualizar_situacao.php',
                            method: 'POST',
                            data: { id: id, situacao: situacao },
                            success: function(response){
                                alert('Situação atualizada com sucesso');
                            }
                        });
                    });
                });
                </script>
            </div>
        </main>
        <hr>
        <footer id="rodape">
            <img src="../../../../img/02 - Logo ZCBR Retangular.png" id="logoRodape">
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
                    <a href="https://www.facebook.com/zhengchangbrasil" class="linkRedesSociais"><img src="../../../../img/1024px-Facebook_icon_(black).svg.png" id="facebook" width="35px"></a>
                    <a href="https://www.instagram.com/zhengchangbrasil/" class="linkRedesSociais"><img src="../../../../img/instagram-circular-black-icon-vector-29783030-removebg-preview_updated.png" id="instagram" class="redesSociais" width="35px"></a>
                    <a href="https://www.linkedin.com/company/zhengchangbrasil/mycompany/" class="linkRedesSociais"><img src="../../../../img/linkedin_black_logo_icon_147114.png" id="linkedin" class="redesSociais" width="35px"></a>
                </div>
            </div>
        </footer>
        <hr>
    </div>
    <script src="../../main.js"></script>
</body>
</html>