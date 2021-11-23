<?php

$miesiace_zbierania = 12;
$oszczednosci = 0;
$rata = 0.08;
$odsetki_total = 0;

for ($i = 0; $i < $miesiace_zbierania; $i++) {
	$oszczednosci += 150;

	$odsetki_total += $oszczednosci * $rata;
	$oszczednosci *= $rata + 1;

	echo $oszczednosci . "<br>";
}

echo "oszczędności: " . $oszczednosci . ", odsetki: " . $odsetki_total;
