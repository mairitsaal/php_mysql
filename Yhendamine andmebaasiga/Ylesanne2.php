<?php
include('config.php');

//Väljasta kogu ‘albumid’ sisu ridade kaupa
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
//Väljasta tabelist ainult artist ja album read, kusjuures sorteeri kasvavalt artisti järgi
$paring = 'SELECT artist, album FROM albumid ORDER BY artist';
$valjund = mysqli_query($yhendus, $paring);  //mysql käsu saatmine andmebaasile


while($rida = mysqli_fetch_row($valjund)){ //vastus andmebaasist
//var_dump($rida);
    echo '<strong>Artist: '.$rida[0].'</strong><br>';
    echo 'Album: '.$rida[1].'<br><br>';

}
mysqli_free_result($valjund); //päringu vabastamine
mysqli_close($yhendus); //andmebaasi yhenduse sulgemine
echo '<hr>';

//Väljasta tabelist ainult artist ja album read, mille aasta on 2010 ja uuemad
include('config.php');
$paring = 'SELECT artist, album, aasta FROM albumid WHERE aasta > 2010';
$valjund = mysqli_query($yhendus, $paring);  //mysql käsu saatmine andmebaasile


while($rida = mysqli_fetch_row($valjund)){ //vastus andmebaasist
//var_dump($rida);
    echo '<strong>Artist: '.$rida[0].'</strong><br>';
    echo 'Album: '.$rida[1].'<br>';
    echo 'Aasta: '.$rida[2].'<br><br>';
}
mysqli_free_result($valjund); //päringu vabastamine
mysqli_close($yhendus); //andmebaasi yhenduse sulgemine
echo '<hr>';


//Väljasta kui palju erinevaid albumeid on andmebaasis,
// mis on nende keskmine hind ja koguväärtus (summa)
include('config.php');
$paring = 'SELECT count(album), avg(hind), sum(hind) FROM albumid';
$valjund = mysqli_query($yhendus, $paring);  //mysql käsu saatmine andmebaasile


while($rida = mysqli_fetch_row($valjund)){ //vastus andmebaasist
//var_dump($rida);

    echo 'Albumeid andmebaasis: '.$rida[0].'<br>';
    echo 'Keskmine hind: '.$rida[1].'<br>';
    echo 'Koguväärtus: '.$rida[2].'<br><br>';
}
mysqli_free_result($valjund); //päringu vabastamine
mysqli_close($yhendus); //andmebaasi yhenduse sulgemine
echo '<hr>';

//Väljasta kõige vanema albumi nimed
include('config.php');
$paring = 'SELECT album, min(aasta) FROM albumid';
$valjund = mysqli_query($yhendus, $paring);  //mysql käsu saatmine andmebaasile


while($rida = mysqli_fetch_row($valjund)){ //vastus andmebaasist
//var_dump($rida);

    echo 'Vanim album andmebaasis: '.$rida[0].'<br>';
    echo 'Aasta: '.$rida[1].'<br>';

}
mysqli_free_result($valjund); //päringu vabastamine
mysqli_close($yhendus); //andmebaasi yhenduse sulgemine
echo '<hr>';

//Väljasta albumid, mille hind on kogu keskmisest suurem
include('config.php');
$paring = 'SELECT album FROM albumid where hind >(select avg(hind) from albumid)';
$valjund = mysqli_query($yhendus, $paring);  //mysql käsu saatmine andmebaasile


while($rida = mysqli_fetch_row($valjund)){ //vastus andmebaasist
//var_dump($rida);

    echo 'Keskmisest hinnast kallimad albumid: '.$rida[0].'<br>';


}
mysqli_free_result($valjund); //päringu vabastamine
mysqli_close($yhendus); //andmebaasi yhenduse sulgemine
echo '<hr>';

//Loo otsingukast, mis lubab valida,
// kas otsing toimub artistide või albumite veerust.
?>