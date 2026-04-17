<?php
include "koneksi.php";

if (isset($_POST['update'])) {
    $nis_lama = $_POST['nis_lama'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $jk = $_POST['jk'];
    $hobi = $_POST['hobi'];
    $ekskul = $_POST['ekskul'];
    
    $query = "UPDATE tb_siswa SET 
              nis='$nis', 
              nama='$nama', 
              kelas='$kelas', 
              ttl='$ttl', 
              alamat='$alamat', 
              kota='$kota', 
              jk='$jk', 
              hobi='$hobi', 
              ekskul='$ekskul' 
              WHERE nis='$nis_lama'";
    
    $hasil = mysqli_query($koneksi, $query);
    
    if ($hasil) {
        header("location:tampil.php");
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Gagal Update Data</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
            <style>
                body {
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    min-height: 100vh;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
                .error-card {
                    background: white;
                    border-radius: 20px;
                    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
                    padding: 40px;
                    text-align: center;
                    max-width: 500px;
                }
                .error-icon {
                    font-size: 4rem;
                    color: #dc3545;
                    margin-bottom: 20px;
                }
            </style>
        </head>
        <body>
            <div class="error-card">
                <div class="error-icon"><i class="fas fa-exclamation-triangle"></i></div>
                <h3 class="text-danger mb-3">Data Gagal Diupdate</h3>
                <p class="text-muted mb-3"><?php echo mysqli_error($koneksi); ?></p>
                <a href="tampil.php" class="btn btn-primary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </body>
        </html>
        <?php
    }
}
?>
