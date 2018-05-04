<?php

require './autoload.php';

use cadastros\Produto;

try {
    $produto = new Produto();
    $produto->cadastrar("Bota", 300.00, 100);
    echo ("Produto cadastrado com sucesso");
} catch (Exception $ex) {
    echo ($ex->getMessage());
}

