<?php
echo "<h1>Variasi Konversi Tipe Data</h1><br>";

// 1. Konversi Manual / Explicit Casting
$harga = "750.85 Rupiah"; // Variable dengan tipe data string yang berisi angka dan teks
echo "<b>1. Explicit Casting:</b><br>"; // Menampilkan nilai awal
echo "Data Awal (String): $harga <br>"; // Menggunakan (float) untuk mengubah string menjadi float/double

$floatHarga = (float) $harga; // Dipaksa menjadi float/double
echo "Hasil (float): $floatHarga <br>"; // Menampilkan hasil konversi ke float : "750.85"

$intHarga = (int) $harga; // Dipaksa menjadi integer
echo "Hasil (int): $intHarga <br><br>";  // Menampilkan hasil konversi ke integer : "750"

// 2. Konversi Otomatis / Implicit Conversion (Type Juggling)
echo "<b>2. Konversi Otomatis (Implicit):</b><br>";
$angkaString = "10"; // Variable dengan tipe data string yang berisi angka : "10"
$angkaInteger = 5; // Variable dengan tipe data integer : "5"

// PHP otomatis mengubah $angkaString menjadi integer agar bisa dijumlahkan
$total = $angkaString + $angkaInteger; // Melakukan penjumlahan antara string dan integer, hasilnya akan otomatis dikonversi menjadi integer : "15"

//gettype() digunakan untuk menampilkan tipe data dari sebuah variabel "contohnya gettype($total) akan menampilkan tipe data dari variabel total : "integer"
echo "String '10' + Integer 5 = $total (Tipe: " . gettype($total) . ")<br>"; // Menampilkan hasil penjumlahan dan tipe data : "String '10' + Integer 5 = 15 (Tipe: integer)"

// 3. Menggunakan settype()

// settype() digunakan untuk mengubah tipe data dari sebuah variabel "contohnya settype($bayar, "double") akan mengubah tipe data variabel bayar menjadi double"
echo "<br><b>3. Menggunakan settype():</b><br>";
$bayar = "500.77 Rupiah"; // Variable dengan tipe data string yang berisi angka dan teks
settype($bayar, "double"); // Mengubah tipe data $bayar menjadi double (float) 
echo "Tipe Data Double : $bayar <br>"; // Hasil konversi ke double : "500.77"

// Mengubah tipe data $bayar menjadi integer
settype($bayar, "integer"); // Mengubah tipe data $bayar menjadi integer, hasilnya akan menjadi 500 karena konversi ke integer akan mengabaikan angka desimal dan teks setelahnya
echo "Tipe Data Integer : $bayar <br>"; // Hasil konversi ke integer : "500"
?>