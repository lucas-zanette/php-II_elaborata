<?php

spl_autoload_extensions(".php");
spl_autoload_register();

$calc = new projeto1\Calculadora();
$calc->soma(30, 50);

echo "<br>";
echo "<br>";
$calc->subtracao(30, 50);
echo "<br>";
echo "<br>";
$calc->divisao(30, 50);
echo "<br>";
echo "<br>";
$calc->multiplicacao(30, 50);


//$mostra = new cursophp\mostra();
//$mostra->bomDia();
//
//echo "<br>";
//
//echo "Servidor: ".cursophp\HOST;
//echo "<br>";
//echo "Usuario: ".cursophp\USUARIO;
//echo "<br>";
//echo "Senha: ".cursophp\SENHA;
//
//echo "<br>";
//echo "<br>";
//
//echo "<br>";
//$mostra1 = new projeto1\mostra();
//$mostra1->bomDia();
//
//echo "<br>";
//echo "<br>";
//
//echo "Servidor: ".projeto1\HOST;
//echo "<br>";
//echo "Usuario: ".projeto1\USUARIO;
//echo "<br>";
//echo "Senha: ".projeto1\SENHA;
//
//echo "<br>";
//echo "<br>";
//echo "<br>";
//
//$lista = new cursophp\Lista();
//$lista->mostraNome("Robson", "Cesar de Siqueira");
//
//
//echo "<br>";
//echo "<br>";
//echo "<br>";

