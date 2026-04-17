<?php
echo "<h1>Operasi Aritmatik</h1><br>"; // judul halaman

$a = 3; // Variable dengan tipe data integer : "3"
$b = 5; // Variable dengan tipe data integer : "5"

echo "nilai a = $a <br>"; // Menampilkan nilai a : "3"
echo "nilai b = $b <br>"; // Menampilkan nilai b : "5"


$kurang = $a - $b;   // Pengurangan
$jumlah = $a + $b;  // Penjumlahan   
$bagi = $a / $b;   // Pembagian
$kali = $a * $b;  // Perkalian
$mod = $a % $b;  // Modulus (sisa bagi)

//var_dump digunakan untuk menampilkan informasi tentang tipe data dan nilai dari sebuah variabel "contohnya var_dump($jumlah) akan menampilkan tipe data dan nilai dari variabel jumlah : "int(8)"
echo "a + b = $a + $b = "; var_dump($jumlah); echo "<br>";  // Menampilkan hasil penjumlahan : "a ditambah b = 8"
echo "a - b = $a - $b = "; var_dump($kurang); echo "<br>"; // Menampilkan hasil pengurangan : "a dikurangi b = -2"
echo "a / b = $a / $b = "; var_dump($bagi); echo "<br>";  // Menampilkan hasil pembagian : "a dibagi b = 0.6"
echo "a * b = $a * $b = "; var_dump($kali); echo "<br>"; // Menampilkan hasil perkalian : "a dikali b = 15"
echo "a % b = $a % $b = "; var_dump($mod); echo "<br>"; // Menampilkan hasil modulus : "sisa bagi a dibagi b = 3"
?>