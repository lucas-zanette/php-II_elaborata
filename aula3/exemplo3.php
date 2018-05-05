<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//
//spl_autoload_extensions(".php");
//spl_autoload_register();

require './autoload.php';

$cliente = new \dados\Clientes("Jose");
echo "O nome do cliente é: " .$cliente->getNome();
$cliente->setEndereco("Rua x y z");


echo "<pre>";
var_dump($cliente);
echo "</pre>";
