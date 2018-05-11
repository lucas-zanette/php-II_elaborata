<?php
require './conexao.php';

if (isset($_GET['cadastrar'])) {

   $sql = "INSERT INTO sugestoes (descricao) VALUES (:descricao)";
   $stm = $db->prepare($sql);
   
   $stm->bindParam(":descricao", $_GET['descricao']);
   $stm->execute();   
   
}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Cadastro de Sugestão</title>
      <meta charset="UTF-8">
   </head>
   <body>
      <h1>Cadastre uma sugestão</h1>
      <form>
         <label>Sugestão:</label>
         <br>
         <textarea name="descricao"></textarea>
         <br>
         <button type="submit" name="cadastrar">Cadastrar</button>
      </form>
   </body>
</html>