<html>
<head>
<title>Penanganan Form ~ Listbox</title></head>
<body>
    <form method=post action="Proses_ListBox.php">
    pilih warna :<br>
        <!-- select dengan size=6 menampilkan 6 opsi sekaligus -->
        <!-- multiple memungkinkan pilih lebih dari satu (tahan Ctrl) -->
        <select name='color[]' size=6 multiple>
            <option value='blue'>Blue</option>
            <option value='green'>Green</option>
            <option value='red'>Red</option>
            <option value='yellow'>Yellow</option>
            <option value='white'>White</option>
        </select> <br>
    <!-- Tombol submit untuk mengirim pilihan -->
    <input type=submit>
    </form>
</body>
</html>
<?php
// Code bagian ini akan dijalankan ketika form disubmit dengan tombol "Pilih"
// isset() berfungsi memeriksa apakah data sudah dikirim
// $_POST digunakan untuk mengambil data yang dikirim melalui metode POST, misal nya $_POST['color'] untuk mengambil data dari input select dengan name="color[]", karena multiple maka akan menghasilkan array
if (isset($_POST['color'])) {
    // Mengambil array warna yang dipilih
    $az = $_POST['color'];
    // Perulangan foreach untuk menampilkan setiap warna
    foreach ($az as $a){
        echo "$a <br>";
    }
}
/* Penjelasan :
1. Pertama, kita memeriksa apakah tombol submit sudah diklik dengan menggunakan isset($_POST['color']).
2. Jika tombol submit sudah diklik, maka kita mengambil array warna yang dipilih oleh pengguna dengan menggunakan $az = $_POST['color'];. Di sini, $_POST['color'] akan berisi array dari opsi yang dipilih dalam listbox karena kita menggunakan multiple.
3. Selanjutnya, kita menggunakan foreach untuk menampilkan setiap warna yang dipilih dengan menggunakan echo "$a <br>";. Di sini, $a akan berisi setiap warna yang dipilih oleh pengguna.
4. Dengan cara ini, ketika pengguna memilih beberapa warna dari listbox dan mengklik tombol submit, maka warna-warna tersebut akan ditampilkan di layar.
*/
?>