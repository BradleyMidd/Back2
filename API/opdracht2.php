<?php
//Volgende dag
$datetime = new DateTime('tomorrow');
$morgen = $datetime->format('d-m-Y');

//Welke url willen we lezen?
$url = "http://api.filmtotaal.nl/filmsoptv.xml?apikey=7z5to9fyocmvpek3xmn9oghd33x5ymcz&dag=$morgen&sorteer=1";

//Initialiseer een curl handle
$ch = curl_init();

// Stel de opties in
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADERS, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Voer de handle uit
$data = curl_exec($ch);

$xmldoc = new SimpleXMLElement($data);

foreach($xmldoc->film as $film)
{

    $link = (string) $film->ft_link;
    $titel = (string) $film->titel;
    $jaar = (string) $film->jaar;
    $reg = (string) $film->regisseur;
    $genre = (string) $film->genre;
    $land = (string) $film->land;
    $cover = (string) $film->cover;
    $zender = (string) $film->zender;
    $st = (int) $film->starttijd;
    $et = (int) $film->eindtijd;


    echo "<img src='" . $cover . "' alt='pic'><br>";
    echo "Titel: " . $titel . "<br>";
    echo "Genre: " . $genre . "<br>";
    echo "Land: " . $land . "<br>";
    echo "Jaar: " . $jaar . "<br>";
    echo "Zender: " . $zender . "<br>";
    echo "Regiseeur: " . $reg . "<br>";
    echo "Starttijd: " . gmdate("H:i", $st) . "<br>";
    echo "Eindtijd: " . gmdate("H:i", $et) . "<br>";
    echo "Link: " . $link . "<br><br>";

}

// Sluit de curl handle
curl_close($ch);