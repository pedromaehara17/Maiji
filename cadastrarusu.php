<?php
		if(!empty($_GET)) {
		$nome = $_GET["nome"];
		$sobrenome = $_GET["sobrenome"];
		$cpf=$_GET["cpf"];
		$dia=$_GET["dia"];
		$mes=$_GET["mes"]; 		
		$ano=$_GET["ano"]; 
		$telefone=$_GET["telefone"];
		$email=$_GET["email"];
		$sexo=$_GET["sexo"];
		$senha=$_GET["senha"];
		$confsenha=$_GET["confsenha"];
		

		
	$nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_STRING);
	$sobrenome = filter_input(INPUT_GET, "sobrenome", FILTER_SANITIZE_STRING);
	$cpf = filter_input(INPUT_GET, "cpf", FILTER_SANITIZE_NUMBER_FLOAT);
	$dia= filter_input(INPUT_GET, "dia", FILTER_VALIDATE_INT);
	$sobrenome = filter_input(INPUT_GET, "sobrenome", FILTER_SANITIZE_STRING);
	$telefone = filter_input(INPUT_GET, "telefone", FILTER_SANITIZE_NUMBER_FLOAT);
	$email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
	
			
		$erro = false;

		if ((strlen($_GET['nome']) < 3)or($nome==false)){
 		echo "Você deve inserir um nome válido";echo"<br>";
 		$erro = true;
	}
		if (strlen($_GET['sobrenome']) == 0){
		echo "Você deve inserir um sobrenome válido";echo"<br>"; 
		$erro = true;
	}
		if ( ($dia == 0)or($dia>31)or($mes>13)or($ano>2018)or($ano==0)or($mes==0)) {
		echo "Você deve inserir uma data de nascimento válida";echo"<br>"; 
		$erro = true;
	}
		if (strlen($_GET['cpf']) == 0) {
		echo "Você deve inserir um número de CPF válido";echo"<br>"; 
		$erro = true;
	}
		if ((strlen($_GET['telefone']) == 0)or($telefone==false)) {
		echo "Você deve inserir um número de telefone válido";echo"<br>"; 
		$erro = true;
	}
		if ((strlen($_GET['email']) == 0)or($email==false)) { 
		echo "Você deve inserir um e-mail";echo"<br>";
	 	$erro = true;
 	}
 		if(empty($_GET["sexo"])){
		echo "Você deve informar um sexo";echo"<br>"; 
		$erro = true;
	}
		if (((strlen($_GET['senha'])<8)and(strlen($_GET['senha']>16)))or(strlen($_GET['senha'])==0)) {
		echo "Você deve inserir uma senha";echo"<br>"; 
		$erro = true;
 	}
		if (($_GET['senha']) <> ($_GET['confsenha'])) {
	 	echo "Você deve inserir a senha igual à anterior";echo"<br>"; 
 		$erro = true;
	} 

 		if ($erro==false){

		require "conexao.php";

		$comando = "INSERT INTO usuario(nome, sobrenome, dia, mes, ano, cpf, telefone, email, sexo, senha, confsenha,tipo) values ('$nome', '$sobrenome', '$dia', '$mes', '$ano', '$cpf', '$telefone', '$email', '$sexo', '$senha', '$confsenha','co')";

		$retorno = mysqli_query($cnx, $comando);


		
		if($retorno) {
			header("refresh:2; url=entrar.php");
		echo "pessoa cadastrada!";
	} 	else {
		echo "Deu errado!";
}
}
}
?>