<?php


require './autoload.php';

use veiculos\Veiculo;
use veiculos\Moto;
use veiculos\Carro;

$moto = new Moto("Kawasaki");
$carro = new Carro("VW");

echo "<pre>";

var_dump($carro);
var_dump($moto);

echo "</pre>";