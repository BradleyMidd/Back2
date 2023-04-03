<?php
//Koppel de config.inc naar de lid nieuw verwerk pagina
require_once 'config.inc.php';

//Maak een variable aan genaamd id die gelijk is aan de get functie
$id = $_POST['id'];

//Maak een query aan dat een lid verwijderd die gelijk is aan de id van de post
$query = "DELETE FROM back2_leden WHERE id = $id";

//Voer de query uit
$result = mysqli_query($mysqli, $query);

//Als de query goed uitgevoerd is, dan is het verijderen gelukt
if($result)
{
    echo "<script>
            alert('Verwijderen van rij $id is gelukt');";
    echo "window.location.href = 'home.php'";
    echo	  "</script>";
}

//Anders geeft hij een melding dat het verwijderen mis ging
else
{
	echo "<script>
			alert('Verwijderen van rij $id is mislukt');
		  </script>";
	echo "<script>
			  window.history.back();
		  </script>";

}

?>