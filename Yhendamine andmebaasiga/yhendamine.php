<?php
//***protseduuriline***//
//minu andmed
$db_server = 'localhost';
$db_database = 'muusikapood';
$db_user = 'juhan';
$db_password = 'juhan';
//ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_user, $db_password, $db_database);
//yhenduse kontroll
if(!$yhendus){
    die('Ei saa ühendust andmebaasiga');
}
//päring
$paring = 'SELECT * FROM albumid';
$valjund = mysqli_query($yhendus, $paring);

?>
