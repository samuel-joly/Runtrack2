<?php
	$str="I'm sorry Dave I'm afraid I can't do that.";
	
	$voyelle=array("a","e","i","o","u","y","A","E","I","O","U","Y");
	
	$count=0;
	
	while($count<=41)
	{
		$subCount=0;
		while ($subCount<=11)
		{
			if($voyelle[$subCount] == $str[$count])
			{
				echo $str[$count];
			}
			$subCount++;
		}
		$count++;
	}


?>