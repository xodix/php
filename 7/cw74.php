<?php

$sum = 0;
$i = 3;

while ($i <= 10) {
	$kw = $i * $i;

	$sum += $kw;
	echo "$kw <br>";
	$i++;
}

echo "sum: $sum";
