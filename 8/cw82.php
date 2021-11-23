<?php

$x = 10;
$y = 5;
$z = 1;

$suma = $x;

for ($i = 1; $i < $y; $i++) {
	$suma += $x - $z * $i;
}

echo $suma;
