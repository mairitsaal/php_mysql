<?php
class opilased{
    var $eesnimi;
    var $perenimi;
    var $vanus;
    var $sugu = 'm';
    function ytle_tere(){
        echo "Tere maailm!";
    }
    function ytle_taisnimi() {
        echo $this->eesnimi.' '.$this->perenimi;
    }
}
$oppur1 = new opilased;
echo $oppur1->sugu.'<br>';
echo $oppur1->eesnimi='Mati'.'<br>';
echo $oppur1->perenimi='Maasikas'.'<br>';
echo $oppur1->vanus='20'.'<br>';
echo $oppur1->ytle_tere().'<br>';
echo $oppur1->ytle_taisnimi();

echo '<hr>';
