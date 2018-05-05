<?php

require './autoload.php';

use excecoes\ProjetoException;

try {
    throw new ProjetoException("Mensagem", 10, "Descrição do problema");

    
} catch (ProjetoException $exc) {
    echo "Mostrando descrição: ";
    echo "<br>";
    echo $exc->getDescricao();

    
} catch (Exception $exc) {
    echo "Mostrando mensagem: ";
    echo "<br>";
    echo $exc->getMessage();
}
