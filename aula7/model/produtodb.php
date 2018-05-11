<?php

namespace model;

class ProdutoDB {

    public function gravarProduto(Produto $produto) {
        $sql =  "INSERT INTO produtos (nome, preco, quantidade, cor, peso) 
                    values (:nome, :preco, :quantidade, :cor, :peso)";
        
        $db = \model\Conexao::getConexao();
        $stm = $db->prepare($sql);
        
        $stm->bindValue(":nome", $produto->getNome());
        $stm->bindValue(":preco", $produto->getPreco());
        $stm->bindValue(":quantidade", $produto->getQuantidade());
        $stm->bindValue(":cor", $produto->getCor());
        $stm->bindValue(":peso", $produto->getPeso());
        
        $stm->execute();
                
    }

}
