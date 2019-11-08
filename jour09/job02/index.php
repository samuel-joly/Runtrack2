<?php
	$connect = mysqli_connect("localhost","root","","jour08");
	
	$request = "SELECT nom,capacite FROM salles";
	
	$query = mysqli_query($connect, $request);
	
	$result = mysqli_fetch_all($query);
	
	
	$i = 0;
	
	echo "<table> <thead>";
				
	$requestName = "DESCRIBE salles;";
	$queryName = mysqli_query($connect, $requestName);
	$resultName = mysqli_fetch_all($queryName);	
	
	echo "<th>".$resultName[1][0]."</th>";
	echo "<th>".$resultName[3][0]."</th>";
	
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