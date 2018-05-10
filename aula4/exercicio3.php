<?php

require './conexao.php';

try {
    
    $sql = "INSERT INTO turma (nome, qtd_alunos) VALUES (:nome, :qtd) ";
    
    //faremos um bind para
    $stm = $db->prepare($sql);
    
    $nome = "CC - 1";
    $qtd = 100;
           
    $stm->bindParam(":nome", $nome);    
    $stm->bindParam(":qtd", $qtd);
    
    $stm->execute();
    
    echo "Sugestão cadastrada com sucesso";
            
    
    
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
