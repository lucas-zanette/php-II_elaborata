<?php

namespace model;

class Produto {

    private $nome;
    private $preco;
    private $quantidade;
    private $cor;
    private $peso;

    function __construct($nome, $preco, $quantidade, $cor, $peso) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->cor = $cor;
        $this->peso = $peso;
    }

    function getNome() {
        return $this->nome;
    }

    function getPreco() {
        return $this->preco;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getCor() {
        return $this->cor;
    }

    function getPeso() {
        return $this->peso;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

}
