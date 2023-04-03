<?php
include 'Includes/error.php';

/* Maak een functie aan genaamd berekenKamer en zet 2 verplichte variables en 1 optionele variable */
function berekenKamer($lengte, $breedte, $hoogte = 0)
{
    /* Als er een lengte en breedte een nummer bevat dan return hij de lengte keer breedte */
    if(is_numeric($lengte) && is_numeric($breedte))
    {

        return $lengte * $breedte;

    }
    /* Anders als er een lengte, breedte en hoogte een nummer bevat dan return hij de lengte keer breedte keer hoogte */
    elseif (is_numeric($lengte) && is_numeric($breedte) && is_numeric($hoogte))
    {

        return $lengte * $breedte * $hoogte;

    }
    /* Anders return je de string foute berekening */
    else
    {

        return "Foute berekening";

    }

}

echo "Lengte x breedte = " . berekenKamer(10, 20) . "<br>"; /* Resultaat is 200 */
echo "Lengte x breedte x hoogte = " . berekenKamer(20, 40, 60) . "<br>"; /* Resultaat is 800 */
echo "Lengte x breedte = " . berekenKamer("a", "b"); /* Geeft Foute berekening aan */