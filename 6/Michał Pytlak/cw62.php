<?php
$punkty = 17;

switch ($punkty) {
    case 1:
    case 2:
    case 3:  
    case 4:
    case 5:
        echo "Ocena niedostateczna";
        break;
    case 6:
    case 7:
    case 8:
    case 9:
        echo "Ocena niedostateczna";
        break;
    case 10:
    case 11:
    case 12:
        echo "Ocena dostateczna";
        break;
    case 14:
    case 15:
        echo "Ocena dobra";
        break;
    case 16:
        echo "Ocena bardzo dobra";
        break;
    default:
        echo "Błędna liczba punktów"; }
?>