<?php
// W nowej linii wypisz ile wynosi największa i najmniejsza wylosowana wartość. Podaj również informację jaki procent stanowią liczby większe od 50. Poniżej wypisz 10 razy wymieszaną(LINK)za każdym razem losowo zawartość tablicy. Wynik swojej pracy zapisz w pliku o nazwie cw123.php.W ćwiczeniu zastosuj zagnieżdżoną pętlę for która wypisuje indeksy wymieszanej tablicy.
define("n", "<br>");

$arr = [];
for ($i = 0; $i < 10; $i++) {
	array_push($arr, rand(0, 100));
}

echo join("&nbsp;&nbsp;&nbsp;", $arr);
echo n;
echo n;

echo "MIN: " . min($arr) . n;
echo "MAX: " . max($arr) . n;
echo n;

for ($i = 0; $i < 10; $i++) {
	shuffle($arr);
	echo join("&nbsp;&nbsp;&nbsp;", $arr);
	echo n;
}
