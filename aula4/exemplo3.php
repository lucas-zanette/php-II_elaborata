<?php

require './conexao.php';

try {
    $sql = "DELETE FROM sugestoes where chave = 5";
    //$db->query($sql);
    //outra forma é com exec porém espera um resultado de sucesso ou não    
    $num_excluido = $db->exec($sql);
    
    if ($num_excluido === 0 ) {
        echo "Não foi possível excluir registro";
    } else {
        echo "Foram excluídos $num_excluido registros";
    }
       
    
} catch (PDOException $exc) {
    echo $exc->getTraceAsString();
}
