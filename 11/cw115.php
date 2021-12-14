<?php
define("n", "<br>");



function display_a_ending_words(array $words): void
{
	foreach ($words as $value) {
		if (str_ends_with($value, "a")) {
			echo $value . n;
		};
	}
}

$x = array("Janek", "Zosia", "Aneta", "Marian", "Kinga", "Waldek", "Marysia", "Andrzej", "Mirek", "Anna");

display_a_ending_words($x);
