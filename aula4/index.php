<?php

require './conexao.php';
try {
    $sql = "INSERT INTO sugestoes (descricao) values('Nunca frite bacon sem camisa!')";
    $db->query($sql);
    echo "Sugestão cadastrada com sucesso";

//PDO TEM UMA CLASSE DE EXCECÕES PRIVADA - PDOException
} catch (PDOException $exc) {
    echo $exc->getMessage();
}