<?php

define("br", "<br>");

$tab1 = [7, 3, 1, 6, 9, 5, 4, 10, 2, 2];

echo $tab1[4] . br;

$tab1[6] = 12;

$tab2 = $tab1;

$tab3 = array();

for ($i = 0; $i < count($tab1) - 1; $i++) {
	$tab3[$i] = $tab1[$i] + $tab2[$i];
}

$tab2 = array_reverse($tab1);
