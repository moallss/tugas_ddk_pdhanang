<?php
include "koneksi.php"; // include artinya memasukkan file koneksi.php yang berisi kode untuk menghubungkan ke database, sehingga kita dapat menggunakan koneksi tersebut untuk melakukan operasi database di file ini
$nis = $_POST['nis']; // $nis adalah variabel yang menyimpan nilai dari input dengan name 'nis' yang dikirim melalui metode POST, sehingga kita dapat menggunakan nilai tersebut untuk mengidentifikasi data siswa yang akan diupdate
$nama = $_POST['nama']; // $nama adalah variabel yang menyimpan nilai dari input dengan name 'nama' yang dikirim melalui metode POST, sehingga kita dapat menggunakan nilai tersebut untuk mengubah nama siswa
$query = "UPDATE tb_siswa SET nama='$nama' WHERE nis='$nis'"; // $query adalah variabel untuk menyimpan perintah SQL yang akan dijalankan, "UPDATE tb_siswa SET nama='$nama' WHERE nis='$nis'" adalah syntax SQL yang digunakan untuk mengubah kolom nama pada tabel tb_siswa dimana nilai kolom nis sama dengan nilai yang disimpan dalam variabel $nis
$hasil = mysqli_query($koneksi, $query); // Fungsi mysqli_query() digunakan untuk menjalankan perintah SQL ke database MySQL.
if ($hasil) { // if ($hasil) digunakan untuk memeriksa apakah perintah SQL berhasil dijalankan, jika ya maka blok kode di dalam if akan dieksekusi
    header("location:tampil.php"); // Jika update berhasil, halaman akan dialihkan ke tampil.php yang menampilkan semua data siswa
} else { // Jika update gagal, maka blok kode di dalam else akan dieksekusi
    echo "Data gagal diupdate"; // Menampilkan pesan "Data gagal diupdate" jika perintah SQL gagal dijalankan
    echo mysqli_error(); // Menampilkan pesan error yang dihasilkan oleh database untuk membantu mengidentifikasi penyebab kegagalan
    echo "<a href='tampil.php'>Kembali</a>"; // Menampilkan link "Kembali" yang mengarah ke file tampil.php, sehingga ketika link tersebut diklik, pengguna akan diarahkan kembali ke halaman untuk melihat data siswa
}
?>
