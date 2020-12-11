<!DOCTYPE html>
<html lang="en">
<head>
    <title>Karl-August Kongo yl7</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
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



/*Liitu uudiskirjaga

function uudiskiri() {
    echo '<form>
        Genereeri liitumise vorm<input type="text" name="uudisk" id="uudisk" ><br>
        <input type="submit" value="Liitu uudiskirjaga">
    </form>';
}
echo uudiskiri();

*/


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




/*Head mõtted
function mote()
{
    $alus = array('Koer', 'Kass', 'Mees', 'Naine');
    $oeldis = array('kõnnib', 'jookseb', 'hüppab', 'vaatab');
    $sihitis = array('poodi', 'laevale', 'kiiresti', 'aeglasti');

    $rand1 = rand(0, 3);


    echo $alus[$rand1]." ".$oeldis[$rand1]." ".$sihitis[$rand1];
}
echo mote();
*/
?>
</body>
</html>