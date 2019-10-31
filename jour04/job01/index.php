<form action="index.php" method="get" style="display:flex;
											flex-direction:column;
											width:200px;">
	<label for="Nom">Nom</label>
	<input type="text" name="Nom"/>
	
	<label for="Prenom">Prenom</label>
	<input type="text" name="Prenom"/>
	
	<label for="eMail">Mail</label>
	<input type="mail" name="eMail"/>
	
	<label for="Tel">Téléphone</label>
	<input type="tel" name="Tel"/>
	
	<input type="submit"/>
</form>


<?php

	//var_dump($_GET);
	$count = 0;
	foreach($_GET as $name => $value)
	{
		echo $name." -> ".$value."<br/>";
		$count++;
	}
	
	echo "Il y a ".$count." arguments";
?>