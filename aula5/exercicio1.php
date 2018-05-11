<?php

require './autoload.php';

use exemplos\Calculadora;

try {
   Calculadora::calcular(65, 50);
   
   
} catch (Exception $exc) {
   echo $exc->getTraceAsString();
}
