<?php session_Start();
?>
<?php

require "conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$sexo = $_POST["sexo"];
$email = $_POST["email"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];


$comando = "UPDATE usuario
SET nome = '$nome', sobrenome = '$sobrenome', cpf = '$cpf', telefone = '$telefone', sexo = '$sexo', email = '$email', dia = '$dia', mes = '$mes', ano='$ano'
WHERE idCliente='$id'";

$retorno = mysqli_query($cnx, $comando);

if($retorno) {
	header("refresh:2; url=iniciologado.php");
	$_SESSION["id"] = $id;
	echo "Foi ALTERADO com sucesso!";
} else {
	echo "Errou!";
}

?>