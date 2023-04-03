<?php
function isEven($getal)
{
    //Als getal modulus van 2 gelijk is aan 0 dan is het gelijk
    if($getal % 2 == 0)
    {

        echo "Even <br>";

    }

    //Anders is het oneven
    else
    {

        echo "Oneven";

    }

}

echo isEven(10); // Even
echo isEven(7); // Oneven