<?php

namespace exemplos;

class Cliente {
    public function cadastrar() {
        echo "Cadastrando...";
        
        $this->gravar();
//        throw new \Exception("Não foi possível cadastrar o cliente!");
        
        echo "Cliente cadastrado com sucesso";
        
    }
    
    public function gravar() {
        echo "<br>";
        echo "Gravando cliente...";
        throw new \Exception("Não foi possível gravar o cliente!");
    }
            
}
