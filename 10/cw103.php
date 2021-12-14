<?php
$arr = [100];

for ($i = 1; $i < 20; $i++) {
	$arr[$i] = $arr[$i - 1] + 5;
}

for ($i = 0; $i < count($arr); $i++) {
	if ($arr[$i] % 2 !== 0) {
		echo $arr[$i] . " ";
	}
}
