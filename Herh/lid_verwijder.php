<!doctype html>
<?php
//Koppel de config.inc en session.inc naar de lid verwijder pagina
require_once 'config.inc.php';
require_once 'session.inc.php';

//Maak een variable aan genaamd id die gelijk is aan de get functie
$id = $_GET['id'];

//Maak een query aan dat alles selecteert van de back2_leden waar de id van back2_leden gelijk is aan de variable id
$query = "SELECT * FROM back2_leden WHERE id = '$id'";

//Voer de query uit
$result = mysqli_query($mysqli, $query);
?>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<!-- Verwijderen van lid -->
	<p>Wilt u de rij verwijderen met het ID?</p>
	<form action="lid_verwijder_verwerk.php" method="post">
	<input type="text" name="id" value="<?php echo $id; ?>" readonly>
	<input type="submit" name="submit" value="verwijderen">
		</form>
</body>
</html>