<?php

    require_once "config.inc.php";
    $id = $_GET["id"];
    $sql = "DELETE FROM estoque WHERE id = '$id'";
    
    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "Registro excluido com sucesso!";
        echo "<a href='?pg=estoque_admin'>Voltar</a>";
    }else{
        echo "Erro ao excluir registro!";
    }
        mysqli_close($conexao);
?>
