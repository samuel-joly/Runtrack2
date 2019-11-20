<?php

	function occurence($str, $char)
	{
		$count = 0;
		$charCount = 0;
		while($count < strlen($str))
		{
			if ($str[$count] == $char)
			{
				$charCount ++;
			}
			$count ++;
		}
		
		return $charCount;
	}
	
	echo occurence("phraseee test", "e");

?>