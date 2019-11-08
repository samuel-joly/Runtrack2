<?php
	$connect = mysqli_connect("localhost","root","","jour08");
	
	$request = "SELECT etages.nom, salles.nom FROM salles INNER JOIN etages ON salles.id_etage = etages.numero+1;";
	
	$query = mysqli_query($connect, $request);
	
	$result = mysqli_fetch_all($query);
	
	
	echo "<table> <thead>";
	
	echo "<th>Etage</th><th>Nom</th>";
	
	echo "</thead> <tbody>";

	$i = 0;
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