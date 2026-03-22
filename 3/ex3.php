<?php

$Nota1 = $_POST ['N1'];
$Nota2 = $_POST ['N2'];
$Nota3 = $_POST ['N3'];
$soma = $N1+$N2+$N3;
$media =  $soma *3;
$final = $media;

echo "O aluno está:".$final;

if ($final>=7){
echo "Aprovado"};

else { echo "Reprovado"};
   
?>