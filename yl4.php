<?php
/*
    Ülesanne 4
    Karl-August Kongo
    26.11.2020
 */

/* jagamine
$arv1 = $_POST['arv1'];
$arv2 = $_POST['arv2'];
$jagamine = $arv1 / $arv2;

if(empty($arv1)) {
    echo 'Lahter on tühi';
}elseif($arv1 == 0){
    echo 'Nulliga ei tohi jagada!';
} elseif ($arv2 == 0){
    echo 'Nulliga ei tohi jagada!';
} else {
    echo 'Jagamise vastus: '.$jagamine;
}
*/



/* vanus
$vanus1 = $_POST['vanus1'];
$vanus2 = $_POST['vanus2'];

if ($vanus1 > $vanus2){
    echo'Esimene kasutaja on vanem.';
} elseif ($vanus2 > $vanus1){
    echo'Teine kasutaja on vanem.';
}   elseif ($vanus1 == $vanus2){
    echo'Kasutajad on sama vanad.';
}
*/


/*Ristkülik või ruut
$kulg1 = $_POST['kulg1'];
$kulg2 = $_POST['kulg2'];

if ($kulg1 == $kulg2){
    echo'On võimalik ruut.';
}   else {
    echo'On võimalik ristkülik.';
}
*/



/*Ristkülik või ruut 2
$kulg1 = $_POST['kulg1'];
$kulg2 = $_POST['kulg2'];

if ($kulg1 == $kulg2){
    echo'∎.';
}   else {
    echo'▃.';
}
*/



/*Juubel
$synd = $_POST['synd'];
if(empty($synd)){
    echo'Sisend on tühi';
}   elseif ($synd == 2019){
    echo'Tegemist on juubeliaastaga.';
}   else {
    echo'Tegemist pole juubeliaastaga.';
}
*/


//Hinne
$arv = $_POST['arv'];
$arv2 = range(5,9);
if(empty($arv)){
    echo'SISESTA OMA PUNKTID!';
} elseif ($arv >= 10){
    echo'SUPER';
} elseif ($arv < 5){
    echo'KASIN';
}   elseif ($arv <= $arv2){
    echo'TEHTUD';
}
