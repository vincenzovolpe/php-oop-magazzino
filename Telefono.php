<?php

include_once 'Prodotto.php';

class Telefono extends Prodotto {
    public $brand;
    public $os;

    public function __construct($nome, $prezzo_vendita, $prezzo_acquisto, $percIva, $brand, $os = null) {
        parent::__construct($nome, $prezzo_vendita, $prezzo_acquisto, $percIva);
        $this->brand = $brand;
        $this->os = $os;
    }
}
?>
