<html>
<head>
    <title>Tugas Mandiri 2 - MODUL 12</title>
</head>
<body>
    <h1>Tugas Mandiri 2 - MODUL 12 PHP</h1>
    <h2>Program Penghitung Discount</h2>
    <p>Aturan discount:</p>
    <ul>
        <li>Jumlah bayar ≥ 500.000 → Discount 50%</li>
        <li>Jumlah bayar ≥ 100.000 → Discount 10%</li>
        <li>Jumlah bayar ≥ 50.000 → Discount 5%</li>
        <li>Selain kriteria tersebut → Discount 0%</li>
    </ul>

    <?php
    // hitungDiscount = fungsi untuk menghitung discount
    // $jumlahBayar = variabel untuk menyimpan jumlah pembayaran
    // Tipe data: integer (bilangan bulat)
    // Parameter: jumlah pembayaran yang akan dihitung discount-nya
    function hitungDiscount($jumlahBayar) {
        // if = pernyataan kondisional (jika)
        // >= = operator perbandingan "lebih besar dari atau sama dengan"
        // $jumlahBayar >= 500000 = jika jumlah bayar ≥ 500.000
        // $persenDiscount = variabel untuk menyimpan persentase discount
        // Tipe data: integer (bilangan bulat)
        if ($jumlahBayar >= 500000) {
            $persenDiscount = 50;
        }
        // elseif = jika tidak, cek kondisi lain
        // $jumlahBayar >= 100000 = jika jumlah bayar ≥ 100.000
        elseif ($jumlahBayar >= 100000) {
            $persenDiscount = 10;
        }
        // $jumlahBayar >= 50000 = jika jumlah bayar ≥ 50.000
        elseif ($jumlahBayar >= 50000) {
            $persenDiscount = 5;
        }
        // else = jika tidak (semua kondisi di atas salah)
        // Discount 0% untuk jumlah bayar di bawah 50.000
        else {
            $persenDiscount = 0;
        }

        // Menghitung nominal discount
        // Rumus: jumlah bayar × (persen discount / 100)
        // $nominalDiscount = variabel untuk menyimpan nominal discount
        // Tipe data: integer/float (angka desimal)
        $nominalDiscount = $jumlahBayar * ($persenDiscount / 100);

        // Menghitung total setelah discount
        // Rumus: jumlah bayar - nominal discount
        // $totalBayar = variabel untuk menyimpan total pembayaran setelah discount
        $totalBayar = $jumlahBayar - $nominalDiscount;

        // return = mengembalikan nilai dari fungsi
        // [] = array (kumpulan data)
        // 'persen' => $persenDiscount = key 'persen' menyimpan nilai $persenDiscount
        // 'nominal' => $nominalDiscount = key 'nominal' menyimpan nilai $nominalDiscount
        // 'total' => $totalBayar = key 'total' menyimpan nilai $totalBayar
        return [
            'persen' => $persenDiscount,
            'nominal' => $nominalDiscount,
            'total' => $totalBayar
        ];
    }

    // $contohPembelian = array untuk menyimpan contoh jumlah pembayaran
    // [] = membuat array dengan nilai langsung
    // Array ini berisi 7 contoh pembelian untuk simulasi
    $contohPembelian = [25000, 50000, 75000, 100000, 250000, 500000, 1000000];

    echo "<table border=\"1\" align=\"center\">";
    echo "<tr>";
    echo "<th>Jumlah Bayar</th>";
    echo "<th>Discount (%)</th>";
    echo "<th>Nominal Discount</th>";
    echo "<th>Total Setelah Discount</th>";
    echo "</tr>";

    // foreach = struktur perulangan untuk array
    // as = sebagai
    // $pembelian = variabel sementara untuk nilai array saat ini
    // Loop ini akan dijalankan 7 kali (sesuai jumlah elemen array)
    foreach ($contohPembelian as $pembelian) {
        // Memanggil fungsi hitungDiscount dengan parameter $pembelian
        // $hasil = variabel array yang menyimpan hasil dari fungsi
        $hasil = hitungDiscount($pembelian);

        echo "<tr>";
        // number_format() = fungsi untuk format angka dengan pemisah ribuan
        // Parameter: angka, jumlah desimal, pemisah desimal, pemisah ribuan
        // Contoh: 50000 → "50.000" (format Indonesia)
        echo "<td>Rp " . number_format($pembelian, 0, ',', '.') . "</td>";
        echo "<td>" . $hasil['persen'] . "%</td>";
        echo "<td>Rp " . number_format($hasil['nominal'], 0, ',', '.') . "</td>";
        echo "<td>Rp " . number_format($hasil['total'], 0, ',', '.') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>
</html>
