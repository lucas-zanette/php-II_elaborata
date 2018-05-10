<?php

require './conexao.php';
try {
    $sql = "INSERT INTO turma (nome, qtd_alunos) values('6', 80)";
    $db->query($sql);
    echo "Sugestão cadastrada com sucesso";
} catch (PDOException $exc) {
    echo $exc->getMessage();
}