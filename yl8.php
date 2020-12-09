<?php
/*
    Ülesanne 3
    Karl-August Kongo
    26.11.2020
 */


/*Esimene
date_default_timezone_set('Europe/Tallinn');
echo date('d.m.Y G:i' , time());
*/


/*Teine
$kasutajaSynd = 1999;
echo 'Kasutaja vanus on sel aastal '.(date('Y') - $kasutajaSynd);
*/


/*Kolmas
$date = time();
$date2 = strtotime('2021-06-28');
$datediff = $date - $date2;
echo "Kooliaasta lõpuni on ".round($datediff / (60 * 60 * 24))." päeva.";
*/


//Neljas
$aeg = new DateTime();
$kevad = new DateTime('03.20');
$suvi = new DateTime('06.20');
$sygis = new DateTime('09.22');
$talv = new DateTime('12.21');
switch(true) {
    case $aeg >= $kevad && $aeg < $suvi:
        echo 'Kevad';
        break;
    case $aeg >= $suvi && $aeg < $sygis:
        echo 'Suvi';
        break;
    case $aeg >= $sygis && $aeg < $talv:
        echo 'Sügis';
        break;
    default:
        echo 'Talv';
}



