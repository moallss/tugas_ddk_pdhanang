<?php
// --- SOAL 1: PROGRAM PENGOLAHAN NILAI SISWA ---

// Mendeklarasikan variabel statis (tanpa form)
$nis = "2026001"; // Variable dengan tipe data string yang menyimpan NIS siswa
$nama = "GALANG"; // Variable dengan tipe data string yang menyimpan nama siswa
$nilaiTugas = 85; // Variable dengan tipe data integer yang menyimpan nilai tugas siswa
$nilaiUTS = 80;   // Variable dengan tipe data integer yang menyimpan nilai UTS siswa
$nilaiUAS = 90;   // Variable dengan tipe data integer yang menyimpan nilai UAS siswa

// Melakukan perhitungan
$totalNilai = $nilaiTugas + $nilaiUTS + $nilaiUAS; // Hasil penjumlahan dari nilai tugas, UTS, dan UAS siswa : "255"
$rataRata = $totalNilai / 3; // Hasil pembagian total nilai dengan 3 untuk mendapatkan rata-rata nilai siswa : "85"
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pengolahan Nilai Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f5f5f5;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
            background: white;
        }
        th {
            background-color: #4a90d9;
            color: white;
            padding: 10px;
            border: 1px solid #333;
        }
        td {
            border: 1px solid #333;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <h2>Program Pengolahan Nilai Siswa</h2>

    <table>
        <tr>
            <th colspan="2">Laporan Hasil Belajar</th>
        </tr>
        <tr>
            <td>NIS</td>
            <td>: <?php echo $nis; ?></td> <!-- Menampilkan nilai NIS siswa : "2026001" -->
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>: <?php echo $nama; ?></td> <!-- Menampilkan nilai nama siswa : "GALANG" -->
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>: <?php echo $nilaiTugas; ?></td> <!-- Menampilkan nilai tugas siswa : "85" -->
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>: <?php echo $nilaiUTS; ?></td> <!-- Menampilkan nilai UTS siswa : "80" -->
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>: <?php echo $nilaiUAS; ?></td> <!-- Menampilkan nilai UAS siswa : "90" -->
        </tr>
        <tr style="font-weight: bold;">
            <td>Total Nilai</td>
            <td>: <?php echo $totalNilai; ?></td> <!-- Menampilkan hasil total nilai siswa : "255" -->
        </tr>
        <tr style="font-weight: bold;">
            <td>Rata-rata Nilai</td>
            <td>: <?php echo number_format($rataRata, 2); ?></td> <!-- Menampilkan hasil rata-rata nilai siswa dengan format 2 angka di belakang koma : "85.00" -->
        </tr>
    </table>

</body>
</html>