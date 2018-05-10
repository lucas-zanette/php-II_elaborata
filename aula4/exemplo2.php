<?php

require './conexao.php';

try {
    $sql = "UPDATE sugestoes SET descricao = 'Continue tentando!' where chave = 3";
    $db->query($sql);
    echo "alterado com sucesso.";
    
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
