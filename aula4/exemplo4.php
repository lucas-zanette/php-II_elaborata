<?php

require './conexao.php';

try {
    $sql = "INSERT INTO sugestoes (descricao) values(?)";
    //$valores = ["valor1", "valor2"];  
    $valores = ["Bata ççç ao entrar em sala de aula"];
    //se usar query é a forma manual
    
    //iremos usar o statement para garantir segurança    
    $stm = $db->prepare($sql);
    $stm->execute($valores);
    
    echo "Sugestao cadastrada com sucesso!";
    
    
    
} catch (PDOException $exc) {
    echo $exc->getTraceAsString();
}
