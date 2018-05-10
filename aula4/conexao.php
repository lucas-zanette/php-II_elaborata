<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=aula_php2;charset=utf8", "root", "elaborata");
} catch (Exception $ex) {
    echo "Falha ao conectar ao banco de dados: " . $ex->getMessage();
}

$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
