<?php
$h = date("h"); // pobranie aktualnej godziny (0 - 23)
if ($h > 2 && $h < 20) {
	echo "Dzień dobry!";
} else {
	echo "Dobry wieczór!";
}
