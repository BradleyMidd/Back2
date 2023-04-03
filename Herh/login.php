<?php
session_start();

require 'config.inc.php';

$Gebruikersnaam = $_POST['user'];
$Wachtwoord = sha1($_POST['pass']);

$query = "SELECT * FROM User WHERE Gebruikersnaam = '$Gebruikersnaam' AND Wachtwoord = '$Wachtwoord'";

$resultaat = mysqli_query($mysqli, $query);

if(mysqli_num_rows($resultaat) == 1)
{
	//Haal het user uit het resultaat
	$user = mysqli_fetch_array($resultaat);
	//Zet de gebruikersnaam in verschillende sessions
	$_SESSION['Gebruikersnaam'] = $user['Gebruikersnaam'];
	$_SESSION['Level'] = $user['Level'];
	
  header("Location:home.php");
}

else
{
	header("Location:index.php");
}
?>