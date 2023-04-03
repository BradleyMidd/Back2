<!doctype html>
<?php
//Koppel de config.inc en session.inc naar de home pagina
require_once 'config.inc.php';
require_once 'session.inc.php';

?>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
<link rel="stylesheet" href="CSS/style.css">
</head>

<body>
	<a href="lid_nieuw.php">Voeg een lid toe</a>
    <a href="logout.php">Loguit</a>

    <br>

    <?php
    //Maak een query aan dat alles selecteert van back2_leden dat gesoorteert is op naam (van a tot z)
    $query = "SELECT * FROM back2_leden ORDER BY first_name ASC";
    $query2 = "SELECT * FROM User";

    //Voer de query uit
    $leden = mysqli_query($mysqli, $query);
    $result = mysqli_query($mysqli, $query2);

    $user = mysqli_fetch_array($result);

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Gender</th>";
    echo "<th>Birth Date</th>";
    echo "<th>Member Since</th>";
    echo "<th>Picture</th>";
    if($user['Level'] >= 1) {
        echo "<th>Wijzig</th>";
        echo "<th>Add Picture</th>";
        echo "<th>Verwijder</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    //Maak een loop aan dat je alle leden kan zien 
    while ($row = mysqli_fetch_array($leden)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . " </td>";
        echo "<td>" . $row['gender'] . " </td>";
        echo "<td>" . $row['birth_date'] . "</td>";
        echo "<td>" . $row['member_since'] . "</td>";
        echo "<td><p><img src='Uploads/" . $row['id'] . ".jpg'></p></td>";
        if($user['Level'] >= 1) {
            echo "<td><a href='lid_bewerk.php?id=" . $row['id'] . "'>Wijzig</a></td>";
            echo "<td><a href='foto.php?id=" . $row['id'] . "'>Add Picture</a></td>";
            echo "<td><a href='lid_verwijder.php?id=" . $row['id'] . "'>Verwijder</a></td>";
        }
        echo "</tr>";

    }
    echo "<tbody>";
    echo "</table>";
    ?>
</body>
</html>