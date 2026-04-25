<html>
<head>
    <title>Latihan 2 - Pernyataan If-Else</title>
</head>
<body>
<!--
Pernyataan if-else (Jika Tidak)
Buatlah sebuah script php untuk menentukan jenis kelamin.
Jika nilainya = M maka jk = LAKI-LAKI,
selain itu jk = WANITA.
-->

<?php
// $jenis_kelamin = variabel dengan tipe data string "M"    
$jenis_kelamin = "M";

// if = jika kondisi benar
// == = operator perbandingan "sama dengan"
if ($jenis_kelamin == "F") {
    // Kode ini dijalankan jika $jenis_kelamin = "M" 
    echo "Laki-Laki";
} 
// else = jika tidak (kondisi if salah)
// else tidak perlu kondisi, langsung dijalankan jika if false (salah)
else {
    // Kode ini dijalankan jika $jenis_kelamin TIDAK = "M"
    echo "Perempuan";
}
?>

<!--
KESIMPULAN:
- Pernyataan if-else digunakan untuk dua pilihan kondisi
- Jika kondisi if benar → jalankan kode di if
- Jika kondisi if salah → jalankan kode di else
- Dalam kasus ini: jika "M" → Laki-laki, selain itu → Perempuan

CATATAN PENTING:
- else = tidak perlu kondisi, langsung "selain itu"
- if dan else tidak bisa dijalankan bersamaan
-->
</body>
</html>
