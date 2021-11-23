<?php

$tab = [7, 3, 1, 6, 9, 5, 4, 10, 2, 2];

for ($i = 0; $i < count($tab); $i++) {
	if ($tab[$i] % 2 == 0) {
		echo $tab[$i] . " ";
	}
}
