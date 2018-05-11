<?php

require './conexao.php';


try {
   $db->beginTransaction();
   
   $sql = "INSERT INTO sugestoes (descricao) VALUES ('Testando 123')";
   $db->exec($sql);
   
   $sql = "UPDATE sugestoes SET descricao = 'Valor teste' WHERE chave = 4";
   $db->exec($sql);
   
   echo "Cadastrado com sucesso!";
   
   $db->commit();
} catch (Exception $exc) {
   $db->rollback();
   
   echo $exc->getMessage();
}


