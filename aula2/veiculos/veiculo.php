<?php

namespace veiculos;

class Veiculo {

//    public $cor;
//    public $modelo;
//    public $ano;
    public $marca = "Ford";

    public function __construct($marca) {
        $marca = "bmw";
        $this->marca = $marca;
        
    }

}
