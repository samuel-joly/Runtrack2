<?php
	$var=0;
	
	while($var<1000)
	{
		$test=2;
		while($test<=$var)
		{
			if($var%$test==0)
			{
				break;
			}
			
			if($test == $var-1)
			{
				echo $var."<br/>";
			}
			$test++;
			
		}
		
		$var++;
		
	}

?>