<?php
echo "<h1>Operator Assignment</h1><hr>";
//Variabel awal
$x = 10; // Nilai awal
echo "Nilai awal x = $x <br><br>"; // Menampilkan nilai awal x : "10"

// Penjumlahan
$a = $x;    // Menyalin nilai x ke a
$a += 5;    // x = x + 5
echo "x += 5 hasilnya $a <br>"; // Menampilkan hasil penjumlahan : "x ditambah 5"

// Pengurangan
$b = $x;    // Menyalin nilai x ke b
$b -= 3;    // x = x - 3
echo "x -= 3 -> $b <br>"; // Menampilkan hasil pengurangan : "x dikurangi 3"

// Perkalian
$c = $x;    // Menyalin nilai x ke c
$c *= 2;    // x = x * 2
echo "x *= 2 -> $c <br>"; // Menampilkan hasil perkalian : "x dikali 2"

// Pembagian
$d = $x;    // Menyalin nilai x ke d
$d /= 2;    // x = x / 2
echo "x /= 2 -> $d <br>"; // Menampilkan hasil pembagian : "x dibagi 2"

// Modulus (sisa bagi)
$e = $x;    // Menyalin nilai x ke e
$e %= 3;    // x = x % 3
echo "x %= 3 -> $e <br>"; // Menampilkan hasil modulus : "sisa bagi x dibagi 3"

// Pangkat (PHP 5.6+)
$f = $x;    // Menyalin nilai x ke f
$f **= 2;   // x = x ** 2
echo "x **= 2 -> $f <br>"; // Menampilkan hasil pangkat : "x pangkat 2"

// Penggabungan String
$teks = "Belajar";  // Nilai awal
$teks .= " PHP";    // $teks = $teks . " PHP"
echo "<br>Operator .= $teks <br>"; // Menampilkan hasil penggabungan string : "Belajar PHP"
?>