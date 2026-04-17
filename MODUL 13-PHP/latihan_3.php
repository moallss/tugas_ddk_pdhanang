<html>
    <head>
        <title>Penanganan Form - Radio Button</title>
    </head>
    <body>
        <form action="Proses_Radio_Button.php" method="post" name="input">
            <h2>Pilih Jurusan Anda :</h2>
            <!-- type="radio" adalah jenis input dengan jenis input radio button, dan "name=" adalah nama variabel yang sama untuk semua pilihan agar hanya bisa pilih satu -->
            <input type="radio" name="jurusan" value="RPL">RPL<br><br>
            <input type="radio" name="jurusan" value="TKJ">TKJ<br><br>
            <input type="radio" name="jurusan" value="MM">MULTIMEDIA<br><br>
            <input type="radio" name="jurusan" value="ANIM">ANIMASI<br><br>
            <input type="submit" name="Pilih" value="Pilih">
        </form>
    </body>
</html>
<?php
// Code bagian ini akan dijalankan ketika form disubmit dengan tombol "Input"
// isset() berfungsi memeriksa apakah data sudah dikirim
// $_POST digunakan untuk mengambil data yang dikirim melalui metode POST, misal nya $_POST['jurusan'] untuk mengambil data dari input radio button dengan name="jurusan"
// $jurusan adalah nama variabel dengan  nama "jurusan" untuk menyimpan data jurusan yang diambil dari form
if (isset($_POST['Pilih'])) {
    // Mengambil nilai jurusan yang dipilih
    $jurusan = $_POST['jurusan'];
    // Menampilkan hasil pilihan dengan warna merah
    echo "Jurusan Anda adalah
    <b><font color='red'>$jurusan</font></b>";
}
?>