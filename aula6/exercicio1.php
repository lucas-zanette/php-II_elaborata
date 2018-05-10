<?php

require './autoload.php';

use exemplos\Tradutor;

try {
   $tradutor = Tradutor::getInstancia();
   $texto = $tradutor->traduzir("Boa tarde", "ING");
   echo $texto;
   echo "<br>";
   
   $texto = $tradutor->traduzir("Boa tarde", "ESP");
   echo $texto;
   
} catch (Exception $exc) {
   echo $exc->getTraceAsString();
}
