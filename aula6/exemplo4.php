<?php

require './autoload.php';

use bancodados\FactoryDatabase;

try {

    $db = FactoryDatabase::factory("mysql");
    var_dump($db);
    
    
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
