<?php
    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $item = $_POST["item"];
        $quantidade = $_POST["quantidade"];
        $preco = $_POST["preco"];


        $sql = "INSERT INTO estoque (item, quantidade, preco) VALUES ('$item', '$quantidade', '$preco')";

        if(mysqli_query($conexao, $sql)){
            echo "<h3>Produto cadastrado com sucesso</h3>";
            echo "<a href='?pg=estoque_opcoes'>Voltar</a>";
        }else{
            echo "<h3>Erro ao cadastrar produto</h3>";
        }

    }else{
        echo "<h2>Acesso negado!</h2>";
        echo "<a href='?pg=estoque_admin'>Voltar</a>";
    }
?>
