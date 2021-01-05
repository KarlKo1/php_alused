<?php
include('config.php');

$paring = 'SELECT * FROM albumid';				//mysql

$valjund = mysqli_query($yhendus, $paring);

while($rida = mysqli_fetch_row($valjund)){
    echo 'Artist: '.$rida[1].'<br>';
    echo 'Album: '.$rida[2].'<br>';
    echo 'Aasta: '.$rida[3].'<br>';
    echo 'Hind: '.$rida[4].'<br><br>';
}

$paring = 'SELECT * FROM Albumid ORDER BY Artist ASC ';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_row($valjund)){
    echo $rida[1].' - '.$rida[2].'<br>';

}
$paring = 'SELECT * FROM Albumid WHERE Aasta >= 2010';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_row($valjund)){
    echo '<br> Albumid, mis on uuemad kui 2010: '.$rida[2];


}



$paring = 'SELECT COUNT(*) AS "Albumite arv", AVG(Hind) AS "Keskmine hind", SUM(Hind) AS "Koguväärtus" FROM Albumid';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_assoc($valjund)){
	printf("Keskmine hind: " .$rida['Keskmine hind']);
	printf("<br>Albumeid kokku: <br>" .$rida['Albumite arv']);
    printf("<br>Koguväärtus: " .$rida['Koguväärtus']);
}



$paring2 = 'SELECT Album FROM Albumid WHERE Aasta = (SELECT MIN(Aasta) FROM Albumid)';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_row($valjund)){
    echo '<br> Vanim album on '.$rida[1];


}



$paring = 'SELECT Album FROM Albumid WHERE Hind > (SELECT AVG(Hind) FROM Albumid)';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_row($valjund)) {
    echo '<br> Albumid, mille hind on kogu keskmisest suurem: '.$rida[1];


}

mysqli_free_result($valjund);
mysqli_close($yhendus);
?>
<?php
include('config.php');
if (!empty($_GET['otsi'])) {
    //kasutaja tekst vormist
    $otsi = $_GET['otsi'];
    $otsi = htmlspecialchars(trim($otsi));
    //päring
    $paring = 'SELECT * FROM albumid WHERE artist LIKE "%'.$otsi.'%"';
    $valjund = mysqli_query($yhendus, $paring);
    //päringu vastuste arv
    $tulemusi = mysqli_num_rows($valjund);

    echo 'Otsingusõna: '.$otsi.'<br>';
    echo 'Vastused: <br>';
    if ($tulemusi == 0) {
        echo "Leiti 0 vastust!";
    }
    while($rida = mysqli_fetch_assoc($valjund)){
        echo $rida['artist'].' - '.$rida['album'].' - '.$rida['aasta'].'<br>';
    }
    mysqli_free_result($valjund);
    mysqli_close($yhendus);
}
?>
<form method="post" action="">
    <label>Vali artist või album: </label>
    <select id="text" name="text">
        <option value="artist" name="artist">Artist</option>
        <option value="album" name="album">Album</option>
    </select>
    <label for="word">Otsingusõna: </label>
    <input type="text" id="word"><br>
    <input type="submit" value="Saada">
</form>
