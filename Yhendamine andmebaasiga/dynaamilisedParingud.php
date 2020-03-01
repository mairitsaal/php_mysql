<?php include('config.php'); ?>
<?php
if (!empty($_GET['otsi'])) {
    //kasutaja tekst vormist
    $otsi = $_GET['otsi'];
    //päring
    $paring = 'SELECT * FROM albumid WHERE artist LIKE "%'.$otsi.'%"';
    $valjund = mysqli_query($yhendus, $paring);

    echo 'Otsingusõna: '.$otsi.'<br>';
    echo 'Vastused: <br>';
    while($rida = mysqli_fetch_assoc($valjund)){
        echo $rida['artist'].' - '.$rida['album'].' - '.$rida['aasta'].'<br>';
    }
    mysqli_free_result($valjund);
    mysqli_close($yhendus);
}
?>
<form method="get" action="">
    Otsing <input type="text" name="otsi">
    <input type="submit" value="otsi...">
</form>
