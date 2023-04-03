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
<h1>Register</h1>
<form method="post">
    User:<input type="text" name="user">
    Pass:<input type="text" name="pass">
    <input type="submit" name="submit" value="Register">
</form>

<?php
include 'Includes/person.inc.php';

//$pet01 = new Pet();
//echo $pet01->owner("Bradley");

if(isset($_POST['submit']))
{

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $a = new User();
    echo $a->UserInfo($user, $pass);

}

?>

</body>
</html>
