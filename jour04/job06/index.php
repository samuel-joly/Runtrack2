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