<?php

require './autoload.php';

use exemplos\Unico;

try {
   
   $unico = Unico::getInstancia();
   $unico->cpf = "123123123";
   
   var_dump($unico);
   
   $unico2 = Unico::getInstancia();
   $unico->cpf = "66666666";
   
   var_dump($unico2);
   
   
} catch (Exception $exc) {
   echo $exc->getTraceAsString();
}
