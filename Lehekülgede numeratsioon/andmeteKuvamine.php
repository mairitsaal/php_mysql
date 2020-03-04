<?php include('config.php'); ?>
<?php

//uudiseid ühel lehel
$uudiseid_lehel = 4;
//lehtede arvutamine
$uudiseid_kokku_paring = "SELECT COUNT('id') FROM uudised";
$lehtede_vastus = mysqli_query($yhendus, $uudiseid_kokku_paring);
$uudiseid_kokku = mysqli_fetch_array($lehtede_vastus);
$lehti_kokku = $uudiseid_kokku[0];
$lehti_kokku = ceil($lehti_kokku/$uudiseid_lehel);
echo 'Lehekülgi: ' .$lehti_kokku.'<br>';
echo 'Uudiseid kokku: '.$uudiseid_lehel.'<br>';
//kasutaja valik
if (isset($_GET['page'])) {
    $leht = $_GET['page'];
} else {
    $leht = 1;
}
//millest näitamist alustatakse
$start = ($leht-1)*$uudiseid_lehel;
//andmebaasist anmed
$paring = "SELECT *FROM uudised LIMIT $start, $uudiseid_lehel";
$vastus = mysqli_query($yhendus, $paring);
//väljastamine
while ($rida = mysqli_fetch_assoc($vastus)){
    echo '<h3>'.$rida['pealkiri'].'</h3>';
    echo '<p>'.$rida['uudis'].'</p>';
}
//kuvame lingid
$eelmine = $leht -1;
$jargmine = $leht + 1;
if ($leht>1) {
    echo "<a href=\"?pages=$eelmine\">Eelmine</a>";
}

if ($lehti_kokku >= 1) {
    for ($i=1; $i<=$lehti_kokku ; $i++) {
        if ($i==$leht) {
            echo "<b><a href=\"?page=$i\">$i</a></b> ";
        } else {
            echo "<a href=\"?page=$i\">$i</a> ";
        }

    }
}
 if ($leht<$lehti_kokku) {
     echo "<a href=\"?pages=$jargmine\">Järgmine</a>";
 }
?>