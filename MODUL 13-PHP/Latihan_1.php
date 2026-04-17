    <head>
        <title>Pengolahan Form - Text</title>
    </head>
    <body>
        <!-- Form untuk input data, dikirim ke file Proses_Input_Text.php dengan metode POST -->
        <form action="Proses_Input_Text.php" method="post" name="input">
            Sahabat-sahabat dekatku : <br><br>
            <!-- type="text" adalah jenis input dengan jenis input text, dan "name=" adalah nama variabel-->
            <input type="text" name="nama1"><br><br>
            <input type="text" name="nama2"><br><br>
            <input type="text" name="nama3"><br><br>
            <input type="text" name="nama4"><br><br>
            <input type="submit" name="Input" value="Input">
        </form>
    </body>
</html>
<?php
// Code bagian ini akan dijalankan ketika form disubmit dengan tombol "Input"
// isset() berfungsi memeriksa apakah data sudah dikirim
// $_POST digunakan untuk mengambil data yang dikirim melalui metode POST, misal nya $_POST['nama1'] untuk mengambil data dari input text dengan name="nama1"
if (isset($_POST['Input'])) {
    $nama1 = $_POST["nama1"];
    $nama2 = $_POST["nama2"];
    $nama3 = $_POST["nama3"];
    $nama4 = $_POST["nama4"];
    
    // Menampilkan hasil inputan ke layar
    echo "<b> Nama Sahabat dekatku : </b><br>";
    echo "Nama 1 : " . $nama1 . "<br>";
    echo "Nama 2 : " . $nama2 . "<br>";
    echo "Nama 3 : " . $nama3 . "<br>";
    echo "Nama 4 : " . $nama4 . "<br>";
}
?>



