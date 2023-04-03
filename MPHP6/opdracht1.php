<?php
//Start de sessie
session_start();

//Als de sessie teller bestaat dan verhoog je het bij 1
if(isset($_SESSION['teller']))
{
    $_SESSION['teller']++;
}

//Anders begin je de teller bij 1
else
{
    $_SESSION['teller'] = 1;
}

//Print de teller in de html pagina
echo $_SESSION['teller'];
?>