<form method="post" action="index.php">

	<label for="nombre">Nombre</label>
	<input type="text" name="nombre"/>
	
	<input type="submit"/>

</form>




<?php

	if ($_POST["nombre"] % 2 ==0)
	{
		echo $_POST["nombre"]." est pair.";
	}
	else
	{
		echo $_POST["nombre"]." est impair.";
	}
?>