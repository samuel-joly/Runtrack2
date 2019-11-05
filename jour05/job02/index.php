<?php

	function bonjour($jour)
	{
		if($jour == true)
		{
			echo "Bonjour";
		}
		else if ($jour == false)
		{
			echo "Bonsoir";
		}
		else
		{
			echo "Entrez un booleen s.v.p.";
		}
	}
	
	bonjour(false);

?>