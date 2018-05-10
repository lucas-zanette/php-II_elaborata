<?php

namespace exemplos;

interface VeiculoInterface {
   
   public function acelerar();
   public function freiar();
   public function re();
   public function fazerCurva($lado);
   
}