<?php

function kalkulator(string $rodzaj, float $a, float $b): float
{
	return match ($rodzaj) {
		"suma" => $a + $b,
		"różnica" => $a - $b,
		"iloczyn" => $a * $b,
		"iloraz"  => $a / $b,
	};
}

echo kalkulator("iloraz", 2, 5);
