<html>
<head>
    <title>Penanganan Form Checkbox</title>
</head>
<body>
    <form action="Proses_Checkbox.php" method="post" name="input">
        <h2>Pilih Band Favorit Anda :</h2>
        <!-- Checkbox dengan name berbeda agar bisa pilih lebih dari satu -->
        <!-- type="checkbox" adalah jenis input dengan jenis input checkbox, dan "name=" adalah nama variabel yang berbeda untuk setiap checkbox agar bisa pilih lebih dari satu -->
        <!-- checked berarti sudah tercentang saat halaman pertama dibuka -->
        <input type="checkbox" name="band01" value="Padi" checked> Padi <br>
        <input type="checkbox" name="band02" value="Sheila On 7"> Sheila On 7<br>
        <input type="checkbox" name="band03" value="Dewa 19"> Dewa 19<br>
        <input type="checkbox" name="band04" value="Ungu"> Ungu<br>
        <input type="submit" name="Pilih" value="Pilih">
    </form>
</body>
</html>
<?php
// Code bagian ini akan dijalankan ketika form disubmit dengan tombol "Pilih"
// isset() berfungsi memeriksa apakah data sudah dikirim
// $_POST digunakan untuk mengambil data yang dikirim melalui metode POST
if (isset($_POST['Pilih'])) {
    echo "Band Favorit Anda adalah :<br>";
    // Cek setiap checkbox, jika dicentang maka tampilkan
    if (isset($_POST['band01'])) {
        echo "+ " . $_POST['band01'] . "<br>";
    }
    if (isset($_POST['band02'])) {
        echo "+ " . $_POST['band02'] . "<br>";
    }
    if (isset($_POST['band03'])) {
        echo "+ " . $_POST['band03'] . "<br>";
    }
    if (isset($_POST['band04'])) {
        echo "+ " . $_POST['band04'] . "<br>";
    }
}
/* Penjelasan :
jadi logika dari code php tersebut adalah :
1. Pertama, kita memeriksa apakah tombol "Pilih" sudah diklik dengan menggunakan isset($_POST['Pilih']).
2. Jika tombol "Pilih" sudah diklik, maka kita menampilkan pesan "Band Favorit Anda adalah :".
3. Selanjutnya, kita memeriksa setiap checkbox satu per satu menggunakan isset($_POST['band01']), isset($_POST['band02']), isset($_POST['band03']), dan isset($_POST['band04']).
4. Jika sebuah checkbox dicentang (artinya isset($_POST['bandXX']) bernilai true), maka kita menampilkan nama band yang dipilih dengan menggunakan echo "+ " . $_POST['bandXX'] . "<br>".
5. Dengan cara ini, hanya band yang dicentang yang akan ditampilkan sebagai favorit pengguna. Jika tidak ada checkbox yang dicentang, maka tidak akan ada band yang ditampilkan.
*/
?>