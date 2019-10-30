<?php

$myArray = array(200, 204, 173, 98, 171, 404, 459);
$count = 0;
while($count<=6)
{
	if($myArray[$count]%2==0)
	{
		echo $myArray[$count]." est Paire.";
	}
	else
	{
		echo $myArray[$count]." est Impaire.";
	}
	echo "<br/>";
	$count ++;
}
?>