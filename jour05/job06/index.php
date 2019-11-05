<?php

	/*
	
		les “A” deviennent des “4”, les “B” des “8”,
		les “E” des “3”, les “G” des “6”, les “L” des “1”, les “S” des “5” et les “T” des
		“7”.
	
	*/
	
	function leetspeak($str)
	{
		$count = 0;
		while($count < strlen($str))
		{
			
			if ($str[$count] == "a" || $str[$count] == "A")
			{
				$str[$count] = "4";
			}
			else if ($str[$count] == "b" || $str[$count] == "B")
			{
				$str[$count] = "8";
			}			
			else if ($str[$count] == "e" || $str[$count] == "E")
			{
				$str[$count] = "3";
			}
			else if ($str[$count] == "g" || $str[$count] == "G")
			{
				$str[$count] = "6";
			}
			else if ($str[$count] == "l" || $str[$count] == "L")
			{
				$str[$count] = "1";
			}
			else if ($str[$count] == "s" || $str[$count] == "S")
			{
				$str[$count] = "5";
			}
			else if ($str[$count] == "t" || $str[$count] == "T")
			{
				$str[$count] = "7";
			}
			
			$count ++;
		}
		
		return $str;
	}
	
	
	echo leetspeak("JE PARLE EN LEET TOUS LES JOURS GARE A VOUS !");

?>