<?php
define("n", "<br>");

function display_squared(int $start, int $stop): void
{
	for ($i = $start; $i <= $stop; $i++) {
		echo ($i * $i) . n;
	}
}

display_squared(0, 5);

function displa_squared($start, $stop)
{
	for ($i = $start; $i <= $stop; $i++) {
		echo ($i * $i) . "<br>";
	}
}
