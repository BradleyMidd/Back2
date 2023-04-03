<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        td
        {
            border: 2px solid black;
            margin: 0 auto;
            width: 5%;
        }

        td:nth-child(2)
        {
            width: 30%;
            word-wrap: break-word;
        }

    </style>
</head>
<body>

<div id="div"></div>
<script src="opdracht4.js"></script>


<?php
// Koppel de config.inc.php met de opracht 3 pagina
require 'config.inc.php';


// Maak een query aan dat alles selecteert van de mphp6_meubels tabel
$query = "SELECT * FROM mphp6_meubels";

// Voer de query uit
$result = mysqli_query($mysqli, $query);

// Pak de naam en artikel nummer van de database, zodat je de foto's en de artikelnummer maar 1x hoef uit te voeren in een loop
while ($row = mysqli_fetch_array($result))
{

    echo "<table>";
    echo "<td><img src='meubels/" . $row['naam'] . ".jpg'></td>";
    echo "<td>". $row['omschrijving'] . "</td>";
    echo "<td><button name='koop' onclick='doeKlik(" . $row['artikelnr'] . ")'>Koop</button></td>";
    echo "</table>";

}

echo "<form action='opdracht4_kassa.php' method='post'>";
echo "<input type='submit' name='submit' value='afrekenen'>";
echo "</form>";
?>


</body>
</html>
