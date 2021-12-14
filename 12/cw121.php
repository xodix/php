<?php

define('n', "<br>");

$sum = 0;
$losowano = 0;

while ($sum != 20) {
	$losowano += 1;
	$sum = 0;

	for ($i = 0; $i < 5; $i++) {
		$r = rand(2, 9);
		echo $r . " ";

		$sum += $r;
	}

	echo "SUMA=$sum" . n;
}

echo "losowano: $losowano raz(y)";
