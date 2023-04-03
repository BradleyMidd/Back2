<?php
/* Maak een class aan genaamd Auto */
class Auto
{
    /* Voeg de eigenschappen toe van een auto */
    public $merk;
    public $type;
    public $kleur;
    public $heeftTrekhaak = false;
    protected $kenteken;
    protected $km = 0;
    public $tankInhoud;
    protected $benzine = 0;
    public $verbruik;

    /* opdracht 7: maak een constructor aan waar je alle waardes opnoemt */
    public function __construct($mk, $ty, $kl, $ken, $tan, $ver, $ht)
    {

            $this->merk             = $mk;
            $this->type             = $ty;
            $this->kleur            = $kl;
            $this->kenteken         = $ken;
            $this->tankInhoud       = $tan;
            $this->verbruik         = $ver;
            $this->heeftTrekhaak    = $ht;
            $this->km               = 0;
            $this->benzine          = 0;


    }

    /* Opdracht 5 */
    public function tanken($liters)
    {

        /* Voeg aantal liters toe aan tank */
        $this->benzine += $liters;

        /* Als er teveel is getankt */
        if($this->benzine > $this->tankInhoud)
        {

            /* Bereken hoeveel er teveel is getankt */
            $teveel = $this->benzine - $this->tankInhoud;
            /* De tank zit vol met benzine */
            $this->benzine = $this->tankInhoud;
            /* Geef terug hoeveel er teveel is getankt */
            return $teveel;

        }
        else{

            /* Stuur een "0" terug */
            return 0;
        }

    }

    /* Opdracht 5 */
    public function rijden($aantalkm)
    {

        /* Bereken hoeveel benzine er wordt gebruikt tijdens het rijden */
        $kanRijden = $this->benzine / $this->verbruik * 100;

        /* Als de auto genoeg benzine heeft voor de rit */
        if($aantalkm <= $kanRijden)
        {
            /* Zet het aantal gereden kilometers op de teller (property kilometers) */
            $this->km += $aantalkm;

            /* Haal de hoeveelheid verbruikte benzine uit de tank (property benzine) */
            $verbruikt = $aantalkm / 100 * $this->verbruik;
            $this->benzine -= $verbruikt;

            /* Return het aantal gereden  */
            return $aantalkm;
        }

        /* Als de auto niet genoeg benzine heeft voor de hele rit */
        else{

            /* Bereken hoe veel kilometer de auto wel werkelijk kan rijden met de hoeveelheid benzine in de tank */
            $this->benzine = 0;

            /* Zet het aantal werkelijk gereden kilometers op de teller (property kilometers) */
            $this->km += $kanRijden;

            /* Return het aantal werkelijk gereden kilometers als bevestiging */
            return $kanRijden;
        }


    }

    /* Maak een functie aan waarin je de private km return */
    public function kilometerstand($kilometer)
    {

        return $this->km = $kilometer;

    }

    public function getKenteken()
    {

        /* Geef het kenteken */
        return $this->kenteken;

    }

    public function setKenteken($kenteken)
    {

        /* Maak alle letters hoofdletters */
        $kenteken = strtoupper($kenteken);

        /* Verwijder alles wat geen letter, getal of streepje is */
        $kenteken = preg_replace('/[^A-Z0-9\-]/', '', $kenteken);

        /* Sla het kenteken op */
        $this->kenteken = $kenteken;

    }

    /* Maak een functie aan waarin je de private benzine return */
    public function benzinepeil($aantalBenzine)
    {

        return $this->benzine = $aantalBenzine;

    }

}

/* Opdracht 8  */
class LeaseAuto extends Auto
{

    /* Maak 4 variables aan voor de lease auto */
    public $leaseMaatschappij;
    public $start_contract;
    public $eind_contract;
    private $laatste_onderhoud;

    /* Maak een functie waar je de onderhoud doet */
    public function doeOnderhoud($datum = "")
    {

        /* Als datum leeg is dan moet je de huidige datum pakken */
        if ($datum == "")
        {

           $this->laatste_onderhoud = date("Y-m-d");

        }

        /* Anders pak je de datum wat je hebt ingevuld */
        else
        {

            $this->laatste_onderhoud = $datum;

        }


    }

    /* Pak de onderhoud van de doeOnderhoud functie */
    public function getOnderhoud()
    {

        return $this->laatste_onderhoud;

    }

}

class EigenAuto  extends Auto
{

    public $aankoopDatum;

}