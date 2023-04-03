<?php
//Koppel de config.inc naar de foto pagina
require_once 'config.inc.php';

//Maak een variable aan genaamd id die gelijk is aan de get functie
$id = $_GET['id'];

//Als de jpg bestand bestaat in de uploadds dan toon de afbeelding op het foto.php pagina
if (file_exists(__DIR__ . '/Uploads/' . $id . '.jpg'))
    {
        echo "<p><img src='Uploads/" . $id . ".jpg' alt='foto'></p>";
    }
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<!-- Formulier -->
<form action="foto_verwerk.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <p>
        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto" required="required">
    </p>

    <p>
        <input type="submit" name="submit" id="submit" value="uploaden">
        <button onclick="history.back();return false;">Annuleren</button>
    </p>

</form>

</body>
</html>