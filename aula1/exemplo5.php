<?php

try {
   $idade = 14;

   if($idade < 18) {
      throw new Exception("É preciso ser maior de idade para continuar <br>");
   }

   echo "Conteúdo da página...";
   
} catch (Exception $ex) {
   echo "Houve o seguinte problema: <br>";
   echo $ex->getMessage();
   echo "A linha da exceção ".$ex->getLine();
   echo "<br>";
   echo "O arquivo da exceção ".$ex->getFile();
//   var_dump($ex->getTraceAsString());
}


