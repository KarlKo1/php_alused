<?php
/*
    Ülesanne 7
    Karl-August Kongo
    09.12.2020
 */

/*Tervitus
function tervita(){
    return "Tere päiksekesekene!";
}

echo tervita();
*/
//Liitu uudiskirjaga


//Kasutajanimi ja email
/*
    $var = strtolower($_POST['nimi']);
    echo $var.'@hkhk.edu.ee';
*/
/*
function nimii($_POST)
{
    return strtolower($_POST['nimi']);
}
echo nimii($_POST).'@hkhk.edu.ee';
*/



//Arvud
/*
function nimii($_POST)
{
    return range($_POST['nimi']);
}
echo nimii($_POST);
*/



/*Ristküliku pindala
$alus = $_POST['alus'];
$korgus = $_POST['korgus'];
function pindala($alus, $korgus) {
    echo 'Pindala on '.$alus*$korgus.' ühikut.<br>';
}
echo pindala($alus, $korgus);
*/


/*Isikukood
$isik = $_POST['isik'];
function isikukood($isik)
{
    if (strlen($isik) == 11) {
        echo "Isikukood on õige!";
    } else {
        echo "Isikukood on vale!";
    } if (substr($isik, 1, 1) == 3) {
        echo "<br> Tegemist on meessoost isikuga.";
}   else {
        echo "<br> Tegemist on naissoost isikuga.";
}
}
echo isikukood($isik);
*/


//Head mõtted
function mote()
{
    $alus = array('Koer', 'Kass', 'Mees', 'Naine');
    $oeldis = array('kõnnib', 'jookseb', 'hüppab', 'vaatab');
    $sihitis = array('poodi', 'laevale', 'kiiresti', 'aeglasti');

    $rand1 = rand(1, 4);
    $rand2 = rand(1, 4);
    $rand3 = rand(1, 4);

    echo $alus[$rand1] . " " . $oeldis[$rand2] . " " . $sihitis[$rand3] . ".";
}
echo mote();
