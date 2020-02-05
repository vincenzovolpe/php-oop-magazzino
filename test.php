<?php

include_once 'Prodotto.php';
include_once 'Telefono.php';
include_once 'Computer.php';

$prodotto_generico = new Prodotto('Borsa Computer', 100, 50, 22);

$computer = new Computer('HP Pavilion', 1000, 600, 22, 2.4, 8);

$telefono = new Telefono('Galaxy Note', 900, 550, 22, 'Samsung', 'Android');

$prodotto_generico->percSconto = 20;

$computer->percSconto = 50;

$telefono->percSconto = 30;


//$telefono = new telefono();

echo "Primo prodotto generico in magazzino";
echo '<br>';
echo "Nome Prodotto: " . $prodotto_generico->nome;
echo '<br>';
echo "Prezzo di vendita prodotto: € " .$prodotto_generico->prezzo_vendita;
echo '<br>';
echo "Prezzo scontato prodotto: € " .$prodotto_generico->getPrezzoScontato();
echo '<br>';
echo "----------------------------";
echo '<br>';
echo "Primo computer in magazzino";
echo '<br>';
echo "Nome Computer: " . $computer->nome;
echo '<br>';
echo "Prezzo di vendita computer: € " .$computer->getPrezzoInteroIvato();
echo '<br>';
echo "Prezzo scontato computer: € " .$computer->getPrezzoScontato();
echo '<br>';
echo "Frequenza CPU: " .number_format($computer->cpuFrequency,1,",",".") ." GHz";
echo '<br>';
echo "Memoria RAM: " .$computer->ram ." GB";
echo '<br>';
echo "----------------------------";
echo '<br>';
echo "Primo telefono in magazzino";
echo '<br>';
echo "Nome Telefono: " . $telefono->nome;
echo '<br>';
echo "Prezzo di vendita telefono: € " .$telefono->getPrezzoInteroIvato();
echo '<br>';
echo "Prezzo scontato computer: € " .$telefono->getPrezzoScontato();
echo '<br>';
echo "Brand Telefono: " .$telefono->brand;
echo '<br>';
echo "Sistema Operativo Telefono: " .$telefono->os;
echo '<br>';

?>
