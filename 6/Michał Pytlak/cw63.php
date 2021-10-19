<?php 
$X = 4;
$Y = 3;

$Z = 4;

switch ($Z) {
    case 1:
        echo "Suma X+Y". "= " .($X + $Y);
        
        break;
    case 2:
        echo "Różnica X-Y". "= " .($X - $Y);

        break;
    case 3:
        echo "Iloraz X/Y". "= " .($X / $Y);

        break;
    case 4:
        echo "Iloczyn X*X". "= " .($X * $Y);
        break;
    default:
        echo "Błąd"; }
?>