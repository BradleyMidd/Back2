<!doctype html>
<?php
//Koppel de config.inc en session.inc naar de lid nieuw pagina
require_once 'config.inc.php';
require_once 'session.inc.php';
?>
<html>
<head>
<meta charset="UTF-8">
<title>Lid toevoegen</title>
</head>

<body>
<!-- Formulier -->
	<form action="lid_nieuw_verwerk.php" method="post">
		
		<label for="Voornaam">Voornaam:</label>
		<input type="text" name="voornaam" placeholder="Voornaam">
		<br>
		
		<label for="Achternaam">Achternaam:</label>
		<input type="text" name="achternaam" placeholder="Achternaam">
		<br>

        <label for="Gender">Gender:</label>
        <select name="gender">
            <option value="M">M</option>
            <option value="V">V</option>
        </select>
        <br>
		
		<label for="Birth">Birth:</label>
		<input type="date" name="birth">
		<br>
		
		<label for="Member">Member Since:</label>
		<input type="date" name="member">

        <br>

        <button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>