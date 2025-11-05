<?php
echo"<h1>Estoque</h1>";

echo"<a href='?pg=estoque_admin'>Lista de itens | </a>";

//área de conteudo 
if(empty($_SERVER['QUERY_STRING'])){
    echo"<h3>Bem vindo ao seu Estoque.</h3>";
}else {
    $pg = "$_GET[pg]";
    include_once "$pg.php";
}
