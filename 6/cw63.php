<?php
$opcja = "-";
$X = 4;
$Y = 3;

switch ($opcja) {
	case '-':
		echo ($X - $Y);
		break;

	case '+':
		echo ($X + $Y);
		break;

	case '/':
		echo ($X / $Y);
		break;

	case '*':
		echo ($X * $Y);
		break;

	case '%':
		echo ($X % $Y);
		break;

	default:
		echo "Nieprawidłowa opcja!";
		break;
}
