<?php

namespace veiculos;

class Carro extends Veiculo {

    public function __construct($marca) {    
        parent::__construct();
        
        echo $marca;
        $this->marca = $marca;
    }
}