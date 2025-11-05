<?php
    require_once "config.inc.php";

    $id = $_GET["id"];
    $sql = "SELECT * FROM estoque WHERE id = '$id'";
    
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $item = $dados['item'];
            $quantidade = $dados['quantidade'];
            $preco = $dados['preco'];
            $id = $dados['id'];
        }
    
?>

<h2>Cadastro de Estoque</h2>
    <form action="?pg=estoque_alterar" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        
        <label>item:</label>
        <input type="text" name="item" value="<?=$item?>"><br>
        <label>quantidade:</label>
        <input type="number" name="quantidade" value="<?=$quantidade?>"><br> 
        <label>Preço:</label>
        <input type="number" name="preco" value="<?=$preco?>"><br>
        <input type="submit" value="Confirmar"> 

    </form>

    <?php
    }else{
        echo "<h2>Nenhum produto encontrado</h2>";
    }
    ?>
