<form method="post" action="index.php">

	<label for="username">Username</label>
	<input type="text" name="username"/>

	<label for="password"> Password</label>
	<input type="password" name="password"/>
	
	<input type="submit"/>

</form>





<?php

	if($_POST["username"]=="John" && $_POST["password"]=="Rambo")
	{
		echo "C'est pas ma guerre";
	}
	else
	{
		echo "Votre pire cauchemard";
	}

?>