<?php

	$hauteur   = $_POST["hauteur"];
	$largeur   = $_POST["largeur"];
	$air = $largeur;
	
	$count=0;
	
	while($count<=$hauteur*2)
	{
		if($count == $hauteur*2)
		{
			$airCount = 0;
			while($airCount<$hauteur)
			{
				echo "&nbsp;";
				$airCount++;
			}
			
			$wall=0;
			echo "|";
			while($wall<$largeur)
			{
				echo "_";
				$wall++;
			}
			echo "|";
		}
		
		else if($count>=$hauteur)
		{
			$airCount = 0;
			while($airCount<$hauteur)
			{
				echo "&nbsp;";
				$airCount++;
			}
			
			$wall = 0;
			echo "|";
			while($wall<=($largeur*2)-1)
			{
				echo "&nbsp;";
				$wall ++;
			}
			echo "|";
		}
		
		else
		{	
			$airCount = 0;
			while($airCount<$air-$count)
			{
				echo "&nbsp;";
				$airCount++;
			}

			echo "/";
			if($count != 0)
			{
				$wall = 0;
				while($wall<=($count*2))
				{
					echo "_";
					$wall++;
				}				
			}
			echo "\\";
		}
		
		echo "<br/>";
		$count++;
	}


?>