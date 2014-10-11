<?php 
 function changekeyuc(){
 	$array = array('ABC' =>3 ,'Hello'=>'hola','ceRo'=>0,'null'=>'NULL',4=>4);
 	foreach (array_keys($array) as $k) {
 		echo ($k);
 		echo "\t";
 		echo strtoupper($k);
 		echo "<BR/>";
 	}
 }
 changekeyuc();
?>