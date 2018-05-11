<?php

namespace exemplos;

class Calculadora {

   public static function calcular($valor1, $valor2) {
      self::div($valor1, $valor2);
      self::mult($valor1, $valor2);
      self::somar($valor1, $valor2);
      self::sub($valor1, $valor2);
   }

   private static function somar($valor1, $valor2) {
      echo "Soma: ".($valor1 + $valor2);
      echo "<br>";
   }

   private static function sub($valor1, $valor2) {
      echo "Subtração: ".($valor1 - $valor2);
      echo "<br>";
   }

   private static function div($valor1, $valor2) {
      echo "Divisão: ".($valor1 / $valor2);
      echo "<br>";
   }

   private static function mult($valor1, $valor2) {
      echo "Multiplicação: ".($valor1 * $valor2);
      echo "<br>";
   }

}
