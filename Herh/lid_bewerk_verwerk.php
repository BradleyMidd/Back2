<?php
//Koppel de config.inc naar de lid berwerk verwerk pagina
require_once 'config.inc.php';

//Maak variables aan om de info van lid te pakken via lid bewerk pagina
$id = $_POST['id'];
$first_name = $_POST['voornaam'];
$last_name = $_POST['achternaam'];
$gender = $_POST['gender'];
$birth = $_POST['birth'];
$member_since = $_POST['member'];

    //Als de string van de gegevens hoger is dan 0, dan voert hij de verwerking uit
    if(is_numeric($id) &&
        strlen($id)           > 0 &&
        strlen($first_name)   > 0 &&
        strlen($last_name)    > 0 &&
        strlen($gender)       > 0 &&
        strlen($birth)        > 0 &&
        strlen($member_since) > 0)
    {
        //Maak 2 variables aan die van een string naar tijd veranderd
        $check1 = strtotime($birth);
        $check2 = strtotime($member_since);

        //Als de jaar, maand en datum gelijk is aan de birth en tijd, eerste naam en tweede naam alleen letters en dat de birth datum lager is dan de member date dan voert hij de query uit
        if(date('Y-m-d', $check1) == $birth &&
            date('Y-m-d',$check2) == $member_since &&
            preg_match("/^[a-zA-Z]/", $first_name) == 1 &&
            preg_match("/^[a-zA-Z]/", $last_name) == 1 &&
            date('Y-m-d', $check1) <  date('Y-m-d',$check2))
        {

            //Maak de query aan dat je een lid kan bewerken
            $query = "UPDATE back2_leden SET birth_date = '$birth', first_name ='$first_name', last_name = '$last_name', gender = '$gender', member_since = '$member_since' WHERE id = $id";

            //Voer de query uit
            $result = mysqli_query($mysqli, $query);

            //Als de query goed uitgevoerd is, dan is het bewerken gelukt
            if ($result)
            {
                echo "<script>
				alert('Bewerken van rij $id is gelukt');";
                echo "window.location.href = 'home.php'";
                echo "</script>";
                exit;
            }

            //Anders geeft hij een melding dat het bewerken mis ging
            else
                {
                echo "<script>
                        alert('Er ging wat mis met het bewerken!');
                      </script>";
                echo "<script>
						  window.history.back();
                      </script>";
            }

        }

    }

//Als er geen velden zijn ingevuld dan geeft hij melding dat een bepaald veld niet is ingevuld
else
{
    if(strlen($first_name) == 0)
    {
        echo "<script>
			alert('Voornaam is niet ingevuld');
		  </script>";
    }


    if(strlen($last_name) == 0)
    {
        echo "<script>
			alert('Achternaam is niet ingevuld');
		  </script>";
    }

    if(strlen($birth) == 0)
    {
        echo "<script>
			alert('Geboortedatum is niet ingevuld');
		  </script>";
    }

    if(strlen($member_since) == 0)
    {
        echo "<script>
			alert('Lid sinds is niet ingevuld');
		  </script>";
    }

    if (date('Y-m-d', $check1) <  date('Y-m-d',$check2))
    {
        echo "<script>
			alert('Member kan niet eerder zijn dan geboortedatum');
		  </script>";
    }

    echo "<script>
			  window.history.back();
		  </script>";
}
?>