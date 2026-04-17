<html>
    <head>
        <title>Penanganan Form "Combobox"</title>
    </head>
<body>
        <form action="Proses_ComboBox.php" method="post" name="input">
            <h2>Pilih Film Kartun Favorit Anda :</h2>
                <!-- select adalah code untuk menampilkan dropdown -->
                <!-- name= adalah nama variabel dengan nama variabel "kartun" untuk menyimpan data film kartun yang dipilih oleh pengguna -->
                <!-- option adalah jenis code untuk menampilkan pilihan dan value adalah nilai dari pilihan dengan contoh nama pilihan nya : "Sponge Bob", "Sinchan", "Conan", "Doraemon", "Dragon Ball", "Naruto"-->
                <select name="kartun">
                    <option value="Sponge Bob">Sponge Bob</option>
                    <option value="Sinchan">Sinchan</option>
                    <option value="Conan">Conan</option>
                    <option value="Doraemon">Doraemon</option>
                    <option value="Dragon Ball">Dragon Ball</option>
                    <option value="Naruto">Naruto</option>
                </select>
                <!-- Tombol submit untuk mengirim pilihan -->
                <input type="submit" name="Pilih" value="Pilih">
        </form>
</body>
</html>
<?php
// Code bagian ini akan dijalankan ketika form disubmit dengan tombol "Pilih"
// isset() berfungsi memeriksa apakah data sudah dikirim
// $_POST digunakan untuk mengambil data yang dikirim melalui metode POST, misal nya $_POST['kartun'] untuk mengambil data dari input select dengan name="kartun"   
if (isset($_POST['Pilih'])) {
    // Mengambil nilai film kartun yang dipilih
    $film = $_POST['kartun'];
    echo "Film Kartun Favorit Anda adalah :
    <font color=blue><b>$film</b></font>";
}
/* Penjelasan :
1. Pertama, kita memeriksa apakah tombol "Pilih" sudah diklik dengan menggunakan isset($_POST['Pilih']).
2. Jika tombol "Pilih" sudah diklik, maka kita mengambil nilai film kartun yang dipilih oleh pengguna dengan menggunakan $film = $_POST['kartun'];. Di sini,$_POST['kartun'] akan berisi nilai dari opsi yang dipilih dalam dropdown.
3. Selanjutnya, kita menampilkan hasil pilihan film kartun favorit pengguna dengan menggunakan echo "Film Kartun Favorit Anda adalah : <font color=blue><b>$film</b></font>";. Di sini, kita menggunakan tag <font color=blue> untuk memberikan warna biru pada teks hasil pilihan, dan <b> untuk membuat teks menjadi tebal.
4. Dengan cara ini, ketika pengguna memilih salah satu film kartun dari dropdown dan mengklik tombol "Pilih", maka nama film kartun favorit mereka akan ditampilkan di layar dengan warna biru dan teks yang tebal.
*/ 
?>


