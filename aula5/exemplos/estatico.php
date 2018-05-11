<?php

namespace exemplos;

class Estatico {

   public function __construct() {
      echo "Construindo objeto...";
   }

   public static function boaNoite() {
      echo "Olá, boa noite!";
      echo "<br>";
      
      self::comoEstaOClima();
   }
   
   private static function comoEstaOClima() {
      echo "Chuvoso e frio";
   }

}
