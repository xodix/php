<?php

$big_numbers = [];

for ($i = 1000; $i > 0 && count($big_numbers) < 10; $i--) {
	if ($i % 2 !== 0 && $i % 3 !== 0 && $i % 5 !== 0) {
		array_push($big_numbers, $i);
	}
}

echo join(", ", $big_numbers);
