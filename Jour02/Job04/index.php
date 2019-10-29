<?php
	$var = 0;
	
	while($var<100)
	{
		if($var%5==0 && $var%3==0)
		{
			echo "FizzBuzz<br/>";	
		}
		else
		{
			if($var%3 == 0)
			{
				echo "Fizz<br/>";
			}
			else if($var%5==0)
			{
				echo "Buzz<br/>";
			}
			else
			{
				echo $var."<br/>";
			}
		}
		
		$var++;
	}


?>