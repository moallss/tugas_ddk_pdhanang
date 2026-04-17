<html>
    <head>
        <title>Kritik dan Saran ~ Textarea</title>
    </head>
    <body>
        <form action="Proses_TextArea.php" method="post" name="input">
            <h2>Input Kritik / Saran :</h2>
            <!-- textarea adalah jenis input dengan jenis input textarea, dan "name=" adalah nama variabel untuk menyimpan data kritik/saran yang diinput oleh pengguna -->
            <textarea name="saran" cols="40" rows="5"></textarea><br>
            <input type="submit" name="Proses" value="Input Saran">
        </form>
    </body>
</html>
<?php
// Code bagian ini akan dijalankan ketika form disubmit dengan tombol "Pilih"
// isset() berfungsi memeriksa apakah data sudah dikirim
// $_POST digunakan untuk mengambil data yang dikirim melalui metode POST, misal nya $_POST['saran'] untuk mengambil data dari input textarea dengan name="saran"
if (isset($_POST['Proses'])) {
    // Mengambil teks dari textarea
    $saran = $_POST['saran'];
    echo "Kritik / Saran Anda adalah : <br>";
    echo "<font color=blue><b>$saran</b></font>";
}
?>