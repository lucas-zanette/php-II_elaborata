<?php

namespace model;

class ProdutoDB {

    public function gravarProduto(Produto $produto) {
        $sql =  "INSERT INTO produtos (nome, preco, quantidade, cor, peso) 
                    values (:nome, :preco, :quantidade, :cor, :peso)";
        
        $db = \model\Conexao::getConexao();
        $stm = $db->prepare($sql);
        
        @$stm->bindParam(":nome", $produto->getNome());
        @$stm->bindParam(":preco", $produto->getPreco());
        @$stm->bindParam(":quantidade", $produto->getQuantidade());
        @$stm->bindParam(":cor", $produto->getCor());
        @$stm->bindParam(":peso", $produto->getPeso());
        
        $stm->execute();
                
    }

}
