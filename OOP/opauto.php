<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* connect je auto.php bestand */
include ('Includes/auto.php');

/* opdracht 4 */
//$auto1 = new Auto();
//$auto2 = new Auto();
//$auto3 = new Auto();

/* Opdracht 7 */
//$auto1 = new Auto("Mazda", "RX7", "Wit", "J-734-u", 75, 100, false);

/* Opdracht 8 */

/* Lease auto */
$auto1 = new LeaseAuto("BMW", "M340i", "antraciet", "K-326-x", 200, 400, true);
$auto1->tanken(40);
$auto1->rijden(430);
$auto1->leaseMaatschappij = "Arval";
$auto1->start_contract = "2001-11-07";
$auto1->eind_contract = "2011-11-07";
$auto1->doeOnderhoud("");

/* Eigen auto */
$auto2 = new EigenAuto("Opel", "Corsa", "wit", "L-614-t", 300, 1000, false);
$auto2->aankoopDatum = "2020-01-12";


/* Zet een kenteken op voor elke auto */
//$auto1->setKenteken("L-883-z");
//$auto2->setKenteken("M-823-4");
//$auto3->setKenteken("K-248-d");

/* Opdracht 4 en 6 */
//$auto1->merk = "Ferrari";
//$auto1->type = "458";
//$auto1->kleur = "Wit";
//$auto1->heeftTrekhaak = true;
//$auto1->getKenteken();
//$auto1->kilometerstand(400);
//$auto1->tankInhoud = 250;
//$auto1->benzinepeil(100);
//$auto1->verbruik = 5;

//$auto2->merk = "Audi";
//$auto2->type = "A3";
//$auto2->kleur = "Grijs";
//$auto2->heeftTrekhaak = false;
//$auto2->getKenteken();
//$auto2->kilometerstand(200);
//$auto2->tankInhoud = 150;
//$auto2->benzinepeil(150);
//$auto2->verbruik = 10;

//$auto3->merk = "Peugeot";
//$auto3->type = "5008";
//$auto3->kleur = "Groen";
//$auto3->heeftTrekhaak = true;
//$auto3->getKenteken();
//$auto3->kilometerstand(300);
//$auto3->tankInhoud = 200;
//$auto3->benzinepeil(50);
//$auto3->verbruik = 150;

/* Opdrachten printen */

//print_r ($auto1);
echo "Onderhoud: " . $auto1->getOnderhoud();
echo "<br>";
//print_r ($auto2);
echo "<br>";
//print_r ($auto3);
//echo "<br>";



/* Opdracht 5 Print de hoeveelheid die teveel is getankt */

//print_r($auto1->tanken(200)); //Hij heeft 200 liter te veel getankt
//echo "<br>";
/* Print hoeveel km is gereden */
//print_r($auto1->rijden(200));  //Hij rijdt in totaal 200km
