<?php

namespace excecoes;

class VeiculoException extends \Exception {

    public $descricao;

    public function __construct($message = "", $code = 0, $descricao) {
        parent::__construct($message, $code);

        $this->descricao = $descricao;
    }

}
