<?php
/*
    Ülesanne 7
    Karl-August Kongo
    09.12.2020
 */

/*Sõiduaeg
$start = $_POST['start'];
$lopp = $_POST['lopp'];
if (isset($_POST['start']) or (isset($_POST['lopp']))) {
    if (strlen($start) !=5 or strlen($lopp) !=5) {
        echo "Lisa vähemalt viis sümbolit!";
    } else {
        echo "Sõiduaeg oli ".gmdate('H:i',strtotime($lopp) - strtotime($start));
    }
}
*/

//Palkade võrdlus

$allikas = 'tootajad.csv';
$fail = fopen($allikas);
$faili_sisu = file_get_contents($allikas);

$






