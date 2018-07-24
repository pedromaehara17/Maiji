<?php

require "conexao.php";

$id = $_GET["id"];

$comando = "SELECT * FROM produto WHERE idLivro = $id";
$retorno = mysqli_query($cnx, $comando);

$registro = mysqli_fetch_assoc($retorno);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="atualizarProduto.php" method="POST">

	<input type="hidden" name="id" 
		value="<?php echo $registro["idLivro"];?>">
		
		
	Nome: <input type="text" name="nl" 
		value="<?php echo $registro["nomelivro"];?>">
		
		
		categoria: <input type="text" name="cl" 
		value="<?php echo $registro["categorialivro"];?>">
		
		
	Descricao: <input type="text" name="des" 
		value="<?php echo $registro["descricao"]; ?>">
	Preco: <input type="text" name="pl" 
		value="<?php echo $registro["precolivro"];?>">
		
		
		imagem: <input type="file" name="img" 
		value="<?php echo $registro["img"];?>">
		
	<button type="submit">vai!</button>
</form>


</body>
</html>