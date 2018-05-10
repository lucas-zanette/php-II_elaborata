<?php

require './conexao.php';

try {
    
    $sql = "INSERT INTO sugestoes (descricao) VALUES (:descricao) ";
    
    //faremos um bind para
    $stm = $db->prepare($sql);
    
    $descricao = "Cerveja Malzbier no ultimo dia de aula";
    $stm->bindParam(":descricao", $descricao);
    $stm->execute();
    
    echo "Sugestão cadastrada com sucesso";
            
    
    
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
