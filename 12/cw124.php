<?php
$arr1 = [];
for ($i = 0; $i < 5; $i++) {
	array_push($arr1, rand(0, 100));
}

$arr2 = [];
for ($i = 0; $i < 5; $i++) {
	array_push($arr2, rand(0, 100));
}

$arr_new = array_merge($arr1, $arr2);
echo join(", ", $arr_new) . "<br>" . "<br>";

echo array_sum($arr_new);
