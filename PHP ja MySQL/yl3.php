<?php
include('config.php');

echo '<strong>Hetkel lisatud albumid:</strong><br><br>';
$paring = 'SELECT * FROM albumid';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_row($valjund)){
    echo 'Artist: '.$rida[1].'<br>';
    echo 'Album: '.$rida[2].'<br>';
    echo 'Aasta: '.$rida[3].'<br>';
    echo 'Hind: '.$rida[4].'<br><br>';
}
?>
<h2><strong>Lisa uus album</strong></h2>
    <form action="" method="post">
        <table>
            <tr><td>Artist: </td><td><input type="text" name="artist" required"></td></tr>
            <tr><td>Album:</td><td> <input type="text" name="album" required"></td></tr>
            <tr><td>Aasta: </td><td><input type="number" name="aasta" min="1900" max="2099" value="2021" required></td></tr>
            <tr><td>Hind: </td><td><input type="number" name="hind" min="1" max="100" step="0.01" required></td></tr>
            <tr><td><input type="reset" value="Tühjenda"></td><td><input type="submit" value="Lisa"></td></tr>
        </table>
    </form>

<?php
//haarame aadressiribalt ID, et täita väljad
if(empty($_GET['id'])){
    die('Sihtmärk jäi valimata!');
} else {
    $id = $_GET['id'];
//väljastamise päring
    $paring = "SELECT * FROM albumid WHERE id='$id'";
    $valjund = mysqli_query($yhendus, $paring);
    $rida = mysqli_fetch_assoc($valjund);
//muutmise päring
    if(!empty($_POST['artist'])){
        $artist = htmlspecialchars(trim($_POST['artist']));
        $album = htmlspecialchars(trim($_POST['album']));
        $aasta = htmlspecialchars(trim($_POST['aasta']));
        $hind = htmlspecialchars(trim($_POST['hind']));
        $muuda = "UPDATE albumid 
		SET artist='".$artist."',
		album='$album',
		aasta='$aasta',
		hind='$hind'
		WHERE id='$id'
		";
        $muuda_db = mysqli_query($yhendus, $muuda);
        if($muuda_db){
            echo "edukalt muudetud, suuname <a href=\"04_muutmine.php\">tagasi</a>";
            echo '<META HTTP-EQUIV="Refresh" Content="2; URL=03_kustutamine.php">';
            die();
        } else {
            echo "mingi jama";
        }
    }
    ?>
    <h2>Albumi muutmine</h2>
    <form action="" method="post">
        <table>
            <tr><td>Artist: </td><td><input type="text" name="artist" required value="<?php echo $rida['artist']; ?>"></td></tr>
            <tr><td>Album:</td><td> <input type="text" name="album" required value="<?php echo $rida['album']; ?>"></td></tr>
            <tr><td>Aasta: </td><td><input type="number" name="aasta" value="<?php echo $rida['aasta']; ?>" min="1900" max="2099" required></td></tr>
            <tr><td>Hind: </td><td><input type="number" name="hind" value="<?php echo $rida['hind']; ?>" min="1" max="100" step="0.01" required></td></tr>
            <tr><td><input type="reset" value="Tühjenda"></td><td><input type="submit" value="MUUDA"></td></tr>
        </table>
    </form>
    <?php
}
