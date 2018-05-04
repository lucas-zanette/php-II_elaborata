<?php

require './autoload.php';

use exemplos\Cliente;

try {
    $cliente = new Cliente();
    $cliente->cadastrar();
} catch (Exception $ex) {
    echo '<br>';
    echo $ex->getMessage();
    echo '<br>';
    echo $ex->getTraceAsString();
    echo "<br>";
    echo "<br>";
    echo "<pre>";
    var_dump($ex->getTrace());
    echo "</pre>";
} finally {     //é sempre executado
    echo "<br>";
    echo "Encerrando programa";
}
