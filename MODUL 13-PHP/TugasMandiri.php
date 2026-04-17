<!--  FORM LOGIN (HTML)  -->
<html>
    <head>
        <title>Sistem Pendaftaran Ekstrakurikuler</title>
    </head>
    <body>
        <!-- Form Login -->
        <form action="TugasMandiri.php" method="post" name="input">
            <h2>Login - Pendaftaran Ekstrakurikuler</h2>
            Username : <input type="text" name="username"><br><br>
            Password : <input type="password" name="password"><br><br>
            <!-- Tombol submit untuk login -->
            <input type="submit" name="login" value="Login">
            <!-- Tombol reset untuk mengosongkan input -->
            <input type="reset" name="reset" value="Reset">
        </form>
    </body>
</html>

<?php
//  PROSES LOGIN (PHP) 

// session_start() digunakan untuk memulai session, yang memungkinkan kita menyimpan data pengguna setelah login berhasil, seperti username, sehingga bisa digunakan di halaman lain selama session masih aktif
session_start();

if (isset($_POST['login'])) {
    // Mengambil username dan password dari form login
    $user = $_POST['username'];
    $pass = $_POST['password'];
    // Memeriksa apakah username dan password sesuai
    if ($user == "admin" && $pass == "123") {
        // Menyimpan username dan password ke dalam session agar bisa digunakan di halaman lain
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        // Menampilkan pesan sukses dan link ke form pendaftaran
        echo "<h2>Login Berhasil</h2>";
        echo "Selamat datang, $user<br><br>";
        echo "<a href='TugasMandiri.php'>Lanjut ke Form Pendaftaran</a>";
    } else {
        // Menampilkan pesan error jika login gagal
        echo "<h2>Login Gagal</h2>";
        echo "Username atau password salah!<br><br>";
    }
}
?>

<!--  FORM PENDAFTARAN (HTML)  -->
<html>
    <head>
        <title>Form Pendaftaran Ekstrakurikuler</title>
    </head>
    <body>
        <form action="TugasMandiri.php" method="post" name="input">
            <h2>Form Pendaftaran Ekstrakurikuler</h2>
            NIS : <input type="text" name="nis"><br><br>
            Nama : <input type="text" name="nama"><br><br>
            <!-- Combo box untuk memilih Kelas -->
            Kelas :
            <select name="kelas">
                <option value="">Pilih Kelas :</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select><br><br>

            <!-- Input text terpisah untuk Tanggal, Bulan, Tahun -->
            Tgl Lahir :
            <input type="text" name="tgl" size="2"> /
            <input type="text" name="bulan" size="2"> /
            <input type="text" name="tahun" size="4"><br><br>

            <!-- Textarea untuk input alamat yang panjang -->
            <table>
                <tr>
                    <td valign="top">Alamat :</td>
                    <td>
                        <textarea name="alamat" cols="40" rows="3"></textarea>
                    </td>
                </tr>
            </table><br>

            <!-- Input text untuk Kota -->
            Kota : <input type="text" name="kota"><br><br>

            <!-- Radio button untuk Jenis Kelamin, hanya bisa pilih satu -->
            Jenis Kelamin :
            <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br><br>

            <!-- Checkbox untuk Hoby, bisa pilih lebih dari satu -->
            Hoby : <br>
            <input type="checkbox" name="hoby1" value="Membaca">Membaca<br>
            <input type="checkbox" name="hoby2" value="Menulis">Menulis<br>
            <input type="checkbox" name="hoby3" value="Olahraga">Olahraga<br>
            <input type="checkbox" name="hoby4" value="Musik">Musik<br>
            <input type="checkbox" name="hoby5" value="Gaming">Gaming<br>
            <input type="checkbox" name="hoby6" value="Memasak">Memasak<br><br>

            <!-- Listbox untuk memilih Eskul, bisa pilih lebih dari satu (multiple) -->
            <table>
                <tr>
                    <td valign="top">Pilihan Eskul :</td>
                    <td>
                        <select name="ekskul[]" size="5" multiple>
                            <option value="Pramuka">Pramuka</option>
                            <option value="PMR">PMR</option>
                            <option value="Basket">Basket</option>
                            <option value="Futsal">Futsal</option>
                            <option value="Teater">Teater</option>
                            <option value="Musik">Musik</option>
                            <option value="English Club">English Club</option>
                        </select>
                    </td>
                </tr>
            </table><br>

            <!-- Tombol submit untuk mengirim data pendaftaran -->
            <input type="submit" name="daftar" value="Kirim">
            <!-- Tombol reset untuk mengosongkan form -->
            <input type="reset" name="reset" value="Cancel">
        </form>
    </body>
</html>

<?php
//  PROSES PENDAFTARAN (PHP) 

// isset() berfungsi memeriksa apakah data sudah dikirim
// $_POST digunakan untuk mengambil data yang dikirim melalui metode POST, misal nya $_POST['nis'] untuk mengambil data dari input text dengan name="nis", $_POST['kelas'] untuk mengambil data dari input select dengan name="kelas", $_POST['jenis_kelamin'] untuk mengambil data dari input radio button dengan name="jenis_kelamin", $_POST['hoby1'] untuk mengambil data dari input checkbox dengan name="hoby1", dan $_POST['ekskul'] untuk mengambil data dari input select dengan name="ekskul[]" yang menghasilkan array karena multiple
if (isset($_POST['daftar'])) {
    // Mengambil semua data dari form pendaftaran
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $tgl = $_POST['tgl'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $jk = $_POST['jenis_kelamin'];

    // Menampilkan hasil inputan ke layar
    echo "<h2>Hasil Pendaftaran Ekstrakurikuler</h2>";
    echo "<b>NIS :</b> $nis <br>";
    echo "<b>Nama :</b> $nama <br>";
    echo "<b>Kelas :</b> $kelas <br>";
    echo "<b>Tgl Lahir :</b> $tgl / $bulan / $tahun <br>";
    echo "<b>Alamat :</b> $alamat <br>";
    echo "<b>Kota :</b> $kota <br>";
    echo "<b>Jenis Kelamin :</b> $jk <br>";

    // Menampilkan hoby yang dipilih, cek satu per satu
    echo "<b>Hoby :</b><br>";
    if (isset($_POST['hoby1'])) {
        echo "+ " . $_POST['hoby1'] . "<br>";
    }
    if (isset($_POST['hoby2'])) {
        echo "+ " . $_POST['hoby2'] . "<br>";
    }
    if (isset($_POST['hoby3'])) {
        echo "+ " . $_POST['hoby3'] . "<br>";
    }
    if (isset($_POST['hoby4'])) {
        echo "+ " . $_POST['hoby4'] . "<br>";
    }
    if (isset($_POST['hoby5'])) {
        echo "+ " . $_POST['hoby5'] . "<br>";
    }
    if (isset($_POST['hoby6'])) {
        echo "+ " . $_POST['hoby6'] . "<br>";
    }

    // Menampilkan eskul yang dipilih menggunakan perulangan foreach
    echo "<b>Pilihan Eskul :</b><br>";
    if (isset($_POST['ekskul'])) {
        $ekskul = $_POST['ekskul'];
        foreach ($ekskul as $e) {
            echo "- $e <br>";
        }
    } else {
        echo "Tidak ada yang dipilih<br>";
    }

    // Link untuk kembali ke form
    echo "<br><a href='TugasMandiri.php'>Kembali ke Form</a>";
}
?>
