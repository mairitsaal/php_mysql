

<?php include('config.php'); ?>

<?php
//Väljundina täienda olemasoelvat näidet nii, et ma näeksin ostu sooritanud kliendi nime
    $paring = "SELECT arved.arve_nr, albumid.artist, albumid.album, kliendid.eesnimi, kliendid.perenimi FROM arved JOIN albumid ON arved.albumid_id=albumid.id 
JOIN kliendid ON arved.id=kliendid.id";
    $valjund = mysqli_query($yhendus, $paring);
    while($rida = mysqli_fetch_assoc($valjund)){
        echo 'Arve number: '.$rida['arve_nr'].'<br>';
        echo 'Toote nimetus: '.$rida['artist'].' - '.$rida['album'].'<br>';
        echo 'Kliendi nimi: '.$rida['eesnimi'].'  '.$rida['perenimi'].'<br><br>';
    }
    mysqli_free_result($valjund);
    mysqli_close($yhendus);

    ?>