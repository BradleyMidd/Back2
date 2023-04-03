<?php
// Koppel de config.inc.php met de opdracht 3 verwerkpagina
require 'config.inc.php';

//Start de sessie
session_start();

if(isset($_POST['submit']))
{

//$_SESSION['koop'] = $artikel;

// Maak een query aan dat alles selecteer waar de artiekel nummer gelijk is aan de variable artikel
$query = "SELECT * FROM mphp6_meubels WHERE artikelnr = " . $_SESSION['koop'];
    echo $query;

// Voer de query uit
$result = mysqli_query($mysqli, $query);

    if(isset($_SESSION['koop']))
    {
        while ($row = mysqli_fetch_array($result)) {
            echo "<table>";
            echo "<td><img src='meubels/" . $row['naam'] . ".jpg' onclick='doeKlik(" . $row['artikelnr'] . ")'></td>";
            echo "</table>";
        }
    }

}
