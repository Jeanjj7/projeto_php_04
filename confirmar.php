<?php
// confirmar.php
$cpf_produto = $_GET['cpf'];
echo "
        <h1> Tem certeza que deseja 
             excluir o cpf $cpf_produto?
        </h1>
        <br><br>
        <a href='deletar.php?cpf=$cpf_produto'>
            Sim
        </a>
        <br><br>
        <a href='mostrar_cliente.php'>
            Não
        </a>


    ";
?>