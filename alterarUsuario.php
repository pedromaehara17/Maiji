<?php session_start();

require "conexao.php";

$id= $_SESSION["id"];
$comando = "SELECT * FROM usuario WHERE idCliente = '$id'";
$retorno = mysqli_query($cnx, $comando);

$registro = mysqli_fetch_assoc($retorno);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="atualizarUsuario.php" method="POST">
	<input type="hidden" name="id" 
		value="<?php echo $registro["idCliente"]; ?>">
	Nome: <input type="text" name="nome" 
		value="<?php echo $registro["nome"]; ?>">
		<bR>
		Sobrenome: <input type="text" name="sobrenome" 
		value="<?php echo $registro["sobrenome"]; ?>">
		<bR>
		CPF: <input type="text" name="cpf" data-mask="000.000.000-00"
		value="<?php echo $registro["cpf"]; ?>">
		<bR>
		Dia: <input type="text" name="dia" 
		value="<?php echo $registro["dia"]; ?>">
		<bR>
		Mês: <input type="text" name="mes" 
		value="<?php echo $registro["mes"]; ?>">
		<bR>
		Ano: <input type="text" name="ano" 
		value="<?php echo $registro["ano"]; ?>">
		<bR>
		Telefone: <input type="text" name="telefone" data-mask="(00)0000-0000"
		value="<?php echo $registro["telefone"]; ?>">
		<bR>
		
		
	E-mail: <input type="text" name="email" 
		value="<?php echo $registro["email"]; ?>"><bR>
	Sexo: <input type="text" name="sexo" 
		value="<?php echo $registro["sexo"];?>">
	<button type="submit">vai!</button>
</form>

<script src="jquery-3.3.1.min.js"></script>
<script src="jquery.mask.js"></script>
</body>
</html>