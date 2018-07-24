<?php

require "conexao.php";
$nomep = $_POST["nl"];
$descricao = $_POST["des"];
$preco = $_POST["pl"];
$id = $_POST["id"];
$categoria = $_POST["cl"];
$img = $_POST["img"];

$comando = "UPDATE produto
SET descricao = '$descricao', precoLivro = '$preco', categoriaLivro ='$categoria', nomelivro = '$nomep', img = '$img'
WHERE idLivro='$id'";

$retorno = mysqli_query($cnx, $comando);

if($retorno) {
	header("refresh:2; url=listarProduto.php");
	echo "Foi ALTERADO com sucesso!";
} else {
	echo "Errou!";
}

?>