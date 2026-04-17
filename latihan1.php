<?php   
echo "<h1> Variable dan Tipe Data </h1><br>";
// Variable
$a = 5; // Varible dengan tipe data integer
$b = 2.5; // Variable dengan tipe data float
$komentar = "Selamat datang di pemrograman PHP"; // Variable dengan tipe data string
$status = true; // Variable dengan tipe data boolean
$buah = ["apel", "jeruk", "mangga"]; // Variable dengan tipe data array
$kosong = null; // Variable dengan tipe data null

// Menampilkan dengan echo 
echo "Nilai variable a adalah: $a <br>";
echo "Nilai variable b adalah: $b <br>";
echo "Nilai variable komentar adalah: $komentar <br>";
echo "<hr>";
//Menampilkan Boolean
echo "Nilai variable status (boolean) adalah: ";
var_dump(value: $status);
echo "<br><br>";
// Menampilkan Array
echo "Isi variable array buah adalah: <br>";
echo "<pre>"; //<pre> digunakan untuk menampilkan array dengan format yang lebih rapi
print_r(value: $buah);
echo "</pre>";
// Menampilkan Null
echo "Nilai variable kosong (null) adalah: ";
var_dump(value: $kosong);
?>
