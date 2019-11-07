
<?php

	session_start();
	
	if(!isset($_SESSION["nbvisites"]))
	{
		$_SESSION["nbvisites"] = 1;
		echo $_SESSION["nbvisites"];
	}
	else 
	{
		$_SESSION["nbvisites"] += 1;
		echo $_SESSION["nbvisites"];
	}
	
	if(isset($_GET["resetBtn"]))
	{
		session_destroy();
		header("location:index.php");
	}
	
?>

<form method="get" action="">
	<input type="submit" value="Reset" name="resetBtn"/>
</form>
