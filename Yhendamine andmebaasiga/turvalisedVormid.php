<?php include('config.php'); ?>

<?php
if (!empty($_GET['otsi'])){
    $otsi = $_GET['otsi'];
    $otsi = htmlspecialchars(trim($otsi));

    $paring = 'SELECT * FROM albumid WHERE artist LIKE "%'.$otsi.'%"';
    $valjund = mysqli_query($yhendus, $paring);
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
<form method="get" action="">
    Otsing <input type="text" name="otsi">
    <input type="submit" value="otsi...">
</form>
