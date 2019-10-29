<?php

	$var=0;
	
	while($var<=100)
	{
		if(0<$var && $var<20){
			echo "<i>".$var."</i><br/>";
		}
		else if(25<$var && $var<50)
		{

			if($var==42)
			{
				echo "La Plateforme_<br/>";
			}
			else
			{
				echo "<u>".$var."</u><br/>";
			}
		}
		
		else
		{
			echo $var."<br/>";
		}
		
		$var++;
	}

?>



||