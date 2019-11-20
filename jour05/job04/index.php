<?php

	function calcule($number1, $operator, $number2)
	{
		if($operator=="*")
		{
			return $number1 * $number2;
		}
		else if ($operator == "/")
		{
			return $number1 / $number2;
		}
		else if ($operator == "-")
		{
			return $number1 - $number2;
		}
		else if ($operator == "+")
		{
			return $number1 + $number2;
		}
		else if ($operator == "%")
		{
			return $number1 % $number2;
		}
		else
		{
			echo "Valeure non acceptée";
		}
	}
	
	echo calcule(1,"-",1);

?>