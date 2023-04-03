<?php
//Start de session
session_start();
//Regenerate session
session_regenerate_id();

//Als het variable bestaat en time min het veriable hoger is dan 10 seconden dan moet je de sessie vernietigen
if (isset($_SESSION['a']) && (time() - $_SESSION['a'] > 1800)) {
    session_unset();
    session_destroy();
}
$_SESSION['a'] = time(); // update de variable timestamp


//Als de gebruiker niet ingelogd is
if($_SESSION['Gebruikersnaam'] == true)
{
	echo "";
	//Stuur de gebruiker direct terug naar 'index.php'
	//header('location:index.php');
} else {
	header('Location: index.php');
}
?>