<?php
// atualizar.php

include "conexao.php";

$cpf = $_POST['cpf_cliente'];
$nome = $_POST['nome_cliente'];
$data = $_POST['data_nascimento'];
$celular= $_POST['celular_cliente'];

// 1º Passo - Comando SQL para atualizar os dados do cliente
$sql = "UPDATE tb_clientes SET 
        nome_cliente = '$nome', 
        data_nascimento = '$data',
        celular_cliente = '$celular' 
        WHERE cpf_cliente = '$cpf'";

// 2º Passo - Preparar a conexão
$atualizar = $pdo->prepare($sql);


// 3º Passo - Tentar executar a atualização
try {
    $atualizar->execute();
    if ($atualizar->rowCount() >= 1) {
        echo "Cliente atualizado com sucesso!";
        echo "<br> <a href='pagina_inicial.php'> Voltar </a>";
    } else {
        echo "Nenhuma alteração foi feita ou cliente não encontrado.";
    }
} catch (PDOException $erro) {
    echo "Falha ao atualizar! " . $erro->getMessage();
}
?>
