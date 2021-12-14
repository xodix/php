<?php
define("n", "<br>");

$arr1 = [0, 1, 1];
for ($i = 3; $i < 47; $i++) {
	$arr1[$i] = $arr1[$i - 1] + $arr1[$i - 2];
}

echo "FIBONACCI SEQUENCE: " . n;
echo join(", ", $arr1) . n . n . n;

$arr2 = [1];
for ($i = 1; $i < 50; $i++) {
	$arr2[$i] = 2 * $arr2[$i - 1];
}

echo "POWERS OF 2: " . n;
echo join(", ", $arr2) . n . n . n;

$arr3 = [];
for ($i = 0; $i < 50; $i++) {
	$arr3[$i] = 3 * ($i + 1);
}

echo "THREES: ";
echo join(", ", $arr3);
