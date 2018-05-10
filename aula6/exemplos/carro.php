<?php

namespace exemplos;

/**
 * Esse carro é top
 *
 * @author Robson
 */
class Carro implements VeiculoInterface {

   public $velocidade = 0;
   public $direcao = "frente";

   public function acelerar() {
      $this->velocidade += 30;
   }

   /**
    * Passar direita, esquerda ou frente
    * @param string $lado
    */
   public function fazerCurva($lado) {
      $this->direcao = $lado;
   }

   public function freiar() {
      $this->velocidade -= 30;
   }

   public function re() {
      $this->velocidade = -10;
   }

}
