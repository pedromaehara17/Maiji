<?php
require "conexao.php";

$id = $_GET["id"];

$comando = "DELETE FROM produto WHERE idLivro = $id";

$retorno = mysqli_query($cnx, $comando); 

if($retorno) {
	header("refresh:1; url=listarProduto.php");
	echo "Foi excluido com sucesso!";
} else {
	echo "Errou!";
}
?>