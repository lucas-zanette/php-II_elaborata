<?php

namespace projeto1;

class Calculadora {

   public function soma($valor1, $valor2) {
      echo "O resultado da soma de " . $valor1 . " com " . $valor2 . " é " .
      ($valor1 + $valor2);
   }

   public function divisao($valor1, $valor2) {
      echo "O resultado da divisão de " . $valor1 . " com " . $valor2 . " é " .
      ($valor1 / $valor2);
   }

   public function subtracao($valor1, $valor2) {
      echo "O resultado da subtração de " . $valor1 . " com " . $valor2 . " é " .
      ($valor1 - $valor2);
   }

   public function multiplicacao($valor1, $valor2) {
      echo "O resultado da multiplicação de " . $valor1 . " com " . $valor2 . " é " .
      ($valor1 * $valor2);
   }

}
