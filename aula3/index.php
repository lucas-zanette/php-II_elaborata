<?php

require './autoload.php';

use excecoes\ProjetoException;

try {
    echo "Executando...";
    echo "<br>";
    echo "Executando...";
    echo "<br>";
    echo "Executando...";
    echo "<br>";
    echo "Executando...";
    echo "<br>";

    throw new ProjetoException("Problema encontrado", 40, "Problema ocasionado propositalmente");
    

    echo "Executando...";
    echo "<br>";
    echo "Executando...";
    echo "<br>";
    echo "Executando...";
    echo "<br>";
    echo "Executando...";
    echo "<br>";
} catch (ProjetoException $exc) {
    echo $exc->getMessage();
    echo "<br>";
    echo "Erro: " .$exc->getCode() ." - " .$exc->getDescricao();
         
}
