<?php


$dados = [1,2,3,4,5,6,7];

foreach ($dados as $valor) {
   echo "Valor: ".$valor;
   echo "<br>";
}

$alunos['Robson'] = 10;
$alunos['Del'] = 11;
$alunos['Lucas'] = 15;
$alunos['Gabriel'] = 20;

foreach ($alunos as $indice => $valor) {
   echo "Código do aluno: ".$valor;
   echo "<br>";
   
   echo "Nome do aluno: ".$indice;
   echo "<br>";
   echo "<br>";
}