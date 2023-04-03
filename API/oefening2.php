<?php

//Welke url willen we lezen?
$url = "api.openweathermap.org/data/2.5/weather?q=Rotterdam&appid=98e7c344f6752aaa0a46c4fd0c93d1e2";

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

// Lees de temperatuur uit
$temp = $data->{'main'}->{'temp'} - 273.15;
echo "Temperatuur: " . $temp . "<br>";

// Lees de description uit (gebruik block haakjes met cijfers)
$weer = $data->{'weather'}[0]->{'description'};
echo "Weer: " . $weer;

echo "<pre>";
print_r($data);
echo "</pre>";