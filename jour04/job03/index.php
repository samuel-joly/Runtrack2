<form action="index.php" method="post" style="display:flex;
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
	
	foreach($_POST as $args => $value)
	{
		echo $args." -> ".$value."<br/>";
	}
?>