<?php

namespace exemplos;

class Tradutor {

   private static $instancia;

   private function __construct() {
      
   }

   public static function getInstancia() {
      if (self::$instancia == null) {
         self::$instancia = new Tradutor();
      }
      return self::$instancia;
   }
   
   public function traduzir($texto, $lingua) {
      $retorno = "";
      switch ($lingua) {
         case "ING":
            
            switch ($texto) {
               case "Bom dia":
                  $retorno = "Good morning";
                  break;
               case "Boa tarde":
                  $retorno = "Good afternoon";
                  break;
            }
            
            break;
         case "ESP":
            
            switch ($texto) {
               case "Bom dia":
                  $retorno = "Buenos dias";
                  break;
               case "Boa tarde":
                  $retorno = "Buenas tardes";
                  break;
            }
            
            break;
      }
      
      return $retorno;
   }

}
