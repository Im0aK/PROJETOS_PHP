<?php


// $n1 = 10;
// $n2 = 5;
// $n3 = 6;

//USANDO O METODO GET PARA COLETAR AS NOTAS
//PARA COLETAR DADOS USANDO GET [seuscript.php?usavariavel=seuvalor$outravariavel=outrovalor]

$nota1 = $_GET['nota1'];
$nota2 = $_GET ['nota2'];
$nota3 = $_GET ['nota3'];
$idnome = $_GET['idnome'];

echo("Nome do aluno: " .$idnome."<br>");
echo("Nota 1: " .$nota1."<br>");
echo("Nota 2: " .$nota2."<br>");
echo("Nota 3: " .$nota3."<br>");




//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//EXERCICIO 1
/*
$nota1 = 9;
$nota2 = 5;
$nota3 = 4;

echo("Nota1: " . $nota1. "<br>" . "Nota2: " . $nota2 . "<br>" . "Nota3: ". $nota3);
*/

$media = ($nota1+$nota2+$nota3)/3;


echo(" <br><br>MÉDIA: .$media <br> ");

if($media >= 7 ) {
    echo("<br>ALUNO APROVADO");

}
else if($media >= 6.1 & $media < 7.0 ){
    echo("<br>ALUNO DE RECUPERAÇÃO");
}

else if ($media < 6){
    echo("<br>ALUNO REPROVADO");
}


echo("<br>-------------------------------------------------------------------------");

//EXERCICIO 2
echo("<br> <br> ");
$numero = 342;
$valorporcentagem =45;
echo("<br> CALCULAR A PORCENTAGEM DE : $numero.<br>.<br> ");

echo("A PORCETAGEM É: ". $numero/100* $valorporcentagem);












?>