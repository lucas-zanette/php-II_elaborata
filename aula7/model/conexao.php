<?php

namespace model;
use \PDO;

class Conexao {

    //singleton 3 regras
    private static $conexao;

    private function __construct() {
        
    }

    public static function getConexao() {
        if (self::$conexao == null) {
        
            try {
                self::$conexao = new PDO("mysql:host=localhost;dbname=aula_php2;charset=utf8", "root", "elaborata");
            } catch (Exception $ex) {
                echo "Falha ao conectar ao banco de dados: " . $ex->getMessage();
            }

            self::$conexao->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
            self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        return self::$conexao;
        
    }

}
