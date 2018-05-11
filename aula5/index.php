<?php

require './conexao.php';

try {
   $sql = "SELECT * FROM sugestoes WHERE chave = :chave";
   $stm = $db->prepare($sql);
   
   $chave = 8;
   $stm->bindParam(":chave", $chave);
   $stm->execute();
   
   $registro = $stm->fetch();
   var_dump($registro);
   
} catch (Exception $exc) {
   echo $exc->getMessage();
}
