<?php

$tab = ["Kuba", "Weronika", "Wiktoria", "Michał", "Radek", "Patryk"];

for ($i = 0; $i < count($tab); $i++) {
	if ($tab[$i][strlen($tab[$i]) - 1] != 'a') {
		echo $tab[$i] . "<br>";
	}
}
