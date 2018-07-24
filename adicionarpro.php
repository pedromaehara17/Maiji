<?php
require "conexao.php";

if(!empty($_POST)){
$nl = $_POST["nl"];
$pl = $_POST["pl"];
$cl = $_POST["cl"];
$des = $_POST["des"];
$img= $_POST["img"];

$comando = "INSERT INTO produto(nomelivro, precolivro, categorialivro, descricao, img) values ('$nl','$pl','$cl','$des','$img')";

$retorno = mysqli_query($cnx, $comando);

if($retorno) {
	header("refresh:2; url=listarProduto.php");
	echo "Foi inserido com sucesso!";
} else {
	echo "Errou!";
	echo $nl;
	echo $pl;
	echo $cl;
	echo $des;
	echo $img;
}
}
?>
