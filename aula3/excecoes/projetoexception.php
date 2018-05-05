<?php

namespace excecoes;

class ProjetoException extends \Exception {

    public $descricao;

    public function __construct($message = "", $code = 0, $descricao = "") {
        parent::__construct($message, $code);

        $this->descricao = $descricao;

        $this->gravar_log();  //this é para executar uma funcao que esta dentro da propria classe exception
    }

    public function gravar_log() {
        $texto = "Data Hora: " . date("d/m/Y H:i:s");
        $texto .= "\n";
        $texto .= "Codigo: " . $this->getCode();
        $texto .= "\n";
        $texto .= "Mensagem: " . $this->getMessage();
        $texto .= "\n";
        $texto .= "Mensagem: " . $this->getDescricao();
        $texto .= "\n";
        $texto .= "Arquivo: " . $this->getFile();
        $texto .= "\n";
        $texto .= "Linha: " . $this->getLine();

        file_put_contents("excecoes.log", $texto);
    }

    public function getDescricao() {
        return $this->descricao;
    }

}
