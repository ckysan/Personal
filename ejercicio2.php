<?php 
	$num=array(1,2,3,4,5,6,7,8,9,10);
	print_r($num);
	echo "</br>";
	function insonarray($ar,$position,$value){
		array_splice($ar, $position, 0, $value);
		print_r($ar);	
	}
	insonarray($num,5,40);
	$totalnodes=count($num);
	$dll = new SplDoublyLinkedList();
	for($i=0;$i<$totalnodes;$i++){
		$dll->push($num[$i]);
	}
	echo "</br>";
	print_r($dll);
	echo "</br>";
	$dll->add(6,88);
	print_r($dll);
?>