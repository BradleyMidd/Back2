<?php
//Koppel de php bestand met de config bestand
include 'config.inc.php';

//Maak een variable waar het gelijk is aan de HTTP request variable
$naam = $_GET['wk'];

//Maak een query aan waar de eerste naam een bepaalde letter bevat
$query = "SELECT * FROM back2_leden WHERE first_name LIKE '%$naam%'";

$result = mysqli_query($mysqli, $query);

if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        echo $row['first_name'] . "<br>";
        echo $row['last_name'] . "<br>";
        echo $row['gender'] . "<br>";
        echo $row['birth_date'] . "<br>";
        echo $row['member_since'] . "<br>";
    }
} else {
    echo "Geen resultaat gevonden";
}


?>