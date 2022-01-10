<?php

// Dzielimy z resztą liczbę a przez liczbę b
// jeżeli reszta jest równa 0, to NWD(a,b)=b
// jeżeli reszta jest różna od 0, to przypisujemy liczbie a wartość liczby b, liczbie b wartość otrzymanej reszty, a następnie wykonujemy ponownie punkt 1.

function NWD(int $x, int $y): void
{
	$n = "<br>";
	$reszta = $x % $y;


	while ($reszta >= 0) {
		echo "Reszta z dzielenia liczby $x przez $y wynosi $reszta $n";

		echo "a wynosi: $x $n";
		echo "b wynosi: $y $n";

		if ($reszta == 0) {
			break;
		}

		$x = $y;
		$y = $reszta;

		if ($y != 0) {
			$reszta = $x % $y;
		} else {
			$reszta = 0;
		}
	}

	echo "NWD wynosi: $y";
}


NWD(282, 78);
