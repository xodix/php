<?php
$wiek = 200;

if ($wiek < 18) {
	echo "Jeszcze nie możesz głosować";
} else if ($wiek <= 21) {
	echo "Możesz głosować i kandydować do Sejmu";
} else if ($wiek <= 30) {
	echo "Możesz głosować i kandydować do Sejmu i Senatu";
} else if ($wiek <= 35) {
	echo "Możesz głosować i kandydować do Sejmu i Senatu";
} else {
	echo "Możesz głosować, kandydować do Sejmu i Senatu oraz na Prezydenta";
}
