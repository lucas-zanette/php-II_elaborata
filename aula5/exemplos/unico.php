<?php

namespace exemplos;

class Unico {
   
   private static $instancia;

   private function __construct() {
   }
   
   public function getInstancia() {
      if(self::$instancia == null) {
         self::$instancia = new Unico();
      }
      return self::$instancia;
   }
   
}