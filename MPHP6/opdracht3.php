<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        table,td
        {
            border: 2px solid black;
        }

    </style>
</head>
<body>

<div id="div"></div>

<script src="opdracht3.js"></script>

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
    echo "<td><img src='meubels/" . $row['naam'] . ".jpg' onclick='doeKlik(". $row['artikelnr'].")'></td>";
    echo "</table>";

}
?>


</body>
</html>