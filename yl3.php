<?php
/*
    Ülesanne 3
    Karl-August Kongo
    26.11.2020
 */

$lalus = $_POST['alus1'];
$palus = $_POST['alus2'];
$korgus = $_POST['korgus'];
$trapets_s = (($lalus + $palus) / 2) * $korgus;
$romb_p = ($lalus * 4);
printf("Trapetsi pindala on %0.1f", $trapets_s.".");
printf("<br>Rombi ümbermõõt on %0.1f",$romb_p.".");