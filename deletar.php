<?php

$cpf_cliente = $_GET['cpf'];
include "conexao.php";
// 1º Passo - Comando SQL para deletar o cliente pelo CPF
$sql = "DELETE FROM tb_clientes WHERE cpf_cliente = '$cpf_cliente'";

// 2º Passo - Preparar a conexão e a query
$deletar = $pdo->prepare($sql);


// 3º Passo - Tentar executar
try {
    $deletar->execute();
    if ($deletar->rowCount() > 0) {
        echo "Cliente deletado com sucesso!";
    } else {
        echo "Cliente não encontrado.";
    }
} catch (PDOException $erro) {
    echo "Falha ao deletar! " . $erro->getMessage();
}
?>
