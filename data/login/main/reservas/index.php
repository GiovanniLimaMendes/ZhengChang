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
                    <a onclick="fazerReserva()">
                        <img src="../../../img/calendar-days-solid.svg" width="30px">
                        <span class="item-description">
                            Fazer reserva sala
                        </span>
                    </a>
                </li>
                <li class="side-item">
                    <a onclick="fazerReservaCarro()">
                        <img src="../../../img/car-solid.svg" width="30px">
                        <span class="item-description">
                            Fazer reserva carro
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
                
            </div>
        </header>
        <hr>
        <main class="conteudo">
                <form method="GET">
                    <div class="todasReservas">
                        <label for="reserva" class="filtroReservas">Selecione a reserva:</label>
                        <select name="reserva" id="sala" class="filtroReservas">
                            <option value="Sala de reuniao comercial">Sala de reuniao comercial</option>
                            <option value="Sala de reuniao administrativo">Sala de reuniao administrativo</option>
                            <option value="Sala de treinamento">Sala de treinamento</option>
                            <option value="Corolla FCY8C84">Corolla FCY8C84</option>
                            <option value="Saveiro FHC5B72">Saveiro FHC5B72</option>
                        </select>
                        <input type="submit" value="Filtrar">
                    </div>
                </form>
            
            <div id="reservas">
                <?php

                include('../../conexao.php');
                
                $reserva = isset($_GET['reserva']) ? $_GET['reserva'] : ''; // Verifica se a chave 'reserva' está definida
                $sql_code_reservas = "SELECT * FROM reservas WHERE sala = '$reserva'";
                $sql_code_reserva_carro = "SELECT * FROM reservacarro WHERE carro = '$reserva'";

                $results_reservas = $mysqli->query($sql_code_reservas);
                $results_reserva_carro = $mysqli->query($sql_code_reserva_carro);

                // Se houver resultados para ambas as consultas, exibir em uma tabela
                if ($results_reservas->num_rows > 0 || $results_reserva_carro->num_rows > 0) {
                    echo "<table border='1'>";
                    echo "<tr><th>Email do responsável</th><th>Responsável pela reserva</th><th>Motivo da reserva</th><th>Data</th><th>Sala/Carro</th><th>Horário de Início</th><th>Horário Final</th><th>Observação</th></tr>";

                    // Exibir resultados da tabela 'reservas'
                    while ($row_reservas = $results_reservas->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row_reservas["email"] . "</td>";
                        echo "<td>" . $row_reservas["responsavel"] . "</td>";
                        echo "<td>" . $row_reservas["motivo"] . "</td>";
                        echo "<td>" . $row_reservas["data"] . "</td>";
                        echo "<td>" . $row_reservas["sala"] . "</td>";
                        echo "<td>" . $row_reservas["inicio"] . "</td>";
                        echo "<td>" . $row_reservas["final"] . "</td>";
                        echo "<td>" . $row_reservas["observacao"] . "</td>";
                        echo "</tr>";
                    }

                    // Exibir resultados da tabela 'reservaCarro'
                    while ($row_reserva_carro = $results_reserva_carro->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row_reserva_carro["email"] . "</td>";
                        echo "<td>" . $row_reserva_carro["responsavel"] . "</td>";
                        echo "<td>" . $row_reserva_carro["motivo"] . "</td>";
                        echo "<td>" . $row_reserva_carro["data"] . "</td>";
                        echo "<td>" . $row_reserva_carro["carro"] . "</td>";
                        echo "<td>" . $row_reserva_carro["inicio"] . "</td>";
                        echo "<td>" . $row_reserva_carro["final"] . "</td>";
                        echo "<td>" . $row_reserva_carro["observacao"] . "</td>";
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