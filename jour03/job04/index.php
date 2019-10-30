<?php
	
	$str="Dans l'espace, personne ne vous entend crier.";
	
	$count=0;
	
	while($count<=44)
	{
		echo "<b>".$str[$count]."</b> est le <b>".$count."</b> caractère<br/>";
		$count++;
	}
	
	echo "<br/><b>Il y a ".$count." caractères au total.</b>";


?>