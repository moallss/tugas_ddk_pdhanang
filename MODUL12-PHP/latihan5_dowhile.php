<html>
<head>
    <title>Latihan 5 - Do-While Loop</title>
</head>
<body>

<?php
// $brush_price = variabel untuk menyimpan harga satuan kuas
// Tipe data: integer (bilangan bulat)
// Harga per 1 kuas = 5
$brush_price = 5;

echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";

// do-while = struktur perulangan dengan pengecekan kondisi SETELAH eksekusi
// Inisialisasi dilakukan di luar loop (sebelum do)
// $counter = 10 → inisialisasi: counter dimulai dari 10 (quantity pertama)
$counter = 10;

// do { ... } while (kondisi);
// do = jalankan kode dulu, baru cek kondisi
// while ($counter <= 100) = kondisi: loop berlanjut selama counter ≤ 100
// Kondisi dicek setiap selesai 1 perulangan setelah kode dijalankan
// Body loop dijalankan MINIMAL 1 kali meskipun kondisi salah
do {
    // <tr> = table row (membuat baris baru pada tabel)
    // <td> = table data (membuat sel/kotak untuk isi tabel)
    // Menampilkan quantity dan harga total dalam satu baris tabel
    echo "<tr><td>$counter</td><td>" . ($brush_price * $counter) . "</td></tr>";

    // Inkremen: counter bertambah 5 setiap selesai 1 perulangan
    // $counter += 5 → tambah 5 setiap perulangan
    // Urutan perulangan: 10, 15, 20, 25, 30, ... 100 (total 19 perulangan)
    $counter += 5;
}
// while ($counter <= 100) = terus loop selama counter ≤ 100
// Titik koma (;) setelah while() WAJIB ada!
while ($counter <= 100);
// Loop selesai (semua 19 perulangan sudah dijalankan)

// Tutup tabel HTML
echo "</table>";
?>

</body>
</html>
