<?php
include('config.php');
//päring
$paring = 'SELECT * FROM albumid';
$valjund = mysqli_query($yhendus, $paring);  //mysql käsu saatmine andmebaasile


while($rida = mysqli_fetch_row($valjund)){ //vastus andmebaasist
    //var_dump($rida);
    echo '<strong>Album: '.$rida[1].' - '.$rida[2].'</strong><br>';
    echo 'Aasta: '.$rida[3].'<br>';
    echo 'Žanr: '.$rida[4].'<br><br>';
}
mysqli_free_result($valjund); //päringu vabastamine
mysqli_close($yhendus); //andmebaasi yhenduse sulgemine

echo '<hr>';

include('config.php');
$paring = 'SELECT AVG(hind) AS "Keskmine hind", COUNT(*) AS "Albumeid kokku" FROM albumid';
$valjund = mysqli_query($yhendus, $paring);
//väljastamine
while($rida = mysqli_fetch_assoc($valjund)){
    printf("Keskmine hind: %0.2f eur <br>", $rida['Keskmine hind']);
    printf("Albumeid kokku: %d tk <br>", $rida['Albumeid kokku']);
}

?>
