<?php
define("n", "<br>");

/**
 * @return array(a, b, c, d)
 * 
 * a = number of 1PLN coins
 * 
 * b = number of 2PLN coins
 * 
 * c = number of 5PLN coins
 * 
 * d = number of 10PLN bills
 */
function reszta(): array
{
	$result =  [0, 0, 0, 0];

	$num = rand(10, 100);

	echo "num = $num" . n;

	$sum = $num;


	while ($sum > 0) {
		switch (true) {
			case $sum >= 10:
				$result[3] += 1;
				$sum -= 10;
				break;
			case $sum >= 5:
				$result[2] += 1;
				$sum -= 5;
				break;
			case $sum >= 2:
				$result[1] += 1;
				$sum -= 2;
				break;
			case $sum >= 1:
				$result[0] += 1;
				$sum -= 1;
				break;
		}
	}

	return $result;
}


$r = reszta();

echo "10 PLN: " .  $r[3] . n;
echo "5 PLN: " .  $r[2] . n;
echo "2 PLN: " .  $r[1] . n;
echo "1 PLN: " .  $r[0] . n;
