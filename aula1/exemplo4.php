<?php

spl_autoload_extensions(".php");
spl_autoload_register();

use projeto1\Calculadora;
use projeto1\mostra;

$calc = new Calculadora();
$calc->soma(40, 60);