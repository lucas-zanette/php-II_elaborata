<?php

namespace veiculos;

class Carro extends Veiculo {

    public function __construct($marca) {    
//        parent::__construct($marca);
        
        echo $marca;
//        $this->marca = $marca;
    }
}