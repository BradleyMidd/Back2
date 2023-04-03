<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../Includes/auto.php';
session_start();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Maak een auto aan!</h1>

<form action="" method="post">

    <label for="merk">Merk</label>
    <input type="text" name="merk" placeholder="merk">

    <br>

    <label for="type">Type</label>
    <input type="text" name="type" placeholder="type">

    <br>

    <label for="kleur">Kleur</label>
    <input type="text" name="kleur" placeholder="kleur">

    <br>

    <label for="trek">Heeft het een trekhaak?</label>
    <select name="trek">
        <option value="true">Ja</option>
        <option value="false">Nee</option>
    </select>

    <br>

    <label for="inhoud">Tank Inhoud</label>
    <input type="number" name="inhoud" value="inhoud">

    <br>

    <label for='tanken'>Tanken</label>
    <input type='number' name='tanken' placeholder='tanken'>

    <br>

    <label for='rijden'>Rijden</label>
    <input type='number' name='rijden' placeholder='rijden'>

    <br>

    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>

<?php
if(isset($_POST['submit'])) {

    $_SESSION['merk'] = $_POST['merk'];
    $_SESSION['type'] = $_POST['type'];
    $_SESSION['kleur'] = $_POST['kleur'];
    $_SESSION['trek'] = $_POST['trek'];
    $_SESSION['inhoud'] = $_POST['inhoud'];

    $_SESSION['tanken'] = $_POST['tanken'];
    $_SESSION['rijden'] = $_POST['rijden'];
    $km = 0;
    $benzine = 0;
    $verbruikt = rand(0,200);

    function generateRandomLetter($length = 1)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function generateRandomNumber($length = 3)
    {
        $numbers = '0123456789';
        $numbersLength = strlen($numbers);
        $randomNumbers = '';
        for ($i = 0; $i < $length; $i++) {
            $randomNumbers .= $numbers[rand(0, $numbersLength - 1)];
        }
        return $randomNumbers;
    }

    $kenteken = generateRandomLetter() . "-" . generateRandomNumber() . "-" . generateRandomLetter();

    $auto = new Auto($_SESSION['merk'], $_SESSION['type'], $_SESSION['kleur'], $kenteken, $_SESSION['inhoud'], $verbruikt, $_SESSION['trek'], $km, $benzine, $verbruikt);

    $benzine += $auto->tanken($_SESSION['tanken']);

    $km += $auto->rijden($_SESSION['rijden']);

    print_r($auto);
}

?>