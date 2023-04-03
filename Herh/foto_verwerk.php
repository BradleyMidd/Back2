<?php

//Als een foto geselecteerd en verstuurd is dan voert hij de verwerking uit
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0)
{

    //Als de bestand jpg, jpeg en pjpeg bevat, dan verstuurd hij het naar de Uploads map
    if ($_FILES['foto']['type'] == "image/jpg" ||
        $_FILES['foto']['type'] == "image/jpeg" ||
        $_FILES['foto']['type'] == "image/pjpeg" ||
        $_FILES['foto']['type'] == "image/png" ||
        $_FILES['foto']['type'] == "image/gif")
    {
        //Maak een nieuwe directory en geef het aan als /Uploads/
        $map = __DIR__ . "/Uploads/";

        //Maak een nieuwe variable waar je de id pakt van de foto pagina en dat je .jpg toevoeg als string
        $jpg = $_POST['id'] . '.jpg';
        $png = $_POST['id'] . '.png';
        $gif = $_POST['id'] . '.gif';

        //Verplaats de bestand naar de Upload directory
        move_uploaded_file($_FILES['foto']['tmp_name'],$map . $jpg);
        move_uploaded_file($_FILES['foto']['tmp_name'],$map . $png);
        move_uploaded_file($_FILES['foto']['tmp_name'],$map . $gif);

        header("Location:home.php");

    }

    //Anders geeft het een melding dat het een verkeerde type is
    else
    {
        echo "<script>
                alert('Het bestand is het verkeerde type!');
              </script>";
        echo "<script>
                window.history.back();
              </script>";
    }
}

//Anders geeft het een melding aan dat er iets
else
{
    echo "<script>
            alert('Er ging wat mis met het uploaden van je bestand!');
          </script>";
    echo "<script>
            window.history.back();
          </script>";
}

?>