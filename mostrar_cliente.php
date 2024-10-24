
<h1 style="color: #FFFFFF;">Clientes cadastrados</h1>
<div id="clientes">
<link rel='stylesheet' href='estilo.css'> 

<?php
include "conexao.php"; 


$sql = "SELECT * FROM tb_clientes";


if(isset($_GET['palavra_pesquisada'])){
    $termo = $_GET['palavra_pesquisada'];
    $sql = "SELECT * FROM tb_clientes
            WHERE nome_cliente LIKE '%$termo%' 
            OR cpf_cliente LIKE '%$termo%' ";
}


$consultar = $pdo->prepare($sql);


try{
   $consultar->execute();
   

   if($consultar->rowCount() == 0){
       echo "Nenhum cliente encontrado";
   }
   
   $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
   foreach($resultados as $cliente){
        $cpf_cliente = $cliente['cpf_cliente'];
        $nome_cliente = $cliente['nome_cliente'];
        $data_nascimento = $cliente['data_nascimento'];
        $celular_cliente = $cliente['celular_cliente'];
        
        echo "
        <div id='conteiner_cartoes'>
            <div class='cartoes'>
                CPF: $cpf_cliente <br>
                Nome: $nome_cliente <br>
                Data de Nascimento: $data_nascimento <br>
                Celular: $celular_cliente <br><br>
                <a href='formulario_editar.php?cpf=$cpf_cliente'>
                    <button>✏️Editar</button>
                </a>
                <a href='confirmar.php?cpf=$cpf_cliente'>
                    <button>🗑️Deletar</button>
                </a>
            </div>
        </div>

        ";
   }

} catch(PDOException $erro) {
    echo "Falha ao consultar: " . $erro->getMessage();
}
?>

</div>