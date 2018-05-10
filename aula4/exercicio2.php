<?php

require './conexao.php';

try {
    $sql = "INSERT INTO turma (nome, qtd_alunos) values(?,?)";
    $valores = ["2grau-2ano", 40];
    
    $stm = $db->prepare($sql);
    $stm->execute($valores);
    
    $sql = "INSERT INTO turma (nome, qtd_alunos) values(?,?)";
    $valores = ["2grau-3ano", 50];
    
    $stm = $db->prepare($sql);
    $stm->execute($valores);
    echo "Turma cadastrada com sucesso!";
    
    
    
} catch (PDOException $exc) {
    echo $exc->getTraceAsString();
}
