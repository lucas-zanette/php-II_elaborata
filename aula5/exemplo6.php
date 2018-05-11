<?php

require './autoload.php';

use exemplos\Estatico;

try {
   Estatico::boaNoite();
   
} catch (Exception $exc) {
   echo $exc->getMessage();
}
