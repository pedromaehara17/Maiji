<?php session_start();

require "conexao.php";

//$id = $_SESSION["produto"];

if(!empty($_GET)){
	$id = $_GET["id"];
}else{
	header("Location: inicio.php");
	die();
}

$comando = "SELECT * FROM produto WHERE idLivro = '$id'";
$retorno = mysqli_query($cnx, $comando);
$registro = mysqli_fetch_assoc($retorno);
echo "id: " . $registro["idLivro"];echo "<br>";
echo "nome: " . $registro["nomelivro"];echo "<br>";
echo " categoria: " . $registro["categorialivro"];echo "<br>";
echo " descricao: " . $registro["descricao"];echo "<br>";
echo " preco: " . $registro["precolivro"];echo "<br>";
echo " url: " . $registro["img"];
echo "<br>";

?>

<img src="<?php echo $registro["img"]; ?>" alt="" class="" />