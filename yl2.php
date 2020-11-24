<?php
/*
    Ülesanne 1
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


$i = 123456;
$sent = $i * 100;
$meet = $i * 1000;
$vormindatud = sprintf('<br> Vastus sentimeetriteks: $sent %0.2f', $i);
$vormindatud2 = sprintf('<br> Vastus meetriteks: $meet %0.2f', $i);
echo $vormindatud, $vormindatud2;
