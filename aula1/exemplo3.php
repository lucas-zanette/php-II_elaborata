<?php

spl_autoload_extensions(".php");
spl_autoload_register();

$mostra = new mesmo_namespace\Mostra();
$mostra->boaNoite();

$mostra1 = new outro_namespace\Mostra();
$mostra1->boaTarde();