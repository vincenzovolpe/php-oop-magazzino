<?php
    class Prodotto {
        public $codice;
        public $nome;
        public $prezzo_vendita;
        public $prezzo_acquisto;
        public $descrizione;
        public $percSconto;
        public $percIva;

        public function __construct($_nome, $_prezzo_vendita, $_prezzo_acquisto, $_percIva) {
            $this->nome = $_nome;
            $this->prezzo_vendita = $_prezzo_vendita;
            $this->prezzo_acquisto = $_prezzo_acquisto;
            $this->percIva = $_percIva;
        }

        public function getPrezzoInteroIvato() {
            return $prezzo_vendita  * (1+$percIva/100);
        }

        public function getPrezzoScontato() {
            return getPrezzoInteroIvato() * (1-$percSconto/100);
        }

    }


?>
