<?php
    require_once "config.inc.php";

    $sql = "SELECT * FROM estoque";

    $resultado = mysqli_query($conexao, $sql);

    echo "<a href='?pg=estoque_form'>Cadastrar vendas</a>";

    echo"<h2>Lista de vendas</h2>";

    if (mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)) {
            echo "ID: " . $dados["id"] . "<br>";
            echo "item: " . $dados["item"] . "<br>";
            echo "quantia: " . $dados["quantidade"] . "<br>";
            echo "preco: " . $dados["preco"] . "<br>";
            echo "<a href='?pg=estoque_forms_alterar&id=$dados[id]'>Editar</a>";
            echo " | <a href='?pg=estoque_excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";

        }
    }else{
        echo "<h2>Nenhum item cadastrado</h2>";
        echo "<a href='?pg=estoque_admin'>Voltar</a>";
    }
            
?>
