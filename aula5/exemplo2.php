<?php
require './conexao.php';

try {
   $sql = "SELECT * FROM sugestoes";
   $stm = $db->query($sql);
   
   $dados = $stm->fetchAll();
   
   foreach ($dados as $linha) {
      var_dump($linha);
   }
   
} catch (Exception $exc) {
   echo $exc->getTraceAsString();
}

