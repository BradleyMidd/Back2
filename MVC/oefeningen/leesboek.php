<?php
require '../../Herh/config.inc.php';
function getBooks()
{
    global $mysqli;  //Omdat je $mysqli in een functie gebruikt!
    $result = mysqli_query($mysqli, "SELECT * FROM mvc_boeken ORDER BY id");
    if (mysqli_num_rows($result)>0)
    {
        $boeken = Array();                          //Maak een Array van alle boeken
        while ($row = mysqli_fetch_array($result))  //Voeg alle boeken toe aan de Array
        {
            $boeken[] = $row;
        }
        return $boeken;
    }
    else
    {
        return false;
    }
}
if ($alleBoeken = getBooks())
{
    echo "<table>";             //Start de tabel
    echo "<tr>";
    echo "<th>Titel</th>";
    echo "<th>Auteur</th>";
    echo "<th>ISBN</th>";
    echo "</tr>";
    //Lees alle boeken uit
    foreach ($alleBoeken as $boek)
    {
        echo "<tr>";
        echo "<td>" . $boek['title']  . "</td>";
        echo "<td>" . $boek['author'] . "</td>";
        echo "<td>" . $boek['isbn']  . "</td>";
        echo "</tr>";
    }
    echo "</table>";            //Einde tabel
}