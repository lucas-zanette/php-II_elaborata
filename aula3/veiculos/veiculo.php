<?php

namespace veiculos;

class Veiculo {

    public $cor;
    public $modelo;
    public $ano;
    public $marca = "Ford";
    public $roda;

    public function __construct($roda) {        
        $this->roda = $roda;
    }

}
