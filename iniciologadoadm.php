<?php session_start();

	if (!isset($_SESSION["logado"])) {
		echo("<style>h2{color:red;</style>");
		echo "<h2>Você precisa se autenticar para acessar essa área</h2>";
		echo("<a href='inicio.php'>Voltar</a>");
		die();
	} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	
			 <div id="oie"> <a class="iai" href="logout.php"> Sair</a> <a class="iai" href="cadproduto.php"> Editar produtos</a> </div>

		</div>
	</div>
</div>
<div id="banner"></div>
<div id="wrapper2">
	<center><h1>ÁREA DO ADMINISTRADOR</H1></CENTER>
</div>


</body>
</html>
