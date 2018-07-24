<!DOCTYPE html>
<html>
<head>
 <title>Livraria virtual</title>
 <meta charset="utf-8">
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
	#a{
		   background-color:#E5E8EA;
		   border:0.5px solid black;
		   border-radius:5px;
		   font-size:20px;
		   font-family: 'Poppins', sans-serif;
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
</head>





<body>
<div id="header" class="container">
		<div id="logo">
		<a href="inicio.php">	<img src="logo.png" alt="" class="fa" /></a>
		

		</div>
		
<div id="nossa"></div>
	</div>
	<center>
<h1>Cadastrar</h1>
 <form method="get" action="cadastrarusu.php">
<label for="in">Nome:</label>
	<input id="in" type="Text" name="nome">
<label for="zin">Sobrenome:</label>
	<input id="zin" type="Text" name="sobrenome"><br><br>
	
<label for="din">Data de nascimento:</label>
	<input type="text" name="dia" size="2" maxlength="2" placeholder="Dia"> 
<input type="text" name="mes" size="2" maxlength="2"  placeholder="Mês"> 
<input type="text" name="ano" size="4" maxlength="4" placeholder="Ano"><br><Br>

<label for="ain">CPF:</label>
	<input name="cpf" id="ain" type="text" data-mask="000.000.000-00" class="form-control"  placeholder="Ex.: 000.000.000-00"><br><br>

<label for="Kin">Telefone:</label>
<input name="telefone" ID="KIN" type="text" data-mask="(00)0000-0000" class="form-control cel-sp-mask" placeholder="Ex.: (00) 00000-0000">	<br><br>
	<label for="em">Email:</label>
	<input id="em" type="email" name="email"><br><br>
	
	Sexo:
		<select name="sexo">
			<option selected="" value="">Selecione o seu sexo</option>
			<option value="masculino">Masculino</option>
			<option value="feminino">Feminino</option>
			<option value="outros">Outros</option>
		</select><br><br>


	<label for="sen">Senha:</label>
	<input maxlength="16" min="8" id="sen" type="password" name="senha"><br><br>
	
	<label for="zsen">Confirmar senha:</label>
	<input maxlength="16" min="8" id="zsen" type="password" name="confsenha"><br><br>
		<input type="submit" id="a" value="Cadastrar">
		</form>
		</center><br><br><br>
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
<script src="jquery-3.3.1.min.js"></script>
<script src="jquery.mask.js"></script><!-- AJAX -->


</body>
</html>


	