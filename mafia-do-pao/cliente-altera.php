<?php
include('conectadb.php');
 
//COLETA O VALOR ID DA URL
$id = $_GET['id'];
$sql = "SELECT * FROM tb_clientes WHERE cli_id = '$id'";
$retorno = mysqli_query($link, $sql);
 
while($tbl = mysqli_fetch_array($retorno)){
    $email = $tbl[3];
    $telefone = $tbl[4];
    $status = $tbl[5];
}

// BORA FAZER O UPDATE
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id'];
    $email = $_POST['txtemail'];
    $telefone = $_POST['telefone'];
    $status = $_POST['status'];

    $sql = "UPDATE tb_clientes SET cli_email= '$email', cli_cel = '$telefone', cli_status = '$status' WHERE cli_id = $id";
 
    mysqli_query($link, $sql);

echo"<script>window.alert('CLIENTE ALTERADO COM SUCESSO!');</script>";
echo"<script>window.location.href='cliente-lista.php';</script>";
exit();

}
 
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>ALTERAÇÃO DE CLIENTE</title>
</head>
<body>
<div class="container-global">
   
        <a href="cliente-lista.php"><img src="icons/Navigation-left-01-256.png" width="35" height="35"></a>
        <form class="formulario" action="cliente-altera.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
           
            <label>EMAIL</label>
            <input type="email" name="txtemail" placeholder="DIGITE SEU EMAIL" value="<?= $email ?>" required>
            <br>
            <label>TELEFONE</label>
            <input type="text" id ="telefone" name="telefone" placeholder="(00) 00000-0000" maxlength ="15" value="<?= $telefone ?>" required>
            <br>
            <!-- SELETOR DE ATIVO E INATIVO -->
            <input type="radio" name="status" value="1" <?= $status =='1'?"checked": ""?>>ATIVO
            <br>
            <input type="radio" name="status" value="0" <?= $status =='0'?"checked": ""?>>INATIVO
            <br>
            <br>
            <input type="submit" value="ALTERAR">
        </form>
        <script src="script.js"></script>

    </div>
</body>
</html>
