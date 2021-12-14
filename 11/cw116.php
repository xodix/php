<?php

function ustawCzcionke(string $rozmiar, string $rodzaj, string $napis)
{
	echo "
		<div style=\"font-family: $rodzaj; font-size: $rozmiar\">
			$napis
		</div>
	";
}

ustawCzcionke(36, "Tahoma", "1345");
ustawCzcionke(8, "Times", "this is a string");
ustawCzcionke(60, "Courier", "Hell'o World!");
