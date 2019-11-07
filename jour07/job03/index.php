<?php
	
	session_start();
	if(!$_SESSION["nameList"])
	{
		$_SESSION["nameList"] = array();
	}
	
	
	if(isset($_GET["submitBtn"]))
	{
		array_push($_SESSION["nameList"], $_GET["name"]);
		

		header("location:index.php");
		
	}
	
	$i = 0;
	while($i < count($_SESSION["nameList"]))
	{
		echo $_SESSION["nameList"][$i]."<br/>";
		
		$i ++;
	}


?>



<form action="" method="get">

	<input type="text" name="name"/>
	<input type="submit" name="submitBtn"/>

</form>