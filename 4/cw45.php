<?php
$points = 25;

echo "ocena ";
$points = $points;
if ($points <= 29 && $points > 0) {
	echo "niedostateczna";
} else if ($points <= 59) {
	echo "dopuszczająca";
} else if ($points <= 74) {
	echo "dostateczna";
} else if ($points <= 89) {
	echo "dobra";
} else if ($points <= 99) {
	echo "bardzo dobra";
} else {
	echo "celująca";
}
