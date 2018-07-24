<form method="post" action="adicionarpro.php">
	<label for="nl">Nome do livro:</label>
	<input id="nl" type="text" name="nl"><br>
	
	<label for="pl">Preço do livro:</label>
	<input id="pl" type="number" step="any" name="pl"><br>
	
	<label for="cl">Categoria do livro:</label>
	<select id="cl" name="cl">
			<option value="Livros didáticos">Livros didáticos</option>
			<option value="Livros em português">Livros em português</option>
			<option value="Livros em outros idiomas">Livros em outros idiomas</option>
			<option value="Livros infatojuvenis">Livros infatojuvenis</option>
			<option value="HQs">HQs</option>
		</select>
	<br>
	<label for="des">descrição:</label>
	<input id="des" type="text" name="des">
	<br>
<label for="img">Escolha a imagem do produto:</label>
	<input id="img" type="file" name="img" placeholder="x.jpg/png">
	<br>
	<input type="submit" value="cadastrar o livro no banco">
	</form>
	
	<a href="listarProduto.php">Listar produtos</a>