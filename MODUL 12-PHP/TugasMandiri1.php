<html>
<head>
    <title>Tugas Mandiri 1 - MODUL 12</title>
</head>
<body>
    <h1>Tugas Mandiri 1 - MODUL 12 PHP</h1>
    <p>Menampilkan bilangan bulat positif dengan pertambahan angka = 2 sampai 100</p>

    <?php
    // $counter = variabel untuk menyimpan bilangan bulat
    // Tipe data: integer (bilangan bulat)
    // Mulai dari 2 (bilangan genap pertama)
    $counter = 2;

    // $no = variabel untuk menyimpan nomor urut
    // Tipe data: integer (bilangan bulat)
    // Nomor urut mulai dari 1
    $no = 1;

    echo "<table border=\"1\" align=\"center\">";
    echo "<tr><th>No</th><th>Bilangan</th></tr>";

    // while = struktur perulangan dengan pengecekan kondisi SEBELUM eksekusi
    // Inisialisasi dilakukan di luar loop (sebelum while)
    // $counter = 2 → inisialisasi: counter dimulai dari 2
    // $counter <= 100 = kondisi: loop berlanjut selama counter ≤ 100
    // Kondisi dicek setiap selesai 1 perulangan sebelum kode dijalankan
    // Jika kondisi false, loop berhenti
    while ($counter <= 100) {
        // <tr> = table row (membuat baris baru pada tabel)
        // <td> = table data (membuat sel/kotak untuk isi tabel)
        // Menampilkan nomor urut dan bilangan dalam satu baris tabel
        echo "<tr><td>$no</td><td>$counter</td></tr>";

        // Inkremen nomor urut: counter bertambah 1 setiap selesai 1 perulangan
        // $no++ → tambah 1 setiap perulangan (operator increment)
        $no++;

        // Inkremen bilangan: counter bertambah 2 setiap selesai 1 perulangan
        // $counter += 2 → tambah 2 setiap perulangan
        // Urutan perulangan: 2, 4, 6, 8, ... 100 (total 50 perulangan)
        $counter += 2;
    }
    // Loop selesai (semua 50 perulangan sudah dijalankan)
    // Tutup tabel HTML
    echo "</table>";
    ?>

</body>
</html>
