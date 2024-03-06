<?php
// Inicialize a conexão com o banco de dados e inclua qualquer configuração necessária

include('../../../conexao.php');

if(isset($_POST['id']) && isset($_POST['situacao'])) {
    $situacao = $_POST['situacao'];
    $id = $_POST['id'];

    // Execute a consulta SQL para atualizar a situação do chamado no banco de dados
    $sql_update = "UPDATE chamados SET situacao = '$situacao' WHERE id = '$id'";
    $result = $mysqli->query($sql_update);

    if($result) {
        echo "Situação atualizada com sucesso";
    } else {
        echo "Erro ao atualizar a situação";
    }
}
?>