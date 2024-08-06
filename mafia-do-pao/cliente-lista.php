<?php
include('conectadb.php');
// include('header.php');

// CONSULTA USUARIOS CADASTRADOS
$sql = "SELECT cli_email, cli_nome, cli_cpf, cli_cel, cli_status, cli_id FROM tb_clientes WHERE cli_status = '1'";
$retorno = mysqli_query($link, $sql);
$status = '1';


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>LISTA DE CLIENTES</title>
</head>
<body>
<a href="backoffice.php"><img src="icons/Navigation-left-01-256.png"  width="30" height="30"></a>

    <div class="container-listaclientes">
        <!-- FAZER DEPOIS DO ROLÊ -->
        <form>

        </form>
        <!-- LISTAR A TABELA DE CLIENTES-->
        <table class="lista">
            <tr>
                <th>EMAIL</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>TELEFONE</th>
                <th>STATUS</th>
                <th>ALTERAR</th>
            



            </tr>

            <!-- O CHORO É LIVRE! CHOLA MAIS -->
            <!-- BUSCAR NO BANCO OS DADOS DE TODOS OS CLIENTES -->
             <?php
                while($tbl = mysqli_fetch_array($retorno)){
                 ?>
                 <tr>
                    <td><?=$tbl[0]?></td> <!-- COLETA O NOME DO CLIENTE-->
                    <td><?=$tbl[1]?></td> <!-- COLETA O EMAIL DO CLIENTE-->
                    <td><?=$tbl[2]?></td> <!-- COLETA O CPF DO CLIENTE-->
                    <td><?=$tbl[3]?></td> <!-- COLETA O CELULAR DO CLIENTE-->
                    <td><?=$tbl[4]?></td> <!-- COLETA O STATUS DO CLIENTE-->

                    <td><a href="cliente-altera.php?id=<?=$tbl[5]?>">
                            <input type="button" value="ALTERAR">
                        </a>
                    </td>
                 </tr>
                 <?php
                }
                ?>
        </table>

    </div>
    
</body>
</html>