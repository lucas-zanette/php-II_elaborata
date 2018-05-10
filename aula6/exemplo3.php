<?php

require './autoload.php';

use bancodados\BancoMysql;

try {
   $bancoMysql = BancoMysql::getInstancia();
   var_dump($bancoMysql);
   
} catch (Exception $exc) {
   echo $exc->getTraceAsString();
}

