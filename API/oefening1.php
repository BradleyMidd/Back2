<?php

//Welke url willen we lezen?
$url = "https://www.glr.nl/";

//Initialiseer een curl handle
$ch = curl_init();

// Stel de opties in
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADERS, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Voer de handle uit
$data = curl_exec($ch);

echo $data;
// Sluit de curl handle
curl_close($ch);