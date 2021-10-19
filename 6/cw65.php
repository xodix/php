<?php
define("lf", "<br>");
$P = 0;
$akapit = "Bacon ipsum dolor amet bacon salami spare ribs pastrami shank cow ball tip fatback shankle shoulder beef jowl rump. Tri-tip tongue venison turducken, tail strip steak rump boudin fatback turkey doner. Short loin meatloaf corned beef short ribs, beef pancetta jowl tri-tip kevin filet mignon. Pork tenderloin bacon, spare ribs biltong sirloin t-bone ham chislic tail.";

switch ($P) {
	case 1:
		echo str_word_count($akapit);
		break;
	case 2:
		echo strlen($akapit);
		break;
	case 3:
		$j = strpos($akapit, "kielbasa");
		if ($j) {
			echo "Nie ma takiego wyrazu w tekście";
		} else {
			echo $j;
		}
		break;
	case 0:
		echo str_word_count($akapit) . lf;
		echo strlen($akapit) . lf;
		$j = strpos($akapit, "kielbasa");
		if ($j) {
			echo $j . lf;
		} else {
			echo "Nie ma takiego wyrazu w tekście" . lf;
		}
		break;
}
