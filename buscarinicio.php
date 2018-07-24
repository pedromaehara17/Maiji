<?php session_Start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
require 'conexao.php';

$comando = "SELECT * FROM produto";
$retorno = mysqli_query($cnx, $comando);
$produtos = array();
while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
		
}



?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
</style>
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<img src="logo.png" alt="" class="fa" />
					<form method="post"id="form" action="buscarinicio.php">
			  <input type="text" id="txtBusca" name="pesquisa" placeholder="Buscar..."/>
			 

			 <input type="submit" id="a" placeholder="Enviar"/><br>
				
				  
				 <a href="inicio.php" class="iai"> Inicio</a>
				  
			  <a href="entrar.php" class="iai"> Entre ou cadastre-se</a>

		</div>
	</div>
	
<?php
if(!empty($_POST["pesquisa"])){
$termoBusca= $_POST["pesquisa"];

require "conexao.php";
	$sql="SELECT * FROM produto WHERE nomelivro LIKE '%$termoBusca%'";
	$retorno= mysqli_query($cnx,$sql);
	
	echo "<pre>";
$registros= mysqli_fetch_assoc($retorno);
	?>
	<?php foreach ($retorno as $produto) : ?>
						
				<center><p><?php echo $registros["nomelivro"]?></p></center>
				<center><img src="<?php echo $registros["img"]?>" style='height:400px;width:250px' ></img></center>
				<center><a href="<?php echo "detalharProduto.php?produto=" . $registros['idLivro']?>">Visualizar</a></center>
<?php endforeach ;
if(empty($produto)){
		header("refresh:2; url=inicio.php");
echo "Nada foi encontrado!";}
}else{
header("refresh:2; url=inicio.php");
echo "Nada foi encontrado!";}?>
				</div>
				</body>
				</html>
			


