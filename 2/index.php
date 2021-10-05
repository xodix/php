<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<?php
	$integer = 1;
	$float = 1.5;
	$string = "Ala";
	$boolean = true;
	$null = NULL;

	echo "<ol><li>";
	echo var_dump($integer);
	echo "</li>";
	echo "<li>";
	echo var_dump($float);
	echo "</li>";
	echo "<li>";
	echo var_dump($string);
	echo "</li>";
	echo "<li>";
	echo var_dump($boolean);
	echo "</li>";
	echo "<li>";
	echo var_dump($null);
	echo "</li>" . "</ol>";
	?>
</body>

</html>