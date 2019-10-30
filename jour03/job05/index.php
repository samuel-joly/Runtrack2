<?php
	
	$str = "On nest pas le meilleur quand on le croit mais quand on le sait.";
	$dic = array("voyelles"=>array("a","e","i","o","u","y","A","E","I","O","U","Y"),
				 "consonnes"=>array("q","w","r","t","p","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m"));
				 
	$voyelles = 0;
	$consonnes = 0;
	
	$count=0;
	while($count<=63)
	{
		$subCount = 0;
		while($subCount<=11)
		{
			if($dic["voyelles"][$subCount]==$str[$count])
			{
				$voyelles ++;
			}
			
			$subCount++;
		}
		$subCount1 = 0;
		
		while($subCount1<=19)
		{
			if($dic["consonnes"][$subCount1] == $str[$count])
			{
				$consonnes++;
			}
			$subCount1++;
		}
		$count++;
	}
	
	
	echo "<table> 
			<thead>
				<th>Consonnes</th>
				<th>Voyelles</th>
			</thead>
			<tbody>
				<tr>
					<td>".$consonnes."</td>
					<td>".$voyelles."</td>
				</tr>
			</tbody>
	      </table>";

?>