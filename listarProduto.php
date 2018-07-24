<?php session_start();

require "conexao.php";

$comando = "SELECT * FROM produto";
$retorno = mysqli_query($cnx, $comando);
$produtos = array();
while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
	$_SESSION["produto"] = $registro["idLivro"];
}


?>
<table border="1">
	<tr>
		<td>ID</td>
		<td>nome</td>
		<td>PRECO</td>
		<td>categoria</td>
		<TD>DETALHAR</TD>
		<TD>DELETAR</TD>
		<TD>ALTERAR</TD>
	</tr>

	<?php foreach ($produtos as $produto) : ?>
	<tr>
		<td><?=$produto["idLivro"]?> </td>
		<td><?=$produto["nomelivro"]?></td>
		<td><?=$produto["precolivro"]?> </td>
		<td><?=$produto["categorialivro"]?> </td>
		<td>
			<a href="detalharProdutoadm.php?id=<?=$produto["idLivro"]?>">detalhar</a>
		</td>
		<td>
			<a href="deletarProduto.php?id=<?=$produto["idLivro"]?>">del</a>
		</td>
		<td>
			<a href="alterarProduto.php?id=<?=$produto["idLivro"]?>">edit</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<a href="cadProduto.php">Adicionar novo produto</a>

<a href="iniciologadoadm.php">Voltar</a>