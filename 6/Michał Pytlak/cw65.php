<?php
$T = "Bacon ipsum dolor amet frankfurter pork short ribs doner t-bone bacon pig spare ribs. Filet mignon ball tip pork chop, turkey meatball shoulder bresaola jowl pork loin prosciutto sirloin. Tenderloin doner picanha pork, spare ribs hamburger bresaola short loin biltong. Chicken andouille ham hock, jowl boudin cow hamburger.";
$P = 1

switch ($P) {    
    case 0:
        echo case 1 . "<br>" . case 2 . "<br>" . case 3;
        break;
    case 1:
        echo "Ilość słów w tekście";
        break;
    case 2:
        echo "Ilość znaków w tekście";
        break;
    case 3:
        echo "Pozycja od której rozpoczyna się słowo 'kielbasa' w tekście";
        echo "Nie ma takiego wyrazu w tekście";
        break;

    default:
        echo "Błąd"; }
?>