<?php

require './conexao.php';

try {

    $sql = "SELECT * FROM sugestoes";
    $stm = $db->query($sql);

    //while ($linha = $stm->fetch(PDO::FETCH_ASSOC)) {  //como já definimos no conexao não precisa especificar o PDO
    //while ($linha = $stm->fetch(PDO::FETCH_BOTH)) {
    //while ($linha = $stm->fetch(PDO::FETCH_OBJ)) {
    //while ($linha = $stm->fetch(PDO::FETCH_NUM)) {
    
    while ($linha = $stm->fetch()) {
        echo "<pre>";
        var_dump($linha);
        echo "</pre>";
    }
} catch (PDOException $exc) {
    echo $exc->getTraceAsString();
}


