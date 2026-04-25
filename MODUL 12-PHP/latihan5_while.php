<html>
<head>
    <title>Latihan 5 - While Loop</title>
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

// while = struktur perulangan dengan pengecekan kondisi SEBELUM eksekusi
// Inisialisasi dilakukan di luar loop (sebelum while)
// $counter = 10 → inisialisasi: counter dimulai dari 10 (quantity pertama)
$counter = 10;

// while ($counter <= 100) = kondisi: loop berlanjut selama counter ≤ 100
// Kondisi dicek setiap selesai 1 perulangan sebelum kode dijalankan
// Jika kondisi false, loop berhenti
while ($counter <= 100) {
    // <tr> = table row (membuat baris baru pada tabel)
    // <td> = table data (membuat sel/kotak untuk isi tabel)
    // Menampilkan quantity dan harga total dalam satu baris tabel
    echo "<tr><td>$counter</td><td>" . ($brush_price * $counter) . "</td></tr>";

    // Inkremen: counter bertambah 5 setiap selesai 1 perulangan
    // $counter += 5 → tambah 5 setiap perulangan
    // PENTING: Tanpa ini, loop akan infinite (tidak berhenti)!
    // Urutan perulangan: 10, 15, 20, 25, 30, ... 100 (total 19 perulangan)
    $counter += 5;
}
// Loop selesai (semua 19 perulangan sudah dijalankan)
// Tutup tabel HTML
echo "</table>";
?>

</body>
</html>
