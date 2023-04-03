<?php
//Koppel de php bestand met de config bestand
include 'config.inc.php';

//Maak een variable waar het gelijk is aan de HTTP request variable
$naam = $_GET['wp'];

//Maak een query aan waar de eerste naam een bepaalde letter bevat
    $query = "SELECT first_name FROM back2_leden WHERE first_name LIKE '%$naam%'";

    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['first_name'] . "<br>";
        }
    } else {
        echo "Geen resultaat gevonden";
    }


?>