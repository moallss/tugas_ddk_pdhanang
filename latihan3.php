<?php
echo "<h1>Operasi Aritmatik</h1><br>"; // judul halaman

$a = 8; // Variable dengan tipe data integer : "8"
$b = 2; // Variable dengan tipe data integer : "2"

echo "nilai a = $a <br>"; // Menampilkan nilai a : "8"
echo "nilai b = $b <br>"; // Menampilkan nilai b : "2"

// Perhitungan aritmatika
$jumlah = $a + $b;    // Penjumlahan
$kurang = $a - $b;   // Pengurangan
$bagi = $a / $b;    // Pembagian
$kali = $a * $b;   // Perkalian
$mod = $a % $b;   // Modulus (sisa bagi)

echo "a + b = $a + $b = $jumlah <br>";   // Menampilkan hasil penjumlahan : "a ditambah b = 10" 
echo "a - b = $a - $b = $kurang <br>";  // Menampilkan hasil pengurangan : "a dikurangi b = 6"
echo "a / b = $a / $b = $bagi <br>";   // Menampilkan hasil pembagian : "a dibagi b = 4"
echo "a * b = $a * $b = $kali <br>";  // Menampilkan hasil perkalian : "a dikali b = 16"
echo "a % b = $a % $b = $mod <br>";  // Menampilkan hasil modulus : "sisa bagi a dibagi b = 0"
?>