<?php setcookie("nimi", 0); ?>
<?php
if (!isset($_COOKIE["nimi"])) {
    setcookie("nimi", 0, time()+3600);
    echo 'See on sinu esimene külastus';
} else {
    $kylastus = $_COOKIE["nimi"];
    $kylastus++;
    setcookie("nimi", $kylastus, time()+3600);
    echo "See on sinu $kylastus kord";
}
?>
