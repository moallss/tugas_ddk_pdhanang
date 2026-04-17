<html>
<head>
    <title>Insert Data Siswa</title>
</head>
<body>
    <h1>Insert Data Siswa</h1>
    <form method="POST" action="">
        <table border="1">
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" value="Simpan"></td>
                <td><input type="reset" name="reset" value="Reset"></td>
                <td><a href="tampil.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
include "koneksi.php";
@$nis = $_POST['nis'];
@$nama = $_POST['nama'];
@$kirim = $_POST['kirim'];
@$query = "INSERT INTO tb_siswa VALUES ('$nis', '$nama')";
if ($kirim) {
    $hasil = mysqli_query($koneksi, $query);
    echo "Data berhasil disimpan";
    echo "<a href='tampil.php'>Kembali</a>";
}
?>

