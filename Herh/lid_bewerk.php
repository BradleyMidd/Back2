<!doctype html>
<?php
//Koppel de config.inc en session.inc naar de lid bewerk pagina
require_once 'config.inc.php';
require_once 'session.inc.php';

//Maak een variable aan genaamd id die gelijk is aan de get functie
$id = $_GET['id'];

//Maak een query aan dat alles selecteert van de back2_leden waar de id van back2_leden gelijk is aan de variable id
$query = "SELECT * FROM back2_leden WHERE id = '$id'";

//Voer de query uit
$result = mysqli_query($mysqli, $query);

//Pak de rijen uit de back2_leden tabel
$row = mysqli_fetch_array($result);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>

<body>
<!-- Formulier -->
<form action="lid_bewerk_verwerk.php" method="post">

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <br>

    <label for="Voornaam">Voornaam:</label>
    <input type="text" name="voornaam" value="<?php echo $row['first_name']; ?>">
    <br>

    <label for="Achternaam">Achternaam:</label>
    <input type="text" name="achternaam" value="<?php echo $row['last_name']; ?>">
    <br>

    <label for="Gender">Gender:</label>
    <select name="gender">
        <option value="M">M</option>
        <option value="F">F</option>
    </select>
    <br>

    <label for="Birth">Birth:</label>
    <input type="date" name="birth" value="<?php echo $row['birth_date']; ?>">
    <br>

    <label for="Member">Member Since:</label>
    <input type="date" name="member" value="<?php echo $row['member_since']; ?>">

    <br>

    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>