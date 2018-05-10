<?php

namespace bancodados;

class BancoMysql implements DatabaseInterface {
   
   private static $instancia;
   
   private function __construct() {
   }
   
   public static function getInstancia() {
      if(self::$instancia == null) {
         self::$instancia = new BancoMysql();
      }
      return self::$instancia;
   }
   
   

}
