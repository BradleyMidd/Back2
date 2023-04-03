<?php
class Book
{
    /* Maak variables aan */
    public $id = null;
    public $title = "";
    public $author = "";
    public $isbn = "";

    /* Maak een functie waarin je de boeken uit de database laad */
    private function load($id)
    {

        global $mysqli;
        /* Zoek de gegevens in de database */
        $result = mysqli_query($mysqli, "SELECT * FROM mvc_boeken WHERE id = {$id}");

        /* Is er een boek gevonden met dit id? */
        if(mysqli_num_rows($result) == 1)
        {

            /* Lees de data van het boek uit */
            $row = mysqli_fetch_array($result);

            /* Vul de properties van dit object */
            $this->id = $id;
            $this->title = $row["title"];
            $this->author = $row["author"];
            $this->isbn = $row["isbn"];

        }

        else
        {

            /* Er ging wat mis */
            throw new Exception("Kan het boek met ID ". $id . " niet vinden.");

        }

    }

    public function save()
    {

        global $mysqli;

        /* Schoon de tekstdata op */
        $this->title = htmlentities(html_entity_decode($this->title, ENT_QUOTES), ENT_QUOTES);
        $this->author = htmlentities(html_entity_decode($this->author, ENT_QUOTES), ENT_QUOTES);

        /* Controleer of alle gegevens aanwezig zijn */
        if (strlen($this->title) > 0 && strlen($this->author) > 0 && strlen($this->isbn) > 0)
        {

            /* Controleer of dit een nieuw of bestaand boek is */
            if (is_null($this->id))
            {

                $add = mysqli_query($mysqli, "INSERT INTO mvc_boeken(id, title, author, isbn) VALUES (NULL ,{$this->title},{$this->author},{$this->isbn})");

                /* Als het query successvol is uitgevoerd */
                if($add)
                {

                    $this->save();
                    return "Add successful!";

                }

                /* Anders geeft hij een error */
                else
                {

                    /* Er ging wat mis */
                    throw new Exception("Kan het boek niet toevoegen.");

                }

            }

            else
            {

                $update = mysqli_query($mysqli, "UPDATE mvc_boeken SET title={$this->title},author={$this->author},isbn={$this->isbn} WHERE id = {$this->id}");

                /* Als het query successvol is uitgevoerd */
                if($update)
                {

                    $this->save();
                    return "Update successful!";

                }

                /* Anders geeft hij een error */
                else
                {

                    /* Er ging wat mis */
                    throw new Exception("Kan het boek niet Updaten.");

                }
            }

        }
    }

    public function __construct($id = null)
    {

        /* Is er een id meegegeven */
        if(!is_null($id))
        {

            /* Laad de informatie voor dit boek uit de database */
            $this->load($id);

        }

    }



}