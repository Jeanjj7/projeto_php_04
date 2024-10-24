<?php
include "conexao.php"; 
$cpf_cliente = $_GET['cpf']; 

// 1º Passo - Comando SQL para buscar os dados do cliente
$sql = "SELECT * FROM tb_clientes WHERE cpf_cliente = $cpf_cliente";

// 2º Passo - Preparar a conexão
$consultar = $pdo->prepare($sql);


// 3º Passo - Tentar executar a consulta e buscar os dados do cliente
try {
    $consultar->execute();
    $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
    $nome_cliente = $resultado['nome_cliente'];
    $data_nascimento = $resultado['data_nascimento'];
    $celular_cliente = $resultado['celular_cliente'];
} catch (PDOException $erro) {
    echo "Falha ao consultar: " . $erro->getMessage();
}
?>
<link rel="stylesheet" href="estilo.css">
<div id="cxp">
    <div id="cx1"> 
<h1>Editar informações do cliente</h1>
<form action="atualizar.php" method="post">
<label>CPF do cliente:</label> <br>
    <input type="text" name="cpf_cliente" value='<?php echo $cpf_cliente; ?>'> <br>

    <label>Nome do cliente:</label><br>
    <input type="text" name="nome_cliente" value='<?php echo $nome_cliente; ?>'> <br>

    <label>Data de nascimento:</label><br>
    <input type="date" name="data_nascimento" value='<?php echo $data_nascimento; ?>'><br>
    <label>Celular:</label><br>
    <input type="text" name="celular_cliente" value='<?php echo $celular_cliente; ?>'><br><br>
    <button type="submit">Salvar alterações</button><br>
</form>
</div>
</div>
