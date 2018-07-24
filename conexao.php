<?php

$cnx = mysqli_connect("localhost", "root", "", "lojamaiji");
	return $cnx;
/* check connection */
if (!$cnx) {
    echo("Deu errado " . mysqli_connect_error());
}



?>