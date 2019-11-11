<?php
	
	$mark = 1; // Will define if the name is already inside the cookie list
	foreach($_COOKIE as $key => $value)
	{
		if(isset($_GET["prenom"]))
		{
			if($value == $_GET["prenom"])
			{
				echo "Bonjour ".$_GET["prenom"];
				$mark = false;
			}
		}		
	}
	
	if ($mark)
	{
		echo
		   '<form action="" method="get">
				<input type="text" name="prenom"/>
				<input type="submit" name="submitBtn" value="Connexion"/>
			</form>';
		
	}
	else if (!$mark)
	{
		echo '<form action="" method="get">
				<input type="submit" name="decoBtn" value="Deconnexion"/>
			</form>';
			
		if (isset($_GET["decoBtn"]))
		{
			header("location:index.php");
		}
	}

	if (isset($_GET["prenom"]))
	{
		if (!isset($_COOKIE[$_GET["prenom"]]))
		{
			setcookie($_GET["prenom"],$_GET["prenom"],0,0);
			header("location:index.php");
		}
	}

?>


