<?php
session_Start();
?>

<!DOCTYPE html>



<html>


<head>



</head>

<body>



</form>

<?php
session_Start();
if(isset($_SESSION["carrinho"])){
	array_push($_SESSION["carrinho"],$_GET["id"]);
	$_SESSION["quantidade"]= count($_SESSION["carrinho"]);
}else{

$_SESSION["carrinho"]= [];


}


header("location:carrinho.php");






?>





</body>




</html>