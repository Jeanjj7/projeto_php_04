<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div id="cxp">
    <div id="cx1">
    <h1>Cadastro de Clientes</h1>
    <form method="post" action="inserir.php">
        <label>CPF:</label><br>
        <input type="text" name="cpf"><br>

        <label>Nome:</label><br>
        <input type="text" name="nome"><br>

        <label>Data de Nascimento:</label><br>
        <input type="date" name="data"><br>

        <label>Celular:</label><br>
        <input type="text" name="celular"><br><br>

        <button type="submit">Cadastrar</button>
    </form>
    </div>
</div>



</body>
</html>

