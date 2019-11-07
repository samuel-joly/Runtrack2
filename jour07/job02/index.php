 <?php
	
	if(!isset($_COOKIE["nbvisites"]))
	{
		setcookie("nbvisites", 0, 0);
		$nbvisites = $_COOKIE["nbvisites"];
	}
	else
	{
		$nbvisites = $_COOKIE["nbvisites"];
		$nbvisites ++;
		setcookie("nbvisites", $nbvisites, 0);
		echo $_COOKIE["nbvisites"];
	}
	
	if(isset($_GET["resetBtn"]))
	{
		setcookie("nbvisites",0, 0);
		header("location:index.php");
	}
	
?>
 
 <form action="" method="get">
	<input type="submit" value="Reset" name="resetBtn"/>
 </form>