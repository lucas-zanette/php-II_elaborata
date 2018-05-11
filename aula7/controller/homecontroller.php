<?php

namespace controller;

use model\Produto;

class HomeController {

    public function cadastrarProduto(Produto $produto) {
    
        $produtoDB = new \model\ProdutoDB();
        $produtoDB->gravarProduto($produto);
        
        
      
    }

}
