<?php
class opilased{
    var $eesnimi;
    var $perenimi;
    var $vanus;
    var $sugu = 'm';
}
$oppur1 = new opilased;
        echo $oppur1->sugu.'<br>';
        echo $oppur1->eesnimi='Mati'.'<br>';
        echo $oppur1->perenimi='Maasikas'.'<br>';
        echo $oppur1->vanus='20'.'<br>';

        echo '<hr>';

$oppur2 = new opilased;
    echo $oppur2->sugu='n'.'<br>';
    echo $oppur2->eesnimi='Kati'.'<br>';
    echo $oppur2->perenimi='Kaalikas'.'<br>';
    echo $oppur2->vanus='22'.'<br>';

echo '<hr>';
    var_dump($oppur1);
echo '<hr>';
    var_dump($oppur2);
    ?>