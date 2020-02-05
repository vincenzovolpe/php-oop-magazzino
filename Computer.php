<?php

include_once 'Prodotto.php';

class Computer extends Prodotto {
    public $cpuFrequency;
    public $ram;

    public function __construct($nome, $prezzo_vendita, $prezzo_acquisto, $percIva, $cpuFrequency, $ram = null){
        parent::__construct($nome, $prezzo_vendita, $prezzo_acquisto, $percIva);
        $this->cpuFrequency = $cpuFrequency;
        $this->ram = $ram;
    }
}

?>
