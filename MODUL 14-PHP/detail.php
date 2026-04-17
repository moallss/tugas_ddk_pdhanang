<?php
include "koneksi.php"; // include artinya memasukkan file koneksi.php yang berisi kode untuk menghubungkan ke database, sehingga kita dapat menggunakan koneksi tersebut untuk melakukan operasi database di file ini
    $nis = $_GET['nis']; // $nis adalah variabel yang menyimpan nilai dari parameter 'nis' yang dikirim melalui URL menggunakan metode GET, sehingga kita dapat menggunakan nilai tersebut untuk mengambil data siswa yang sesuai dari database
    $query = "SELECT * FROM tb_siswa WHERE nis='$nis'"; // $query adalah variabel untuk menyimpan perintah SQL yang akan dijalankan, "SELECT * FROM tb_siswa WHERE nis='$nis'" adalah syntax SQL yang digunakan untuk memilih semua kolom dari tabel tb_siswa dimana nilai kolom nis sama dengan nilai yang disimpan dalam variabel $nis
    $hasil = mysqli_query($koneksi, $query); // Fungsi mysqli_query() digunakan untuk menjalankan perintah SQL ke database MySQL.
    $data = mysqli_fetch_array($hasil); // Fungsi mysqli_fetch_array() digunakan untuk mengambil hasil query dan menyimpannya dalam bentuk array.
?>
<html>
<head>
    <title>Detail Data</title>
</head>
<body>
    <h1>Detail Data</h1>
    <table border="1">
        <tr>
            <td>NIS</td>
            <td><?php echo $data['nis']; ?></td> <!-- Menampilkan nilai dari kolom 'nis' yang diambil dari database dan disimpan dalam array $data, sehingga kita dapat melihat detail NIS siswa yang dipilih -->
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $data['nama']; ?></td> <!-- Menampilkan nilai dari kolom 'nama' yang diambil dari database dan disimpan dalam array $data, sehingga kita dapat melihat detail nama siswa yang dipilih -->
        </tr>
        </table>
    </body>
</html>

