#!/usr/bin/php
<?php
while (1)
{
	echo "Enter a number: ";
	$num = trim(fgets(STDIN));
	if(feof(STDIN))
	{
		echo "^D\n";
		return (0);
	}
	if (is_numeric($num))
	{
		if ($num[strlen($num) - 1] % 2)
			echo "The number $num is odd\n";
		else
			echo "The number $num is even\n";
	}
	else
		echo "'$num' is not a number\n";
}
?>
