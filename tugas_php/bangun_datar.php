<?php
/* Luas Persegi */
$sisi = 7;
$luas_persegi = $sisi * $sisi;
echo " Rumus Luas Persegi adalah : Luas = sisi x sisi <br>";
echo "$luas_persegi <br>";
echo "======================================================================= </br>";

/* Luas Persegi Panjang */
$panjang = 3;
$lebar = 4;
$luas_Persegi_Panjang = $panjang * $lebar ;
echo "Rumus luas persegi panjang adalah : Luas = panjang x lebar <br>";
echo "$luas_Persegi_Panjang <br>";
echo "======================================================================= </br>";

/* Luas Segitiga */
$Alas = 4;
$tinggi_Segitiga = 7;
$luas_Segitiga = 0.5 * $Alas * $tinggi_Segitiga;
echo "Rumus luas segitiga adalah : Luas = 0.5 x panjang alas x tinggi<br>";
echo "$luas_Segitiga <br>";
echo "======================================================================= </br>";

/* Luas Lingkaran */
$jari2 = 7;
$luas_Lingkaran = 3.14 * $jari2 * $jari2;
echo "Rumus luas lingkaran adalah : Luas =  phi x jari-jari lingkaran x jari-jari lingkaran <br>";
echo "$luas_Lingkaran <br>";
echo "======================================================================= </br>";

/* Luas Trapesium */
$sisi_A = 6;
$sisi_B = 9;
$tinggi = 12;
$luas_Trapesium = 0.5 * ($sisi_A + $sisi_B) * $tinggi;
echo "Rumus luas Trapesium adalah : Luas =  0.5 x (sisi_A + sisi_B) x tinggi <br>";
echo "$luas_Trapesium <br>";
?>