<html>
<head>
    <title>Latihan 5 - Increment 5</title>
</head>
<body>

<?php
// $brush_price = variabel untuk menyimpan harga per unit (5)
$brush_price = 5;

// Membuat tabel HTML dengan border dan posisi center
// \" = escape character agar tanda kutip tidak mengakhiri string
echo "<table border=\"1\" align=\"center\">";

// Header tabel: Quantity dan Price
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";

// for = loop/perulangan
// Struktur: for (inisialisasi; kondisi; inkremen)
// $counter = 10 = mulai dari 10
// $counter <= 100 = terus loop selama counter kurang dari atau sama dengan 100
// $counter += 5 = tambah 5 setiap iterasi (increment)
for ($counter = 10; $counter <= 100; $counter += 5) {
    // Menampilkan baris tabel dengan quantity dan price
    // $brush_price * $counter = harga × quantity
    echo "<tr><td>$counter</td><td>" . ($brush_price * $counter) . "</td></tr>";
}

echo "</table>";
?>

<!--
KESIMPULAN:
Apa yang terjadi dengan $counter += 5?

- Asli ($counter += 10): 10, 20, 30, 40, 50, 60, 70, 80, 90, 100 → 10 baris
- Diubah ($counter += 5): 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100 → 19 baris
- Hasil: Jumlah baris lebih banyak (hampir 2x lipat)

CATATAN PENTING:
- $counter += 5 = shorthand untuk $counter = $counter + 5
- Increment lebih kecil = lebih banyak iterasi
- Rumus: (max - min) / increment + 1 = jumlah iterasi
- Contoh: (100 - 10) / 5 + 1 = 18 + 1 = 19 iterasi
-->
</body>
</html>
