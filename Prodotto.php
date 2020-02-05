<?php
    class Prodotto {
        public $codice;
        public $nome;
        public $prezzo_vendita;
        public $prezzo_acquisto;
        public $descrizione;
        public $percSconto;
        public $percIva;

        public function __construct($nome, $prezzo_vendita, $prezzo_acquisto, $percIva) {
            $this->nome = $nome;
            $this->prezzo_vendita = $prezzo_vendita;
            $this->prezzo_acquisto = $prezzo_acquisto;
            $this->percIva = $percIva;
        }

        public function getPrezzoInteroIvato() {
            return $this->prezzo_vendita  * (1 + $this->percIva/100);
        }

        public function getPrezzoScontato() {
            return $this->getPrezzoInteroIvato() * (1 - $this->percSconto/100);
        }

    }


?>
