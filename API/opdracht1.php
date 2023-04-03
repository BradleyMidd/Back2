<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: #0f6674">

</body>
</html>

<?php

//Welke url willen we lezen?
$url = "api.openweathermap.org/data/2.5/forecast?q=Rotterdam,nl&lang=nl&appid=98e7c344f6752aaa0a46c4fd0c93d1e2";

//Initialiseer een curl handle
$ch = curl_init();

// Stel de opties in
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADERS, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Voer de handle uit
$jsondata = curl_exec($ch);

//Zet de json data om naar een 'php-array'
$data = json_decode($jsondata);

// Sluit de curl handle
curl_close($ch);

// Lees de datum ban vandaag uit
$today = $data->{'list'}[0]->{'dt'};

//WEER VAN VADAAG
echo "<h1>Het weer van vandaag: ". gmdate("d M Y", $today) ."</h1>";
//Lees de naam van de stad uit
$stad = $data->{'city'}->{'name'};
echo "Stad: " . $stad . "<br>";

//Lees de naam van het land uit
$land = $data->{'city'}->{'country'};
echo "Land; " . $land . "<br>";

//Lees de lat en lon uit
$lat = $data->{'city'}->{'coord'}->{'lat'};
echo "Latitude; " . $lat . "<br>";

$lon = $data->{'city'}->{'coord'}->{'lon'};
echo "Longitude; " . $lon . "<br>";

// Lees de temperatuur uit
$temp = $data->{'list'}[0]->{'main'}->{'temp'} - 273.15;
echo "Temperatuur: " . $temp . "<br>";

// Lees de zonsopgang en zonsondergang uit
$sr = $data->{'city'}->{'sunrise'};
echo "Zonsopgang: " . gmdate("H:i", $sr) . "<br>";

$ss = $data->{'city'}->{'sunset'};
echo "Zonsondergang: " . gmdate("H:i", $ss). "<br>";

// Lees de windsnelheid en windrichting uit
$ws = $data->{'list'}[0]->{'wind'}->{'speed'};
echo "Windsnelheid: " . $ws . "km<br>";

$wr = $data->{'list'}[0]->{'wind'}->{'deg'};
echo "Windrichting: " . $wr . "<br>";

// Lees de description uit (gebruik block haakjes met cijfers)
$icon = $data->{'list'}[0]->{'weather'}[0]->{'icon'};
echo "Weer: <img src='http://openweathermap.org/img/wn/" . $icon .".png' alt='". $icon ."'><br>";

echo "<h1>De Komende 3 dagen</h1>";
 /* Maak een for loop waarin je de komende 3 dagen uitleest */
for($i = 5; $i < 27; $i+= 9)
{
    $days = $data->{'list'}[$i]->{'dt'};
    $temps = $data->{'list'}[$i]->{'main'}->{'temp'} - 273.15;
    $ws2 = $data->{'list'}[$i]->{'wind'}->{'speed'};
    $wr2 = $data->{'list'}[$i]->{'wind'}->{'deg'};
    $icons = $data->{'list'}[$i]->{'weather'}[0]->{'icon'};

    echo "Datum: " . gmdate("d M Y", $days) . "<br> Tempratuur: " . $temps . "km<br> Windsnelheid: " . $ws2 . "<br> Windrichting: " . $wr2 . "<br> Weer: <img src='http://openweathermap.org/img/wn/" . $icons .".png' alt='weer'><br><br>";


}