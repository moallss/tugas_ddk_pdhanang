<html>
<head>
    <title>Latihan 4 - Pernyataan Switch</title>
</head>
<body>
<!--
Pernyataan switch
Buatlah program untuk menentukan kelulusan seorang siswa terhadap Mata Pelajaran DDK
dengan kisaran nilai :
86-100 nilainya "A" Keterangan "Sangat Baik"
76-85 nilainya "B" Keterangan "Baik"
66-75 nilainya "C" Keterangan "Cukup"
0-65 nilainya "D" Keterangan "Kurang"
selain itu pesannya Nilai Diluar Range

// >= = operator perbandingan "lebih besar dari atau sama dengan", artinya nilai harus 86 (sama) atau lebih, contoh nilai86 atau lebih besar (86, 87, 88, … 100)
// <= = operator perbandingan "lebih kecil dari atau sama dengan", artinya nilai harus 100 (sama) atau kurang, contoh nilai 100 atau kurang (99, 98, 97, 96, 95, 94, 93, 92, 91, 90, 89, 88, 87, 86)
-->


<?php
// $nilai = variabel untuk menyimpan nilai siswa
$nilai = 100;

// Langkah 1: Tentukan grade menggunakan if-elseif
// Ini diperlukan karena switch tidak bisa handle range (kisaran)
if ($nilai >= 86 && $nilai <= 100) {
    // $grade = variabel untuk menyimpan nilai huruf (grade)
    $grade = "A";
} elseif ($nilai >= 76 && $nilai <= 85) {
    $grade = "B";
} elseif ($nilai >= 66 && $nilai <= 75) {
    $grade = "C";
} elseif ($nilai >= 0 && $nilai <= 65) {
    $grade = "D";
} else {
    // String kosong jika nilai diluar range
    $grade = "";
}

// Langkah 2: Gunakan switch untuk menampilkan output
// switch = struktur percabangan alternatif if-elseif
// ($grade) = variabel yang nilainya akan dicocokkan dengan case
switch ($grade) {
    // case = pilihan nilai yang dicocokkan
    // "A" = nilai yang dibandingkan dengan $grade
    case "A":
        echo "Nilai Anda A - Sangat Baik";
        // break = hentikan eksekusi switch (wajib ada!)
        // Tanpa break, akan lanjut ke case berikutnya (fall-through)
        break;
    
    case "B":
        echo "Nilai Anda B - Baik";
        break;
    
    case "C":
        echo "Nilai Anda C - Cukup";
        break;
    
    case "D":
        echo "Nilai Anda D - Kurang";
        break;
    
    // default = dijalankan jika tidak ada case yang cocok
    // Mirip seperti else pada if-else
    default:
        echo "Nilai Diluar Range";
        break;
}
// Catatan: switch lebih rapi untuk banyak pilihan nilai tetap
?>

<!--
KESIMPULAN:
- Switch digunakan untuk memilih satu dari banyak kemungkinan
- case = pilihan yang tersedia
- break = menghentikan eksekusi setelah case yang cocok ditemukan
- default = dijalankan jika tidak ada case yang cocok
- Perbedaan dengan if-elseif: switch lebih efisien untuk banyak pilihan nilai yang sama

CATATAN PENTING:
- switch = alternatif if-elseif untuk banyak pilihan
- case "X": = cocokkan jika nilai sama dengan "X"
- break; = WAJIB ada agar tidak lanjut ke case berikutnya
- default = seperti else (jalankan jika tidak ada yang cocok)
- Switch cocok untuk nilai exact, bukan range
-->
</body>
</html>
