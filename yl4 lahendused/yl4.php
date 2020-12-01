<?php
/*
    Ülesanne 4
    Karl-August Kongo
    26.11.2020
 */
// jagamine
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



