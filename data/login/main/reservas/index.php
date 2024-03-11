<?php

include('../../protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="imagem/png" href="../../../img/zhengchangdobrasil_logo-removebg-preview.png">
    <title>Todas as reservas</title>
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
                </li>
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
        <main class="conteudo">
        <form method="GET">
            <label for="sala" class="filtroReservas">Selecione a sala:</label>
            <select name="sala" id="sala" class="filtroReservas">
                <option value="Sala de reuniao comercial">Sala de reuniao comercial</option>
                <option value="Sala de reuniao administrativo">Sala de reuniao administrativo</option>
                <option value="Sala de treinamento">Sala de treinamento</option>
            </select>
            <input type="submit" value="Filtrar">
        </form>
            <div id="reservas">
                <?php

                include('../../conexao.php');
                
                $sala = $_GET['sala'];
                $sql_code = "SELECT * FROM reservas WHERE sala = '$sala'";
                $results = $mysqli->query($sql_code);

                // Se houver resultados, exibir em uma tabela
                if ($results->num_rows > 0) {
                    echo "<table border='1'>";
                    echo "<tr><th>Email do responsável</th><th>Responsável pela reserva</th><th>Motivo da reserva</th><th>Data</th><th>Sala</th><th>Horário de Início</th><th>Horário Final</th><th>Observação</th></tr>";
                    while($row = $results->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["email"]. "</td>";
                        echo "<td>" . $row["responsavel"]. "</td>";
                        echo "<td>" . $row["motivo"]. "</td>";
                        echo "<td>" . $row["data"]. "</td>";
                        echo "<td>" . $row["sala"]. "</td>";
                        echo "<td>" . $row["inicio"]. "</td>";
                        echo "<td>" . $row["final"]. "</td>";
                        echo "<td>" . $row["observacao"]. "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 resultados";
                }

                $mysqli->close();

                ?>
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
                    <a href="https://www.facebook.com/zhengchangbrasil" class="linkRedesSociais"><img src="../../../img/1024px-Facebook_icon_(black).svg.png" id="facebook" width="35px"></a>
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