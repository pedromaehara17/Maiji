<?php 	session_start();
require 'conexao.php';

	$id = $_SESSION["id"];
$comando = "DELETE FROM usuario WHERE idCliente = '$id'";
$retorno = mysqli_query($cnx,$comando);


$retorno = mysqli_query($cnx, $comando); 

if($retorno) {
	header("refresh:1; url=inicio.php");
	echo "Foi excluido com sucesso!";
} else {
	echo "Errou!";
}
?>
