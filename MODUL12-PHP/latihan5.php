<html>
<head>
<title>Latihan For</title>
</head>
<body>
<?php
// $brush_price = nama variabel untuk menyimpan harga satuan kuas
// Tipe data: integer (bilangan bulat)
$brush_price = 5;

echo "<table border=\"1\" align=\"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</ th></tr>";

/*
1. for = struktur perulangan (looping)
2. Struktur: for (inisialisasi; kondisi; increment)
    - Inisialisasi: variabel counter dimulai dari 0
    - Kondisi: loop selama counter (jumlah kuas) kurang dari atau sama dengan 100
    - Increment: counter bertambah 1 setiap iterasi, (iterasi adalah perulangan, 1 kali eksekusi kode di dalam loop)
3. $counter = 10 = inisialisasi: counter dimulai dari 10
    - counter : variabel untuk menyimpan quantity (jumlah kuas)
4. counter <= 100 = kondisi: loop selama counter (jumlah kuas) ≤ 100
5. $counter += 10 = increment: counter bertambah 10 setiap iterasi
6. Iterasi: 10, 20, 30, 40, 50, 60, 70, 80, 90, 100 (total 10 perulangan, 1 kali eksekusi kode di dalam loop) 
*/

for ($counter = 10; $counter <= 100; $counter += 10) {
    echo "<tr><td>";
    echo " $counter";
    echo "</td><td>";
    
    // Hitung dan tampilkan harga total
    // Rumus: harga satuan × quantity
    // Iterasi (1 kali perulangan) 1: 5 × 10 = 50
    // Iterasi (1 kali perulangan) 2: 5 × 20 = 100
    // Iterasi (1 kali perulangan) 3: 5 × 30 = 150
    // Iterasi (1 kali perulangan) 4: 5 × 40 = 200
    // Iterasi (1 kali perulangan) 5: 5 × 50 = 250
    // Iterasi (1 kali perulangan) 6: 5 × 60 = 300
    // Iterasi (1 kali perulangan) 7: 5 × 70 = 350
    // Iterasi (1 kali perulangan) 8: 5 × 80 = 400
    // Iterasi (1 kali perulangan) 9: 5 × 90 = 450
    // Iterasi (1 kali perulangan) 10: 5 × 100 = 500
    // Jika sudah mencapai 100 quantity maka akan keluar dari loop, karena nilai counter sudah mencapai 100 karena ada operator <= 100
    echo $brush_price * $counter; // 5 * 10 
    echo "</td></tr>";
}
// Loop selesai, tutup tabel
echo "</table>";
?>
</body>
</html>