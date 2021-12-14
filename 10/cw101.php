<?php
define("n", "<br>");
// create random array
$arr = [];
for ($i = 0; $i < 10; $i++) {
	array_push($arr, rand(1, 20));
}

echo "ARRAY: " . join(", ", $arr) . n;

// find min and max of array
echo "MAX: " . max($arr) . n;
echo "MIN: " . min($arr) . n;

// count instances of 3 in array
$threes_in_arr = 0;
for ($i = 0; $i < count($arr); $i++) {
	if ($arr[$i] === 3) {
		$threes_in_arr++;
	}
}

echo "THREES: " . $threes_in_arr . n;

// sort elements in array
sort($arr);

echo "SORTED ARRAY: " . join(", ", $arr) . n;

// three lowest values in array
echo "LOWEST: ";
for ($i = 0; $i < 3; $i++) {
	echo $arr[$i] . " ";
}

echo n;

// square every element
for ($i = 0; $i < count($arr); $i++) {
	$arr[$i] = $arr[$i] * $arr[$i];
}

echo "SQUARED: " . join(", ", $arr) . n;

// count even and odd numbers in array
$even = 0;

for ($i = 0; $i < count($arr); $i++) {
	if ($arr[$i] % 2 === 0) {
		$even++;
	}
}

echo "PARZYSTE: " . $even . n;
echo "NIEPARZYSTE: " . count($arr) - $even . n;

// find elements divisible by 3
$div_3 = 0;
for ($i = 0; $i < count($arr); $i++) {
	if ($arr[$i] % 3 === 0) {
		$div_3++;
	}
}

echo "DIVISIBLE BY 3: " . $div_3;
