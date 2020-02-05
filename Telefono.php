<?php

include_once 'Prodotto.php';

class Telefono extends Prodotto {
    private $brand;
    private $os;
    
    public __construct($name, $price, $brand, $os = null){
        parent::__construct($name, $price);
        $this->brand = $brand;
        $this->os =$os;
}
?>
