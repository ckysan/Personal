<?php 
	$num=array(array('id' => 2135,'first_name' => 'John','last_name' => 'Doe',), 
		array('id' => 3245,'first_name' => 'Sally','last_name' => 'Smith',),
		array('id' => 5342,'first_name' => 'Jane','last_name' => 'Jones',),
		array('id' => 5623,'first_name' => 'Peter','last_name' => 'Doe',));
	print_r($num);
	for($i=0;$i<count($num);$i++){
	    if (array_key_exists('first_name', $num[$i])){
	        $ln[]=$num[$i]['first_name'];
	    }
	}
	echo "</br>";
	print_r($ln);
	$nombres = array_column($num,'first_name');
	echo "</br>";
	print_r($nombres);
?>