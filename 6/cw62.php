<?php
$punkty = 12;
switch (true) {
	case ($punkty > 0 and $punkty < 6):
		echo "ocena niedostateczna";
		break;

	case ($punkty < 10):
		echo "ocena dopuszczająca";
		break;

	case ($punkty < 13):
		echo "ocena dostateczna";
		break;

	case ($punkty < 16):
		echo "ocena dobra";
		break;

	case ($punkty == 16):
		echo "ocena dobra";
		break;

	default:
		echo "Błędna liczba punktów";
		break;
}
