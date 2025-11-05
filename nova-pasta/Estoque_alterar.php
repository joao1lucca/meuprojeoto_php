<?php

require_once "config.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $item = $_POST["item"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];
    $id = $_POST["id"];

    $sql = "UPDATE estoque SET 
            item = '$item',
            quantidade = '$quantidade',
            preco = '$preco'
            WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<h3>Cliente alterado com sucesso!</h3>";
        echo "<a href='?pg=estoque_admin'>Voltar</a>";
    }else{
        echo "<h3>Erro ao alterar cadastro do cliente!</h3>";
    }
}else{
    echo "<h2>Acesso negado!</h2>";
    echo "<a href='?pg=estoque_admin'>Voltar</a>";
}

mysqli_close($conexao);
