<!DOCTYPE html>
<html>
<head>
 <title>Livraria virtual</title>
 <meta charset="utf-8">
</head>
<body>
<h1>Comprar</h1>



 <form method="post" action="comprar.php">
	<select name="quant">
			<option selected="" value="">Selecione a quantidade do produto</option>
			<option value="um">1</option>
			<option value="dois">2</option>
			<option value="tres">3</option>
			<option value="quatro">4</option>
			<option value="cinco">5</option>
		</select><br><br>
	<select name="pagamento">
			<option selected="" value="">Selecione o tipo de pagamento(apenas cartão)</option>
			<option value="visa">VISA</option>
			<option value="mc">MasterCard</option>
			<option value="itau">Itaú</option>
			<option value="bdb">Banco do Brasil</option>
			<option value="brad">Bradesco</option>
		</select><br><br>
	<label for="hah">Número do cartão:</label>

<input id="hah" type="text" name="cod" size="20" maxlength="19" data-mask="0000.0000.0000.0000" placeholder="Ex.: 0000.0000.0000.0000"><Br><br>



<label for="ain">CEP:</label>
	<input name="cep" type="text" class="form-control cep-mask" data-mask="00000.000" placeholder="Ex.: 00000000"><br><br>
	Estado:
	<select name="estados">
	<option selected="" value="">Selecione o seu estado</option>
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espírito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MT">Mato Grosso</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
</select><br><br>
<label for="haeh">Cidade:</label>
	<input id="haeh" type="Text" name="Cidade"><br><br>
	<label for="end">Endereço de entrega:</label>
	<input id="end" type="Text" name="Rua" placeholder="Rua">
	<input id="end" type="Text" name="bairro" placeholder="Bairro">
	<input id="end" type="number" name="numero" placeholder="Nº da casa"><br><br>
		<input type="submit" value="Processar compra"><BR>
</body>
</html>

<?php
		if(!empty($_POST)) {
		$quant=$_POST["quant"];
		$pagamento=$_POST["pagamento"];	
		$cod=$_POST["cod"];	
		$cep=$_POST["cep"];	
		$estados=$_POST["estados"];	
		$cidade=$_POST["Cidade"];		
		$rua=$_POST["Rua"];
		$bairro=$_POST["bairro"];
		$numero=$_POST["numero"];
	
		 $erro = false;

		if ((strlen($cod) == 0)or(strlen($cod)<>19)) {
		echo "Você deve inserir um número de cartão válido";echo"<br>";
		$erro = true;
		}
		
		if ((strlen($cep) == 0)or(strlen($cep)<>9)) {
		echo "Você deve inserir um número de CEP válido";echo"<br>";
		$erro = true;
		}
		
		if ((strlen($rua) == 0)or(strlen($bairro)==0)){
		echo "Você deve inserir um endereço válido";echo"<br>";
		$erro = true;
	}
			if(empty($quant)){
echo "Você deve informar a quantidade do produto";echo"<br>";
$erro = true;
}
if(empty($pagamento)){
echo "Você deve escolher uma forma de pagamento";echo"<br>";
$erro = true;
}
if(empty($estados)){
echo "Você deve informar o seu estado";echo"<br>";
$erro = true;
}

if ($erro==false){

		require "conexao.php";

		$comando = "INSERT INTO compra(quantidade,modo,cartao,cep,estado,cidade,rua,bairro,ncasa) values ('$quant','$pagamento','$cod','$cep','$estados','$cidade','$rua','$bairro','$numero')";

		$retorno = mysqli_query($cnx, $comando);

		if($retorno) {
			
		echo "compra a caminho!";
		header("refresh:2; url=iniciologado.php");
	} 	else {
		echo "Deu errado!";
}
}

		}
		
	?>
	<script src="jquery-3.3.1.min.js"></script>
<script src="jquery.mask.js"></script>