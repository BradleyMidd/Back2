<?php

include 'opdracht1.php';

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

<form action="" method="post">
    <input type="text" name="subject" placeholder="Voer uw onderwerp in...">
    <input type="text" name="text" placeholder="Voer uw tekst in...">
    <input type="submit" name="submit" value="submit">
</form>

<?php

if(isset($_POST['submit']))
{

    $sub = $_POST['subject'];
    $txt = $_POST['text'];

    $message = new Message();
    $message->setSubject($sub);
    $message->setText($txt);

    echo "Subject: ". $message->getSubject() . "<br>";
    echo "Text: ". $message->getText() . "<br>";


}

?>

</body>
</html>
