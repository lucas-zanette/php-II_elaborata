<?php

require './conexao.php';

try {

    $sql = "SELECT * FROM sugestoes";
    $stm = $db->query($sql);

    while ($linha = $stm->fetch()) {
        
        echo "chave: " .$linha['chave'];
        echo "<br>";
        
        echo "Nome: " .$linha['descricao'];        
        
        echo "<hr>";
        
    }
} catch (PDOException $exc) {
    echo $exc->getTraceAsString();
}


