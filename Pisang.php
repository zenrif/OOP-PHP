<?php

include 'Buah.php';
include 'Rasa.php';

class Pisang extends Buah implements Rasa
{

    public function caraMakan()
    {
        echo "Membuka kulit pisang";
        echo "<br>" . "Makan pisang";
        echo "<br>" . "Nyam nyam";
    }

    public function setRasa()
    {
        return "Rasa pisang manis";
    }
}

$pisang = new Pisang();
$pisang->setWarna("Kuning");

echo "Cara memakan pisang : " . "<br>";
$pisang->caraMakan();
echo "<br>" . "Warna pisang " . $pisang->getWarna();
echo "<br>" . $pisang->setRasa();
