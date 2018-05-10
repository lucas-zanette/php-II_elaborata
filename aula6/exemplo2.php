<?php

require './autoload.php';

use exemplos\Carro;

try {
   $carro = new Carro();
   var_dump($carro);
   
   
} catch (Exception $exc) {
   echo $exc->getTraceAsString();
}
