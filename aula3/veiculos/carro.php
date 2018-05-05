<?php

namespace veiculos;

use excecoes\VeiculoException;

class Carro extends Veiculo {

    public function __construct($roda) {    
        parent::__construct($roda);
        
        if ( $roda < 2 ) {
            throw new VeiculoException("Mensagem: ", 1, "Numero de rodas inválido!");
        }
    }
}