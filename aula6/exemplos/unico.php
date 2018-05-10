<?php

namespace exemplos;

class Unico {
   
   public $cpf;
   
   private static $instancia;

   private function __construct() {
   }
   
   public static function getInstancia() {
      if(self::$instancia == null) {
         self::$instancia = new Unico();
      }
      return self::$instancia;
   }
}