<?php

namespace exemplos;

class Filha extends Pai {

    public $nome = "Vanessa";
    public $notebook = "Dell";

    public function __construct($nomeDaFilha) {
        parent::__construct();
        echo "Construindo o objeto de FILHA";

        echo "<br>";
        echo "<br>";
        echo $nomeDaFilha;
        echo "<br>";
        
        $this->nome = $nomeDaFilha;
    }

}
