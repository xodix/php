<?php
define("nl", "<br>");

$X = 50;
$Y = 30;

echo $X + $Y . nl;
echo $X - $Y . nl;
echo $X * $Y . nl;
echo $X / $Y . nl;
echo $X % $Y . nl;

echo "Zmiana typu integer na typ string powoduje zatrzymanie wykonywania programu przez brak wsparcia działań algebraicznych na typie string i integer.";
