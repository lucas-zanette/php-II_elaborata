<?php

namespace cadastros;

class Produto {

    public function cadastrar($nome, $preco, $tamanho) {

        if ($preco < 0) {
            throw new \Exception("Preço com valor negativo");
        }
        if ($tamanho > 100) {
            throw new \Exception("Tamanho inválido. Digite um valor menor");
        }
    }

}
