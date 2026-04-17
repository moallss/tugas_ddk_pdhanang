<html>
    <head>
        <title>Penangan Form - Login</title>
    </head>
    <body>
        <!-- Form untuk input data, dikirim ke file Proses_Login.php dengan metode POST -->
        <form action="Proses_Login.php" method="post" name="input">
            <h2>Login Here...</h2>
            <!-- type="text" atau "password" adalah jenis input dengan jenis input text dan password, dan "name=" adalah nama variabel-->
            Username : <input type="text" name="username"><br><br>
            Password : <input type="password" name="password"><br><br>
            <input type="submit" name="Login" value="Login">
            <input type="reset" name="Reset" value="Reset">
        </form>
    </body>
</html>
<?php
// Code bagian ini akan dijalankan ketika form disubmit dengan tombol "Input"
// isset() berfungsi memeriksa apakah data sudah dikirim
// $_POST digunakan untuk mengambil data yang dikirim melalui metode POST, misal nya $_POST['username'] untuk mengambil data dari input text dengan name="username"
// $user adalah variabel untuk menyimpan data username yang diambil dari form, $pass untuk menyimpan data password
// $pass adalah variabel untuk menyimpan data password yang diambil dari form, $user untuk menyimpan data username
// $user = $_POST['username']; untuk mengambil data dari input text dengan name="username"
// $pass = $_POST['password']; untuk mengambil data dari input password dengan name="password"
    if (isset($_POST['Login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        // Memeriksa apakah username dan password sesuai
        if ($user == "smk4malang" && $pass == "123") {
            echo "<h2>Login Berhasil</h2>";
        } else {
            echo "<h2>Login Gagal</h2>";
        }
    }
?>