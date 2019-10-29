<?php

$int = 10;
$string = 'Text';
$char = 'A';
$float = 2.45;
$bool = true;

echo '<table>
		<thead>
			<th>Type</th>
			<th>Nom</th>
			<th>Valeur</th>
		</thead> 
		
		<tbody>
			<tr>
				<td>Int</td>
				<td>$int</td>
				<td>'.$int.'</td>
			</tr>
			
			<tr>
				<td>String</td>
				<td>$string</td>
				<td>'.$string.'</td>
			</tr>

			<tr>
				<td>Char</td>
				<td>$char</td>
				<td>'.$char.'</td>
			</tr>
			
			<tr>
				<td>Float</td>
				<td>$float</td>
				<td>'.$float.'</td>
			</tr>
			
			<tr>
				<td>Boolean</td>
				<td>$bool</td>
				<td>'.$bool.'</td>
			</tr>
		</tbody>
	</table>';

?>