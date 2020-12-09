<?php
/*
    Ülesanne 9
    Karl-August Kongo
    26.11.2020
 */

//Esimene
$nimi = $_POST['nimi'];
echo 'Tervist, '.ucwords(strtolower($nimi)).'!';


/*Teine
$punktid = implode('.',str_split($nimi));
echo strtoupper($punktid);
*/


/*Kolmas
$ropp = array("noob","loll","kurat");
$muuda = "****";

echo "<br>".str_replace($ropp, $muuda, $nimi)."<br>";
*/

//Neljas
$tapitahed = array("ä","ö","ü","õ");
$tapitahedAsendus = array("a","o","y","o");
$email = strtolower(str_replace($tapitahed, $tapitahedAsendus, $nimi))."@hkhk.edu.ee";
echo "<br>".$email;



