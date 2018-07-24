<?php session_start();

unset($_SESSION["logado"]);
 session_destroy();
		header("location: inicio.php");
?>