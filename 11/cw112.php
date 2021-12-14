<?php
define("n", "<br>");

function sum(float $a, float $b): float
{
	return $a + $b;
}

$l1 = rand(1, 10);
$l2 = rand(1, 10);

echo "Wylosowano $l1 i $l2" . n;
echo "suma: " . sum($l1, $l2) . n;
