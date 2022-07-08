<?php
include 'class_matematika.php';

$math = new matematika();
$jari = 20;
$kel_lingkaran = $math->keliling_lingkaran($jari);
$luas_lingkaran = $math->luas_lingkaran($jari);

echo "Menghitung Keliling Lingkaran dan Luas Lingkaran <br>";
echo "Jari-Jari : ".$jari."<br>";
echo "Keliling Lingkaran : ".$kel_lingkaran."<br>";
echo "Luas Lingkaran : ".$luas_lingkaran. "<br>";
?>