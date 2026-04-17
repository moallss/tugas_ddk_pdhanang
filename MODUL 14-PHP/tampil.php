<html>
<head>
    <title>Tampil Data</title>
</head>
<body>
    <h1>Tampil Data</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th colspan="3">action</th>
        </tr>
        <!--Bagian code di bawah ini untuk menampilkan data dari databases -->
        <?php
        include "koneksi.php";    /* Menghubungkan file ini dengan file koneksi.php untuk dapat menggunakan koneksi database yang telah dibuat */
        $query = "SELECT * FROM tb_siswa"; /* Query SQL untuk mengambil semua data dari tabel tb_siswa, "SELECT * FROM tb_siswa" adalah syntax SQL yang digunakan untuk memilih semua kolom dari tabel tb_siswa */
        $hasil = mysqli_query($koneksi, $query); /* Fungsi mysqli_query() digunakan untuk menjalankan query SQL yang telah dibuat dan menyimpan hasilnya dalam variabel $hasil */
        $no = 1; /* Variabel $no digunakan untuk memberikan nomor urut pada setiap data yang ditampilkan, dimulai dari 1 */
        $jumlah = mysqli_num_rows($hasil); /* $jumlah adalah variabel yang menyimpan jumlah baris data yang dihasilkan oleh query SQL, fungsi mysqli_num_rows() digunakan untuk menghitung jumlah baris dalam hasil query */
        echo "Banyak data: " . "$jumlah; <br><br>"; /* Menampilkan jumlah data yang dihasilkan oleh query SQL dengan menggunakan echo untuk mencetak teks "Banyak data: " diikuti dengan nilai dari variabel $jumlah, dan <br><br> digunakan untuk memberikan jarak antar baris */
        while ($data = mysqli_fetch_array($hasil)) { /* while ($data = mysqli_fetch_array($hasil)) digunakan untuk melakukan perulangan sebanyak jumlah data yang dihasilkan oleh query SQL, fungsi mysqli_fetch_array() digunakan untuk mengambil setiap baris data dari hasil query dan menyimpannya dalam variabel $data sebagai array asosiatif */
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <?php // Link "Detail" untuk melihat detail data siswa ?>
                <td><a href="detail.php?nis=<?php echo $data['nis']; ?>">Detail</a></td>
                <?php // Link "Edit" untuk mengedit data siswa ?>
                <td><a href="form_update.php?nis=<?php echo $data['nis']; ?>">Edit</a></td>
                <?php // Link "Delete" dengan konfirmasi sebelum menghapus data ?>
                <td><a href="delete.php?nis=<?php echo $data['nis']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a></td>
            </tr>
        <?php
        }
        ?>
        </html>
        <?php
        echo "<a href='insert.php'>Tambah Data</a>"; // Menampilkan link "Tambah Data" untuk menambahkan data siswa baru
        ?>

    
