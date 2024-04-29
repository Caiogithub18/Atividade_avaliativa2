<?php 
$aluno01 = 5;
$aluno1 = 8;
$aluno02 = 6;
$aluno2 = 9;
$aluno03 = 3;
$aluno3 = 9;
$aluno04 = 4;
$aluno4 = 8;
$aluno05 = 2;
$aluno5 = 10;
$aluno06 = 10;
$aluno6 = 6;
$media1 =0;
$media2 =0;
$media3 =0;
$media4 =0;
$media5 =0;
$media6 =0;

function calcular()

$media1 = ($aluno01 + $aluno1 )/2;
echo ' A media do aluno1 é: ' . $media1; 

$media2 = ($aluno02 + $aluno2 )/2;
echo '<br /> A media do aluno2 é: ' . $media2; 

$media3 = ($aluno03 + $aluno3 )/2;
echo '<br /> A media do aluno3 é: ' . $media3; 

$media4 = ($aluno04 + $aluno4 )/2;
echo '<br /> A media do aluno4 é: ' . $media4; 

$media5 = ($aluno05 + $aluno5 )/2;
echo '<br /> A media do aluno5 é: ' . $media5; 

$media6 = ($aluno06 + $aluno6 )/2;
echo '<br /> A media do aluno6 é: ' . $media6;

if ($media1 < 3 ) {
 	echo "Reprovado";

 }elseif ($media1 >= 3 && $media1 <= 7 ) {
 	echo "Exame";

 }elseif ($media1 > 7) {
 	echo "Aprovado";
 }



 ?>