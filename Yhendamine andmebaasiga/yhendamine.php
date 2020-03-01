<?php
//***protseduuriline***//
//sinu andmed
$db_server = 'localhost';
$db_andmebaas = 'muusikapood';
$db_kasutaja = 'juhan';
$db_salasona = 'juhan';
//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
//ühenduse kontroll
if(!$yhendus){
    die('Ei saa ühendust andmebaasiga');
}
//päring
$paring = 'SELECT * FROM albumid';
$valjund = mysqli_query($yhendus, $paring);


while($rida = mysqli_fetch_row($valjund)){
    var_dump($rida);
}
?>
