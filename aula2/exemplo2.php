<?php

require './autoload.php';

use exemplos\Pai;
use exemplos\Filha;

$pai = new Pai();
$filha = new Filha("Karla");

echo "<pre>";
var_dump($pai);
var_dump($filha);
echo "</pre>";
