<?php

namespace bancodados;

class BancoPostgres implements DatabaseInterface {
   
   private static $instancia;
   
   private function __construct() {
   }
   
   public static function getInstancia() {
      if(self::$instancia == null) {
         self::$instancia = new BancoPostgres();
      }
      return self::$instancia;
   }
   
   

}
