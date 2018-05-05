<?php

namespace dados;

class Clientes {

    private $nome;
    private $telefone;
    private $cpf;
    private $sobrenome;
    private $endereco;

    function __construct($nome, $telefone, $cpf, $sobrenome, $endereco) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->sobrenome = $sobrenome;
        $this->endereco = $endereco;
    }

    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

}
