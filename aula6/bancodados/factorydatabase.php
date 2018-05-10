<?php

namespace bancodados;

class FactoryDatabase {

    public static function factory($driver = 'mysql') {
        switch ($driver) {
            case "mysql":
                return BancoMysql::getInstancia();
            case "postgres":
                return BancoPostgres::getInstancia();
            default:
                throw new Exception("Falha ao criar objeto: " . $driver);
        }
    }

}
