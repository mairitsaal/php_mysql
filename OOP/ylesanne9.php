<?php
class auto {
    var $varv;
    var $tootja;
    var $kiirus=0;
    function kiirendus(){
        while($this->kiirus <= 90){
            $this->kiirus += 10;
            echo 'Kiirus: '.$this->kiirus;
            echo '<br>';
        }
    }
}
$audi = new auto;
$audi->kiirendus();