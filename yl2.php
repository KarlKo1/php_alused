<?php
/*
    Ülesanne 2
    Karl-August Kongo
    24.11.2020
 */
$x = 6;
$y = 2;
$liitm = $x += $y;
$lahut = $x -= $y;
$korru = $x *= $y;
$jagam = $x /= $y;
$jaak = $x %= $y;
echo "Vastused:<br> liitmine 6 + 2 = $liitm,<br> lahutamine 6 - 2 = $lahut,<br> korrutamine 6 * 2 = $korru,<br> jagamine 6 / 2 = $jagam,<br> jääk 6 % 2 = $jaak";


$i = 123000;
printf('<br>Vastus: %0.3f', $i / 10);
printf('<br>Vastus: %0.3f', $i / 1000);


$a = 4;
$b = 5;
$c = 6.4;
$kolmnurga_p = $a + $b + $c;
$kolmnurga_s = ($a * $b) / 2;

printf("<br>Kolmnurga ümbermõõt on ".$kolmnurga_p." ja kolmnurga pindala on ".$kolmnurga_s.".");
