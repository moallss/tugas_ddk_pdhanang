<html>
<head>
    <title>Latihan 3 - Pernyataan If-Elseif</title>
</head>
<body>

<!--
Pernyataan if-elseif
Buatlah program untuk menentukan kelulusan seorang siswa terhadap Mata Pelajaran DDK
dengan kisaran nilai :
86-100 nilainya "A" Keterangan "Sangat Baik"
76-85 nilainya "B" Keterangan "Baik"
66-75 nilainya "C" Keterangan "Cukup"
0-65 nilainya "D" Keterangan "Kurang"
selain itu pesannya Nilai Diluar Range
-->

<?php
// $nilai = variabel untuk menyimpan nilai siswa dengan tipe data integer : "100", code ini di gunakan untuk menentukan inputan jika ada from input, lalu di tentukan di code if, elseif, else
$nilai = 85;

// if = pernyataan kondisional (jika)
// () = kondisi yang akan dicek (true/false)
// >= = operator perbandingan "lebih besar dari atau sama dengan", artinya nilai harus 86 (sama) atau lebih, contoh nilai86 atau lebih besar (86, 87, 88, … 100)
// <= = operator perbandingan "lebih kecil dari atau sama dengan", artinya nilai harus 100 (sama) atau kurang, contoh nilai 100 atau kurang (99, 98, 97, 96, 95, 94, 93, 92, 91, 90, 89, 88, 87, 86)
// && = operator AND (dan) - kedua kondisi harus true agar blok dijalankan, dan juga untuk membatasi range agar nilai tidak melebihi batas yang ditentukan, contoh nya jika nilai lebih dari 100 maka tidak akan dijalankan
// $nilai >= 86 = nilai harus 86 atau lebih
// $nilai <= 100 = nilai harus 100 atau kurang
if ($nilai >= 86 && $nilai <= 100) { 
    echo "Nilai Anda A - Sangat Baik";
} 
// elseif = jika tidak, cek kondisi lain (gabungan else + if)
// Digunakan untuk kondisi tambahan setelah if pertama
elseif ($nilai >= 76 && $nilai <= 85) {
    echo "Nilai Anda B - Baik";
} 
elseif ($nilai >= 66 && $nilai <= 75) {
    echo "Nilai Anda C - Cukup";
} 
elseif ($nilai >= 0 && $nilai <= 65) {
    echo "Nilai Anda D - Kurang";
} 
// else = jika tidak (semua kondisi di atas salah)
// else tidak perlu kondisi, langsung dijalankan jika semua if/elseif false
else {
    // Contoh: nilai negatif atau lebih dari 100
    echo "Nilai Diluar Range";
}
// Catatan: kondisi dicek berurutan dari atas, berhenti saat ada yang true
?>

<!--
KESIMPULAN:
- Pernyataan if-elseif digunakan untuk lebih dari dua kondisi
- Kondisi dicek satu per satu dari atas
- Jika ada kondisi yang benar, maka kondisi lainnya tidak dicek lagi
- else digunakan jika semua kondisi salah artinya tidak ada yang true
-->
</body>
</html>
