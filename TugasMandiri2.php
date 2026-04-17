<?php
echo "<h2>Program Menghitung Luas & Keliling Bangun Datar</h2>";

// --- 1. Segitiga Siku-siku ---
$alasSegitiga = 6; // Variable dengan tipe data integer yang menyimpan nilai alas segitiga : "6"
$tinggiSegitiga = 8; // Variable dengan tipe data integer yang menyimpan nilai tinggi segitiga : "8"

// Mencari sisi miring menggunakan rumus Pythagoras (a^2 + b^2 = c^2) 
$sisiMiring = sqrt(pow($alasSegitiga, 2) + pow($tinggiSegitiga, 2));  // Hasil perhitungan sisi miring segitiga : "10"

$luasSegitiga = 0.5 * $alasSegitiga * $tinggiSegitiga; // Rumus luas segitiga : 0.5 x alas x tinggi
$kelilingSegitiga = $alasSegitiga + $tinggiSegitiga + $sisiMiring; // Rumus keliling segitiga : alas + tinggi + sisi miring : 6 + 8 + 10 = "24"

echo "<b>1. Segitiga Siku-siku</b> (Alas: $alasSegitiga, Tinggi: $tinggiSegitiga)<br>"; 
echo "- Luas : $luasSegitiga <br>";
echo "- Keliling : $kelilingSegitiga <br><br>";


// --- 2. Persegi ---
$sisiPersegi = 5; // Variable dengan tipe data integer yang menyimpan nilai sisi persegi : "5"

$luasPersegi = $sisiPersegi * $sisiPersegi; // Rumus luas persegi : sisi x sisi : 5 x 5 = "25"
$kelilingPersegi = 4 * $sisiPersegi; // Rumus keliling persegi : 4 x sisi : 4 x 5 = "20"

echo "<b>2. Persegi</b> (Sisi: $sisiPersegi)<br>"; 
echo "- Luas : $luasPersegi <br>";
echo "- Keliling : $kelilingPersegi <br><br>";


// --- 3. Persegi Panjang ---
$panjangPP = 10; // Variable dengan tipe data integer yang menyimpan nilai panjang persegi panjang : "10"
$lebarPP = 4; // Variable dengan tipe data integer yang menyimpan nilai lebar persegi panjang : "4"

$luasPP = $panjangPP * $lebarPP; // Rumus luas persegi panjang : panjang x lebar : 10 x 4 = "40"
$kelilingPP = 2 * ($panjangPP + $lebarPP); // Rumus keliling persegi panjang : 2 x (panjang + lebar) : 2 x (10 + 4) = "28"

echo "<b>3. Persegi Panjang</b> (Panjang: $panjangPP, Lebar: $lebarPP)<br>";
echo "- Luas : $luasPP <br>";
echo "- Keliling : $kelilingPP <br><br>";


// --- 4. Lingkaran ---
$jariJari = 7; // Variable dengan tipe data integer yang menyimpan nilai jari-jari lingkaran : "7"

// pi() menghasilkan nilai 3.14159...
$luasLingkaran = pi() * pow($jariJari, 2);  // Rumus luas lingkaran : π x r^2 : 3.14159 x 7^2 = "153.94"
$kelilingLingkaran = 2 * pi() * $jariJari;  // Rumus keliling lingkaran : 2 x π x r : 2 x 3.14159 x 7 = "43.98"

echo "<b>4. Lingkaran</b> (Jari-jari: $jariJari)<br>";
// round() digunakan untuk membulatkan hasil desimal menjadi 2 angka di belakang koma
echo "- Luas : " . round($luasLingkaran, 2) . "<br>"; 
echo "- Keliling : " . round($kelilingLingkaran, 2) . "<br>";


/*
NOTE :
1. sqrt() digunakan untuk menghitung akar kuadrat dari sebuah angka "contohnya sqrt(16) akan menghasilkan 4 karena 4 x 4 = 16"
2. pow() digunakan untuk menghitung pangkat dari sebuah angka "contohnya pow(2, 3) akan menghasilkan 8 karena 2 pangkat 3 = 2 x 2 x 2 = 8"
3. pi() digunakan untuk menghasilkan nilai π (pi) yaitu 3.14159...  
4. round() digunakan untuk membulatkan angka desimal "contohnya round(3.14159, 2) akan menghasilkan 3.14 karena membulatkan angka desimal menjadi 2 angka di belakang koma"
*/

?>


