<?php
// Koppel de config.inc.php met de opracht 3 verwerkpagina
require 'config.inc.php';

// Maak een variable aan waar je de url van 'art' pak
$artikel = $_GET['art'];

// Maak een query aan dat alles selecteer waar de artiekel nummer gelijk is aan de variable artikel
$query = "SELECT * FROM mphp6_meubels WHERE artikelnr = '$artikel'";

// Voer de query uit
$result = mysqli_query($mysqli, $query);

// Als de query meer dan 0 rijen bevat dan voer de verwerking uit
if (mysqli_num_rows($result) > 0) {
    // Pak de informatie uit de database door middel van een fetch array
    while ($row = mysqli_fetch_array($result)) {
        echo "Artikelnummer: " . $row['artikelnr'] . "<br>";
        echo "Naam: " . $row['naam'] . "<br>";
        echo "Type: " . $row['type'] . "<br>";
        echo "Omschrijving: " . $row['omschrijving'] . "<br>";
        echo "Prijs: €" . $row['prijs'];
    }
}
?>