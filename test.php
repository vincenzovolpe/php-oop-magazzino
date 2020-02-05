<?php

include_once 'Prodotto.php';
include_once 'Telefono.php';
include_once 'Computer.php';

$prodotto_generico = new Prodotto('Borsa Computer', 850, 500, 22);

$computer = new Computer('HP Pavilion', 1000, 600, 22, 2.4, 8);

$telefono = new Telefono('Galaxy Note', 900, 550, 22, 'Samsung', 'Android');


//$telefono = new telefono();

echo "Primo prodotto generico in magazzino";
echo '<br>';
echo "Nome Prodotto: " . $prodotto_generico->nome;
echo '<br>';
echo "Prezzo di vendita prodotto: € " .$prodotto_generico->prezzo_vendita;
echo '<br>';
echo "----------------------------";
echo '<br>';
echo "Primo computer in magazzino";
echo '<br>';
echo "Nome Computer: " . $computer->nome;
echo '<br>';
echo "Prezzo di vendita computer: € " .$computer->getPrezzoInteroIvato();
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
echo "Brand Telefono: " .$telefono->brand;
echo '<br>';
echo "Sistema Operativo Telefono: " .$telefono->os;
echo '<br>';

?>
