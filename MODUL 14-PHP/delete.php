<?php
include "koneksi.php"; // include artinya memasukkan file koneksi.php yang berisi kode untuk menghubungkan ke database, sehingga kita dapat menggunakan koneksi tersebut untuk melakukan operasi database di file ini
$nis = $_GET['nis']; // $nis adalah variabel yang menyimpan nilai dari parameter 'nis' yang dikirim melalui URL menggunakan metode GET, sehingga kita dapat menggunakan nilai tersebut untuk menghapus data siswa yang sesuai dari database
$query = "DELETE FROM tb_siswa WHERE nis='$nis'"; // $query adalah variabel untuk menyimpan perintah SQL yang akan dijalankan, "DELETE FROM tb_siswa WHERE nis='$nis'" adalah syntax SQL yang digunakan untuk menghapus data dari tabel tb_siswa dimana nilai kolom nis sama dengan nilai yang disimpan dalam variabel $nis
$hasil = mysqli_query($koneksi, $query); // Fungsi mysqli_query() digunakan untuk menjalankan perintah SQL ke database MySQL.
if ($hasil) { // if ($hasil) digunakan untuk memeriksa apakah perintah SQL berhasil dijalankan, jika ya maka blok kode di dalam if akan dieksekusi
?>
<script language='javascript'>document.location.href='tampil.php';</script>"; <!-- Jika penghapusan berhasil, halaman akan dialihkan ke tampil.php menggunakan JavaScript -->
<?php
} else { // Jika penghapusan gagal, maka blok kode di dalam else akan dieksekusi
    echo "Data gagal dihapus"; // Menampilkan pesan "Data gagal dihapus" jika perintah SQL gagal dijalankan
    echo mysqli_error(); // Menampilkan pesan error yang dihasilkan oleh database untuk membantu mengidentifikasi penyebab kegagalan
    echo "<a href='tampil.php'>Kembali</a>"; // Menampilkan link "Kembali" yang mengarah ke file tampil.php, sehingga ketika link tersebut diklik, pengguna akan diarahkan kembali ke halaman untuk melihat data siswa
}
?>
