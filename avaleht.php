
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Karl-August Kongo yl10</title>
</head>
<body>
<menu>
    <a href="avaleht.php">Avaleht</a>
    <a href="kaart.php?leht=kaart">Kaart</a>
    <a href="kontakt.php?leht=kontakt">Kontakt</a>
    <a href="portfoolio.php?leht=portfoolio">Portfoolio</a>
</menu>
<p>Tere tulemast avalehele!</p>
<?php
if(!empty($_GET['leht'])){
    $leht = $_GET['leht'];
    if(is_numeric($leht)){
        include('leht'.$leht.'.php');
    }
    $lubatud = array('portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
}
?>
</body>
</html>