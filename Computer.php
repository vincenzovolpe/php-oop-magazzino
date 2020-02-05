<?php

include_once 'Prodotto.php';

class Computer extends Prodotto {
    private $cpuFrequency;
    private $ram;

    public function __construct($name, $price, $frequency, $ram = null){
        parent::__construct($name, $price);
        $this->frequency = $frequency;
        $this->ram =$ram;
    }
}

?>
