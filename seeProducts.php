<?php session_start();
require('conexao.php');


$id=$_SESSION["produto"];

$comando = "SELECT * FROM produto WHERE idLivro = '$id'";
$retorno = mysqli_query($cnx,$comando);
$dados = mysqli_fetch_assoc($retorno);



echo $dados["nomeLivro"];


echo $dados["precolivro"];
echo $dados["descricao"];








?>