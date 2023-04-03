<?php
//Start de sessions
session_start();
//Verwijder alle sessions
session_destroy();
//Stuur de gebruiker naar de inlogpagina
header("location:index.php");
?>
