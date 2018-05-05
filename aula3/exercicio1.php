<?php

require './autoload.php';

use veiculos\Veiculo;
use veiculos\Carro;

try {
    $carro = new Carro(1);
} catch (excecoes\VeiculoException $ex) {
    echo "Mensagem: ";
    echo $ex->descricao;
}
