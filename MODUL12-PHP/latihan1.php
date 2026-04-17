<html>
<head>
    <title>Latihan 1 - Pernyataan If</title>
</head>
<body>
<!--
Pernyataan if (Jika)
1. Buatlah script php untuk menentukan jenis kelamin.
Jika nilainya = M maka tampilkan "Laki-laki"
-->
<?php

// $Jenis_kelamin = variabel dengan tipe data string "M"
// = = operator assignment (menyimpan nilai ke variabel)
$Jenis_kelamin = "M";

// if = pernyataan kondisional (jika)
// == = operator perbandingan (sama dengan)
// () = kondisi yang akan dicek (true/false)
if ($Jenis_kelamin == "M") {
    // echo = perintah menampilkan output ke browser
    // Kode di dalam {} akan dijalankan jika kondisi true
    echo "Laki-laki";
}
?>
<!--
KESIMPULAN:
- Pernyataan if digunakan untuk mengecek suatu kondisi
- Jika kondisi benar (true), maka kode di dalam if akan dijalankan
- Dalam tugas ini, jika Jenis_kelamin = "M" maka tampilkan "Laki-laki"
- == = untuk perbandingan (jangan tertukar dengan = untuk assignment), 
- operator assignment adalah untuk menyimpan nilai, contohnya dalam kode tersebut $Jenis_kelamin = "M"
-->
</body>
</html>
