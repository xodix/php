<?php

$tab = ["Kuba", "Weronika", "Wiktoria", "Michał", "Radek", "Patryk"];

$znaki = [];
$sum = 0;

for ($i = 0; $i < count($tab); $i++) {
	$n_znakow = strlen($tab[$i]);
	array_push($znaki, $n_znakow);

	$sum += $n_znakow;
}

echo "tablica znków: " . "[" . join(", ", $znaki) . "]" . "<br>";

echo "<br> suma znaków: $sum";
