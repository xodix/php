<!-- 12.2. Wypisz na ekranie w postaci tabeli wartości kątów oraz funkcji sin(LINK) dla kątów 0, 15, 30, 45, 60,75, 90, ... , 360 podanych w stopniach. Ustal szerokość tabeli na 500 pikseli i ją wyśrodkuj. Podziel kolumny (szerokość) w proporcji 30/70 procent. Wynik swojej pracy zapisz w pliku o nazwie cw122.php. -->
<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title>sin</title>
	<style>
		td:nth-child(1) {
			width: 30%;
		}

		table {
			width: 500px;
			margin: auto;
		}
	</style>
</head>

<body>
	<table>
		<?php
		for ($i = 0; $i <= 360; $i += 15) {
			echo "<tr><td>$i</td><td>" . sin($i) . "</td></tr>";
		}
		?>
	</table>

</body>

</html>