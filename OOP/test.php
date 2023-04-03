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
<form action="" method="post">
    <label for="trek">Heeft het een trekhaak?</label>
    <select name="trek">
        <option value="true">Ja</option>
        <option value="false">Nee</option>
    </select>

    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $test = $_POST['trek'];

    echo $test;
}