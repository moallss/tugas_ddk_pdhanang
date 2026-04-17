<html>
<head>
    <title>Tugas Mandiri 3 - MODUL 12</title>
</head>
<body>
    <h1>Tugas Mandiri 3 - MODUL 12 PHP</h1>
    <h2>Pola Segitiga Bintang</h2>
    <h3>a. Segitiga Naik</h3>

    <pre>
<?php
// for = struktur perulangan untuk mengulang kode secara otomatis
// Struktur: for (inisialisasi; kondisi; increment)
// Penjelasan masing-masing bagian:
// $i = 1 → inisialisasi: counter dimulai dari 1 (baris pertama)
// $i <= 5 = kondisi: loop berlanjut selama counter ≤ 5 (total 5 baris)
// $i++ = increment: counter bertambah 1 setiap selesai 1 perulangan
// Loop luar ($i) = kontrol baris (dari 1 sampai 5)
for ($i = 1; $i <= 5; $i++) {
    // for = loop dalam (nested loop) untuk mencetak bintang
    // $j = 1 → inisialisasi: counter bintang dimulai dari 1
    // $j <= $i = kondisi: jumlah bintang mengikuti nomor baris
    // $j++ = increment: counter bertambah 1 setiap selesai 1 perulangan
    // Loop dalam ($j) = kontrol kolom (jumlah bintang per baris)
    // Baris 1 ($i=1) = 1 bintang, Baris 2 ($i=2) = 2 bintang, dst.
    for ($j = 1; $j <= $i; $j++) {
        // echo "*" = cetak bintang tanpa newline
        echo "*";
    }
    // echo "\n" = newline (ganti baris)
    // \n = escape character untuk baris baru
    // Tanpa ini, semua bintang akan tampil dalam 1 baris
    echo "\n";
}
?>
    </pre>

    <h3>b. Segitiga Turun</h3>
    <pre>
<?php
// for = struktur perulangan untuk segitiga turun
// Struktur: for (inisialisasi; kondisi; decrement)
// Penjelasan masing-masing bagian:
// $i = 5 → inisialisasi: counter dimulai dari 5 (baris pertama paling banyak)
// $i >= 1 = kondisi: loop berlanjut selama counter ≥ 1
// $i-- = decrement: counter berkurang 1 setiap selesai 1 perulangan
// -- = operator decrement (shorthand untuk -1)
// Loop luar ($i) = kontrol baris (dari 5 sampai 1)
for ($i = 5; $i >= 1; $i--) {
    // for = loop dalam (nested loop) untuk mencetak bintang
    // $j = 1 → inisialisasi: counter bintang dimulai dari 1
    // $j <= $i = kondisi: jumlah bintang mengikuti nomor baris
    // $j++ = increment: counter bertambah 1 setiap selesai 1 perulangan
    // Loop dalam ($j) = kontrol kolom (jumlah bintang per baris)
    // Baris 1 ($i=5) = 5 bintang, Baris 2 ($i=4) = 4 bintang, dst.
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
?>
    </pre>

</body>
</html>
