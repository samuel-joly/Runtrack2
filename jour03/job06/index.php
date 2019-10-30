<?php

	$str = "Les choses que l'on possede finissent par nous posseder.";
	
	$count=strlen($str)-1;
	$output = "";
	
	while($count>=0)
	{
		$output = $output.$str[$count];
		$count--;
	}
	
	echo $str;
	echo "<br>/".$output;


?>