<?php
/*
    Ülesanne 3
    Karl-August Kongo
    26.11.2020
 */

/*Genereeri
    for($i=1;$i<=100;$i++){
        echo $i.".";
        if ($i % 10){
            echo "<br>";
        }
    }
*/


/*Rida
for($i=1;$i<=10;$i++) {
    echo "*";
}
*/

/*Rida 2
for($i=1;$i<=10;$i++) {
    echo "*<br>";
}
*/

/*Ruut

if (isset($_POST['ruut'])) {
    for($i=0;$i<$_POST['ruut'];$i++) {
        for($j=0; $j<$_POST['ruut'];$j++) {
            echo "* ";
        }
        echo "<br>";
    }
}
*/


/*Kahanev

for($i=10;$i>0;$i-=2) {
    echo $i."<br>";
}
*/


/*Kolmega jagunevad
for($i=3,$max=100;$i<=$max;$i++){
    if(($i%3)==0) {
        echo $i." ";
    }
}
*/


/*Massiivid ja tsüklid
$poisid = array("Karl", "Kevin", "Kert", "Rico");
$tudrukud = array("Kaisa", "Mari", "Sandra", "Kristiina");
for ($i=0;$i<count($poisid);$i++) {
    echo $poisid[$i]." ".$tudrukud[$i]."<br>";
}
*/



//Massiivid ja tsüklid (Bonus)
$poisid = array("Karl", "Kevin", "Kert", "Rico");
$tudrukud = array("Kaisa", "Mari", "Sandra", "Kristiina");
foreach ($poisid as $poiss) {
    $rpoiss = rand(0, count($tudrukud)-1);
}
foreach ($tudrukud as $tudruk) {
    $rtudruk = rand(0, count($poisid)-1);
}
echo $poisid[$rpoiss]." ".$tudrukud[$rtudruk]."<br>";





