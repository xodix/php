<?php

$tab = ["Kuba", "Weronika", "Wiktoria", "Michał", "Radek", "Patryk"];

$znaki = [];

for ($i = 0; $i < count($tab); $i++) {
	$n_znakow = strlen($tab[$i]);

	echo $tab[$i] . " " . $n_znakow . "<br>";
}
