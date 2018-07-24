<?php 	session_Start();?>
<!DOCTYPE html>
<html>
<head>
 <title>Livraria virtual</title>
 <meta charset="utf-8">
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins');
body{
	margin:0;
	font-family: 'Poppins', sans-serif;
	color:black;
}
	.fa{
		width:12%;
		height:12%;
		    overflow: hidden;
    padding: 2em 0em 0em 5em;
	}
	#nossa{
		height:80px;
		background-color:#ad7ab5;
		width:100%;

		
		
	}
	#login{
		
		float:left;

		position:relative;
		left:25%;
	}
	#cadastrar{
		border-left:0.2px solid #C0C6CC;
		float:right;
		position:relative;
		right:25%;
		width:400px;
		padding-left:30px;
	}
	#vaii{
		   background-color:#E5E8EA;
		   border:0.5px solid black;
		   border-radius:5px;
		   font-size:20px;
		   font-family: 'Poppins', sans-serif;
	}
	#tudoo{
		margin-top:5%;
		border:0.5px solid #C0C6CC;
		height:300px;
	}
		#copyright
	{
		overflow: hidden;
		padding: 5em 0em;
		border-top: 1px solid rgba(255,255,255,0.08);
		text-align: center;
		background-color:black;
	}
	
	#copyright p
	{
		letter-spacing: 1px;
		font-size: 0.90em;
		color: rgba(255,255,255,0.6);
	}
	
	#copyright a
	{
		text-decoration: none;
		color: rgba(255,255,255,0.8);
	}
	ul.contact
	{
		margin: 0;
		padding: 2em 0em 0em 0em;
		list-style: none;
	}
	
	ul.contact li
	{
		display: inline-block;
		padding: 0em 0.10em;
		font-size: 1em;
	}
	
	ul.contact li span
	{
		display: none;
		margin: 0;
		padding: 0;
	}
	
	ul.contact li a
	{
		color: #FFF;
	}
	
	ul.contact li a:before
	{
		display: inline-block;
		width: 40px;
		height: 40px;
		line-height: 40px;
		text-align: center;
		color: #FFFFFF;
	}	
	</style>
	<?php
if(!empty($_GET)){

	$emailreal= "adm@adm.com";
	$senhareal= "123456adm";
	$email=$_GET["email"];
	$password=$_GET["senha"];
	

	
	
if(($email==$emailreal)&&($password==$senhareal)){
		$_SESSION["logado"]=$email;
		header("location: iniciologadoadm.php");
}
}
?>
<body>
<div id="header" class="container">
		<div id="logo">
			<a href="inicio.php"><img src="logo.png" alt="" class="fa" /></a>
		

		</div>
<div id="nossa"></div>
	</div>
	<div id="tudoo">
	<div id="login">
<center><h3>Já sou cliente Maiji</h3></center>
 <form method="get" action="entrar.php">
<label for="in">Email:</label>
	<input id="in" class="ll" type="email" name="email"><br><br>
	<label for="on">Senha:</label>
	<input id="on" class="ll" type="password" name="senha"><br><br>
	<center><input type="submit" id="vaii" value="Entrar"></center><br>
		</form>
</div>
<div id="cadastrar">
<center><h3>Ainda não tenho cadastro</h3></center>

<a id="mds">Para comprar em nosso site é preciso realizar um cadastro. Através dele você ficará por dentro das novidades, ofertas e promoções.</a><br>
<br><center>	<a href="cadastrar.php"><input type="submit" id="vaii" value="Cadastrar"></a></center><br><br>
</div>
</div><br><br><br>
<div id="copyright" class="container">
	<p>&copy; Untitled | All rights reserved </a> </a></p>
		<ul class="contact">
			<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
			<li><a href="#" class="icon icon-facebook"><span></span></a></li>
			<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
			<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
			<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
		</ul>
</div>
</body>
</html>
<?php
		if(!empty($_GET)) {

		$email = $_GET["email"];
		$senha = $_GET["senha"];
		
		$email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
		
		
		if (((strlen($_GET['senha'])<8)and(strlen($_GET['senha']>16)))or(strlen($_GET['senha'])==0)) {
echo "Você deve inserir uma senha válida";echo"<br>";
 }
 if ((strlen($_GET['email']) == 0)or($email==false)) { 
	echo "Você deve inserir um e-mail";echo"<br>";
 }
 
 
include 'conexao.php';

	
	
	
	$verificaemail = mysqli_query($cnx,"SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'");

	$registro = mysqli_fetch_assoc($verificaemail);
	$registro["tipo"];
	if($registro == null) {
		echo "nao encontrei ninguem!";
	}elseif($registro["tipo"] == 'ad') {
	header('location:iniciologadoadm.php');
		$_SESSION["nome"] = $registro["nome"];
		
	}else{
		$_SESSION["id"] = $registro["idCliente"];
		
		
		header('location:iniciologado.php');



	}

	die();	


	$tipo = mysqli_query($cnx,"SELECT tipo FROM usuario WHERE email = '$email'");
	 
	 if (($verificaemail)&&($verificasenha)){
	 	if ($tipo == 'adm') {
	 		
	 	}elseif(true){
			header('location:iniciologado.php');

		}else{
			echo "n existe essa conta";
		}
	}
}


 
		?>