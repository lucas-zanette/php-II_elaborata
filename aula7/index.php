<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Produtos</title>
    </head>
    <body>

        <h1>Cadastre um produto</h1>
        <form method="POST">
            <label>Nome:</label>
            <br>
            <input name="nome">
            <br>

            <label>Cor:</label>
            <br>
            <input name="cor">
            <br>

            <label>Peso:</label>
            <br>
            <input name="peso">
            <br>

            <label>Preço:</label>
            <br>
            <input name="preco">
            <br>

            <label>Quantidade:</label>
            <br>
            <input name="quantidade">
            <br>
            <br>

            <button type="submit" name="cadastrar">Cadastrar</button>
        </form>

        <?php
        require './autoload.php';
        $homeController = new controller\HomeController();

        if (isset($_POST['cadastrar'])) {
            echo "<pre>";
            $produto = new model\Produto();
            $produto->setNome($_POST['nome']);
            $produto->setCor($_POST['cor']);
            $produto->setPeso($_POST['peso']);
            $produto->setPreco($_POST['preco']);
            $produto->setQuantidade($_POST['quantidade']);
            $homeController->cadastrarProduto($produto);
            echo "</pre>";
        }
        ?>
    </body>
</html>
