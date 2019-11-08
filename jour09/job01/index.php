<?php

	$connect = mysqli_connect("localhost","root","","jour08");
	
	$request = "SELECT * FROM etudiants;";
	
	$query = mysqli_query($connect,$request);
	
	$result = mysqli_fetch_all($query);
	
	$i = 0;
	
	echo "<table> <thead>";
				
	$requestName = "DESCRIBE etudiants;";
	$queryName = mysqli_query($connect, $requestName);
	$resultName = mysqli_fetch_all($queryName);
	
	
	$k = 0;
	while($k < count($resultName))
	{
		echo "<th>".$resultName[$k][0]."</th>";
		$k ++;
	}
	
	echo "</thead> <tbody>";

	while($i < count($result))
	{
		echo "<tr>";
		$j = 0;
		while($j < count($result[$i]))
		{
			echo "<td>".$result[$i][$j]."</td>";
			$j++;
		}
		echo "</tr>";
		$i++;
	}
				
	echo "</tbody> </table>";

?>