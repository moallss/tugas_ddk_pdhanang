<?php
include "koneksi.php"; // include artinya memasukkan file koneksi.php yang berisi kode untuk menghubungkan ke database, sehingga kita dapat menggunakan koneksi tersebut untuk melakukan operasi database di file ini
$nis = $_GET['nis']; // $nis adalah variabel yang menyimpan nilai dari parameter 'nis' yang dikirim melalui URL menggunakan metode GET, sehingga kita dapat menggunakan nilai tersebut untuk mengambil data siswa yang sesuai dari database
$query = "SELECT * FROM tb_siswa WHERE nis='$nis'"; // $query adalah variabel untuk menyimpan perintah SQL yang akan dijalankan, "SELECT * FROM tb_siswa WHERE nis='$nis'" adalah syntax SQL yang digunakan untuk memilih semua kolom dari tabel tb_siswa dimana nilai kolom nis sama dengan nilai yang disimpan dalam variabel $nis
$hasil = mysqli_query($koneksi, $query); // Fungsi mysqli_query() digunakan untuk menjalankan perintah SQL ke database MySQL.
$data = mysqli_fetch_array($hasil); // Fungsi mysqli_fetch_array() digunakan untuk mengambil hasil query dan menyimpannya dalam bentuk array.
?>
<html>
<head>
    <title>Form Update Data Siswa</title>
</head>
<body>
    <h1>Form Update Data Siswa</h1>
    <form method="POST" action="proses_update.php"> <!-- Form untuk mengupdate data siswa, dengan method POST yang akan mengirimkan data ke file proses_update.php saat tombol submit diklik -->
        <table border="1">
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis" value="<?php echo $data['nis']; ?>"></td> <!-- Menampilkan nilai dari kolom 'nis' yang diambil dari database dan disimpan dalam array $data, sehingga kita dapat melihat NIS siswa yang akan diupdate -->
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td> <!-- Menampilkan nilai dari kolom 'nama' yang diambil dari database dan disimpan dalam array $data, sehingga kita dapat mengubah nama siswa yang dipilih -->
            </tr>
            <tr>
                <td><input type="submit" name="kirim" value="Update"></td> <!-- Tombol submit untuk mengirimkan data yang telah diubah ke file proses_update.php -->
                <td><input type="reset" name="reset" value="Reset"></td> <!-- Tombol reset untuk mengosongkan semua input form -->
                <td><a href="tampil.php">Kembali</a></td> <!-- Link untuk kembali ke halaman tampil.php yang menampilkan semua data siswa -->
            </tr>
        </table>
    </form>
</body>
</html>
