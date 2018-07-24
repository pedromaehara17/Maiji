<?php
	$email = $_GET['email'];
	$senha =$_POST['senha'];
	
	include 'conexao.php';
	
	$verificaemail= mysql_query("SELECT FROM * FROM usuario WHERE email='$email'");
	$verificasenha= mysql_query("SELECT FROM * FROM usuario WHERE senha='$senha'");
	
	if(($verificaemail)&&($verificasenha)){
			header('Location: iniciologado.php');
	}else{
		echo("Essa conta não existe");
	}



?>