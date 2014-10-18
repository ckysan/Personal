<?php 
	echo "Funcion";
	echo "</br>";
	echo date("l d \of F Y");
	echo "</br>";
	echo "Objeto";
	echo "</br>";
	$date = new DateTime('NOW');		
	echo $date->format('l d \of F Y');
?>