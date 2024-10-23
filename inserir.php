<?php
include "conexao.php";

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$celular = $_POST['celular'];

// 1º Passo - Comando SQL
$sql = "INSERT INTO tb_clientes (cpf_cliente, nome_cliente, data_nascimento, celular_cliente) 
VALUES ('$cpf', '$nome', '$data', '$celular')";

// 2º Passo - Preparar a conexão
$inserir = $pdo->prepare($sql);

// 3º Passo - Tentar executar
try {
  $inserir->execute();
  echo "Cadastrado com sucesso"; 
} catch (PDOException $erro) {
  echo "Falha no inserir! " . $erro->getMessage();
}
?>