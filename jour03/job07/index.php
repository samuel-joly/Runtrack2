<?php

	$str = "Certaines choses changent, et d'autres ne changeront jamais.";
	
	$count = 1;
	$switch = 2;
	
	$output = "";
	
	while($count<=59)
	{
		if ($switch==60)
		{
			$output = $output.$str[0];
			break;
		}
		
		
		$output = $output.$str[$switch].$str[$count];
		
		$count+=2;
		$switch+=2;
	}
	
	echo $str."<br/>";
	echo $output;

?>