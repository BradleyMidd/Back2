<?php
include 'Includes/error.php';
/* Maak een functie aan met een parameter */
function nlDatum($date, $short)
{
    /* Maak een array waar je alle maanden in het nederlands plaats */
    $month = array(1 => "Januari", 2 => "Feburai", 3 =>"Maart", 4 =>"April", 5 => "Mei" ,  6 => "Juni", 7 => "Juli" , 8 => "Augustus" , 9 => "September" , 10 => "Oktober", 11 =>"November" , 12 => "December");
    /* Splits de date in drieën */
    $split = explode("-", $date);
    /* Split array 1 (dus het maand) is gelijk aan het maand array key */
    $split[1] = $month[$split[1]];

    //Als variable short een string heeft dan toont hij de datum inclusief de korte versie van het jaar
    if(is_string($short)) {
        $short = str_split($split[0]);
        $u = $split[2] . "-" . $split[1] . "-" . $split[0] . " '" . $short[2] . $short[3];
        return $u;
    }

    //Anders toont hij gewoon de normale datum
    else
    {

        $u = $split[2] . "-" . $split[1] . "-" . $split[0];
        return $u;

    }
}

echo "Datum + korte versie van het jaar: " . nlDatum('1974-5-14', '1974'); // Wordt omgezet naar 14 mei 1974 en 1974 wordt omgezet naar '74
