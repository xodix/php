<?php
$miesiac = 12;

switch ($miesiac) {
    case 1:
    case 2:
    case 3:  
        echo "Kwartał I";
        break;
    case 4:
    case 5:
    case 6:
        echo "Kwartał II";
        break;
    case 7:
    case 8:
    case 9:
        echo "Kwartał III";
        break;
    case 10:
    case 11:
    case 12:
        echo "Kwartał IV";
        break;
    default:
        echo "Błędny numer miesiąca"; }
?>