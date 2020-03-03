<h2>Tagasiside</h2>
<form action="" method="post">
    Teie nimi:<br>
    <input name="nimi" type="text">
    <br>
    Teie email:<br>
    <input name="email" type="text">
    <br>
    Sõnum:<br>
    <textarea cols="30" rows="10" name="sonum"></textarea>
    <br>
    <input value="saada sõnum" type="submit">
</form>
<?php
//andmed vormist
//kas väljad on täidetud
if (isset($_POST['nimi']) && isset($_POST['email']) && isset($_POST['sonum'])){
    if (!empty($nimi) && !empty($email) && !empty($sonum)) {
            if (strlen($nimi)>25 || strlen($email)> 25 || strlen($sonum)>500 ) {

            } else {

$nimi = trim(addcslashes($_POST['nimi']));
$email = trim(addslashes($_POST['email']));
$sonum = trim(addslashes($_POST['sonum']));
//emaili andmed
$to = 'mairit.saal@khk.ee';
$subject = 'Tagasiside kodulehelt';
$message = $sonum;
$from = 'From: '.$nimi.'<'.$email.'>';
//emaili saatmine
if(mail($to, $subject, $message, $from)) {
    echo "Email saadetud!<br> Täname tagasiside eest!";
    echo "<meta http-equiv=\"refresh\ content=\"2;URL='10_email.php'\">";
    exit();
} else {
    echo "Teie emaili ei saadetud ära!";
}
}
    } else {
    $error = 'Palun täitke kõik väljad!';
    }
}

?>

