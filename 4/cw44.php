<?php
$a = 1;
$b = 2;
$c = 3;

$x = [$a, $b, $c];
$arr = select_sort($x);
echo $arr[0] . " > " . $arr[1] . " > " . $arr[2];

// At this point implementing selection sort is easier.
function select_sort($arr)
{
	$n = count($arr);
	for ($j = 0; $j < $n; $j++) {
		$max = $j;
		for ($i = ($j + 1); $i < $n; $i++) {
			if ($arr[$i] > $arr[$max]) {
				$max = $i;
			}
		}
		$temp = $arr[$j];
		$arr[$j] = $arr[$max];
		$arr[$max] = $temp;
	}
	return $arr;
}
