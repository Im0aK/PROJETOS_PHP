<?php

include ("conectadb.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];
    $email = $_POST['txtemail'];


    //VALIDA SE O USUARIO A CADASTRAR EXISTE
    $sql = "SELECT COUNT(usu_id) FROM tb_usuarios 
    WHERE usu_login = '$login' OR usu_email = '$email'";



    //RETORNO DO BANCO 
    $retorno = mysqli_query($link, $sql);

  

    $contagem = mysqli_fetch_array($retorno)[0];


    //VERIFICA SE O USUARIO EXISTE
    if ($contagem == 0) {

        $sql = "INSERT INTO tb_usuarios(usu_login, usu_senha,usu_email, usu_status)
        VALUES ('$login', '$senha', '$email', '1') ";
        mysqli_query($link, $sql);
        echo"<script>window.alert('USUARIO CADASTRADO COM SUCESSO');</script>"; 
        echo"<script>window.location.href= 'login.php';</script>"; 


    } else if($contagem >=1){
        echo"<script>window.alert('USUARIO JA CADASTRADO');</script>";
    }
}



?>
<!-- PHP -->




<!-- HTML E CSS -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title> CADASTRO DE USUARIO </title>
</head>

<body>
    <div class="container-global">
    <a href="backoffice.php"><img src="icons/Navigation-left-01-256.png"  width="30" height="30"></a>
    <form class="formulario" action="usuario-cadastro.php" method="post">
            <label>LOGIN</label>
            <input type="text" name="txtlogin"  placeholder="DIGITE SEU LOGIN " required>
            <br>
            <label>SENHA</label>
            <input type="password" name="txtsenha" placeholder="DIGITE SUA SENHA " required>
            <br>
            <label>EMAIL</label>
            <input type="email" name="txtemail" placeholder="DIGITE SEU EMAIL" required>
         

            <br>
            <input type="submit" value="CRIAR">

        </form>
    </div>


</body>

</html>