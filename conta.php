<?php 	session_start();?>
<center>
<h2>Seus dados:</h2>
<?php

require 'conexao.php';

	$id = $_SESSION["id"];
$comando = "SELECT * FROM usuario WHERE idCliente = '$id'";
$retorno = mysqli_query($cnx,$comando);
$dados = mysqli_fetch_assoc($retorno);

echo "<br>";

	echo $dados["idCliente"];echo "<br>";
	echo $dados["nome"];	echo "<br>";
	echo $dados["sobrenome"];echo "<br>";	
			echo $dados["cpf"];	echo "<br>";
				echo $dados["dia"];	echo "<br>";
					echo $dados["mes"];	echo "<br>";
						echo $dados["ano"];	echo "<br>";
							echo $dados["telefone"];	echo "<br>";
								echo $dados["email"];echo "<br>";

									echo $dados["sexo"];	


?>
<br>
<a href="alterarUsuario.php">Alterar</a>
<a href="deletarConta.php">Deletar</a>
</center>