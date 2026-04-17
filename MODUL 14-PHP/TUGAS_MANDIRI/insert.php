<?php
include "koneksi.php";

if (isset($_POST['daftar'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $jk = $_POST['jk'];
    $hobi = $_POST['hobi'];
    $ekskul = $_POST['ekskul'];
    
    $query = "INSERT INTO tb_siswa (nis, nama, kelas, ttl, alamat, kota, jk, hobi, ekskul) 
              VALUES ('$nis', '$nama', '$kelas', '$ttl', '$alamat', '$kota', '$jk', '$hobi', '$ekskul')";
    
    $hasil = mysqli_query($koneksi, $query);
    
    if ($hasil) {
        header("location:tampil.php");
        exit();
    } else {
        $error = "Data gagal disimpan: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Ekstrakurikuler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 30px 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container-custom {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 40px;
            max-width: 900px;
            margin: 0 auto;
        }
        .header-title {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-section {
            background: #f8f9ff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .form-section-title {
            color: #667eea;
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #667eea;
        }
        .form-label {
            font-weight: 500;
            color: #333;
            margin-bottom: 8px;
        }
        .form-control, .form-select {
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }
        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .form-check-input:checked {
            background-color: #667eea;
            border-color: #667eea;
        }
        .btn-submit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 12px 40px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
            color: white;
        }
        .btn-reset {
            background: #6c757d;
            border: none;
            color: white;
            padding: 12px 40px;
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .btn-reset:hover {
            background: #5a6268;
            transform: translateY(-2px);
            color: white;
        }
        .btn-back {
            background: #fff;
            border: 2px solid #667eea;
            color: #667eea;
            padding: 12px 40px;
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .btn-back:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="container-custom">
            <div class="header-title">
                <h2 class="mb-0"><i class="fas fa-user-plus"></i> Form Pendaftaran Ekstrakurikuler</h2>
            </div>
            
            <?php if (isset($error)): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle"></i> <?php echo $error; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <?php endif; ?>
            
            <form method="POST" action="">
                <div class="form-section">
                    <h5 class="form-section-title"><i class="fas fa-info-circle"></i> Data Siswa</h5>
                    
                    <div class="mb-3">
                        <label class="form-label">NIS <span class="text-danger">*</span></label>
                        <input type="text" name="nis" class="form-control" maxlength="20" placeholder="Masukkan NIS" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" name="nama" class="form-control" maxlength="50" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Kelas <span class="text-danger">*</span></label>
                        <input type="text" name="kelas" class="form-control" maxlength="20" placeholder="Contoh: X, XI, XII" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                        <input type="date" name="ttl" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Alamat <span class="text-danger">*</span></label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat Lengkap" required></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Kota <span class="text-danger">*</span></label>
                        <input type="text" name="kota" class="form-control" maxlength="50" placeholder="Masukkan Kota" required>
                    </div>
                </div>
                
                <div class="form-section">
                    <h5 class="form-section-title"><i class="fas fa-venus-mars"></i> Jenis Kelamin</h5>
                    
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" value="L" required>
                            <label class="form-check-label"><i class="fas fa-male"></i> Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" value="P" required>
                            <label class="form-check-label"><i class="fas fa-female"></i> Perempuan</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-section">
                    <h5 class="form-section-title"><i class="fas fa-heart"></i> Hobi & Ekskul</h5>
                    
                    <div class="mb-3">
                        <label class="form-label">Hobi</label>
                        <input type="text" name="hobi" class="form-control" maxlength="100" placeholder="Contoh: Membaca, Menulis, Olahraga">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Ekskul</label>
                        <input type="text" name="ekskul" class="form-control" maxlength="100" placeholder="Contoh: Pramuka, PMR, Basket">
                    </div>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                    <button type="reset" class="btn btn-reset">
                        <i class="fas fa-redo"></i> Reset
                    </button>
                    <a href="tampil.php" class="btn btn-back">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" name="daftar" class="btn btn-submit">
                        <i class="fas fa-paper-plane"></i> Kirim Pendaftaran
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
