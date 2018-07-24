<?php session_start();?>
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
<link rel="shortcut icon" href="kk.png" type="image/x-png"/>
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
			<img src="logo.png" alt="" class="fa"/>
					<form method="post" id="form" action="buscarinicio.php">
			  <input type="text" id="txtBusca" name="pesquisa" placeholder="Buscar..."/>
				

			 <input type="submit" id="a" placeholder="Enviar"/><br>
				</form>
				  
				  
				  
			  <a href="entrar.php" class="iai"> Entre ou cadastre-se</a>

		</div>
	</div>
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li class="current_page_item"><a href="inicio.php" accesskey="1" title="">Home</a></li>
			<li><a href="livrosdidaticos.php" accesskey="2" title="">Livros didáticos</a></li>
				<li><a href="livrosempt.php" accesskey="3" title="">Livros em português</a></li>
				<li><a href="livrosextra.php" accesskey="4" title="">Livros em outros idiomas</a></li>
				<li><a href="livrosinfanto.php" accesskey="5" title="">Livros infantojuvenis</a></li>
				<li><a href="hq.php" accesskey="6" title="">HQs</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="banner"></div>


		<div class="title">
		<center><h2>Todos os produtos</h2></center>
		
		</div>
		<div id="tudoo">
<div id="nol">
			<?php foreach ($produtos as $produto) : ?>
						
			<center>	<p><?= $produto["nomelivro"]?></p></center>
				<center><img src="<?php echo $produto["img"];?>" style='height:400px;width:250px' ></img></center><br>
			<center>	<a href="<?php echo "detalharProduto.php?produto=" . $produto['idLivro']?>">Visualizar</a> </center>
				 <br><br><Br>
				
			<?php endforeach ; ?>
</div></div>
			
	
</body>
</html>
