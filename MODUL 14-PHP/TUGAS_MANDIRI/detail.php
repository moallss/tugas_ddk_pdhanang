<?php
include "koneksi.php";
$nis = $_GET['nis'];
$query = "SELECT * FROM tb_siswa WHERE nis='$nis'";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Siswa</title>
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
        .detail-card {
            background: #f8f9ff;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 20px;
        }
        .detail-row {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #e0e0e0;
        }
        .detail-row:last-child {
            border-bottom: none;
        }
        .detail-label {
            flex: 0 0 200px;
            font-weight: 600;
            color: #667eea;
        }
        .detail-label i {
            margin-right: 10px;
            width: 20px;
        }
        .detail-value {
            flex: 1;
            color: #333;
        }
        .badge-jk {
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        .badge-l {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .badge-p {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }
        .badge-ekskul {
            display: inline-block;
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            color: #000;
            padding: 5px 15px;
            border-radius: 15px;
            margin: 3px;
            font-size: 0.85rem;
        }
        .badge-hobi {
            display: inline-block;
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            color: #000;
            padding: 5px 15px;
            border-radius: 15px;
            margin: 3px;
            font-size: 0.85rem;
        }
        .btn-action {
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-edit {
            background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
            border: none;
            color: #000;
        }
        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 193, 7, 0.6);
            color: #000;
        }
        .btn-back {
            background: #fff;
            border: 2px solid #667eea;
            color: #667eea;
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
                <h2 class="mb-0"><i class="fas fa-user-circle"></i> Detail Data Siswa</h2>
            </div>
            
            <div class="detail-card">
                <div class="detail-row">
                    <div class="detail-label">
                        <i class="fas fa-id-card"></i> NIS
                    </div>
                    <div class="detail-value">
                        <strong><?php echo htmlspecialchars($data['nis']); ?></strong>
                    </div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">
                        <i class="fas fa-user"></i> Nama Lengkap
                    </div>
                    <div class="detail-value">
                        <?php echo htmlspecialchars($data['nama']); ?>
                    </div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">
                        <i class="fas fa-chalkboard"></i> Kelas
                    </div>
                    <div class="detail-value">
                        <span class="badge bg-info"><?php echo htmlspecialchars($data['kelas']); ?></span>
                    </div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">
                        <i class="fas fa-calendar-alt"></i> Tanggal Lahir
                    </div>
                    <div class="detail-value">
                        <?php echo date('d F Y', strtotime($data['ttl'])); ?>
                    </div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">
                        <i class="fas fa-map-marker-alt"></i> Alamat
                    </div>
                    <div class="detail-value">
                        <?php echo htmlspecialchars($data['alamat']); ?>
                    </div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">
                        <i class="fas fa-city"></i> Kota
                    </div>
                    <div class="detail-value">
                        <?php echo htmlspecialchars($data['kota']); ?>
                    </div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">
                        <i class="fas fa-venus-mars"></i> Jenis Kelamin
                    </div>
                    <div class="detail-value">
                        <?php if($data['jk'] == 'L'): ?>
                            <span class="badge-jk badge-l"><i class="fas fa-male"></i> Laki-laki</span>
                        <?php else: ?>
                            <span class="badge-jk badge-p"><i class="fas fa-female"></i> Perempuan</span>
                        <?php endif; ?>
                    </div>
                </div>
                
                <?php if (!empty($data['hobi'])): ?>
                <div class="detail-row">
                    <div class="detail-label">
                        <i class="fas fa-heart"></i> Hobi
                    </div>
                    <div class="detail-value">
                        <?php
                        $hobi_array = array_filter(array_map('trim', explode(',', $data['hobi'])));
                        foreach ($hobi_array as $h) {
                            echo "<span class='badge-hobi'><i class='fas fa-star'></i> " . htmlspecialchars($h) . "</span>";
                        }
                        ?>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($data['ekskul'])): ?>
                <div class="detail-row">
                    <div class="detail-label">
                        <i class="fas fa-trophy"></i> Ekskul
                    </div>
                    <div class="detail-value">
                        <?php
                        $ekskul_array = array_filter(array_map('trim', explode(',', $data['ekskul'])));
                        foreach ($ekskul_array as $e) {
                            echo "<span class='badge-ekskul'><i class='fas fa-medal'></i> " . htmlspecialchars($e) . "</span>";
                        }
                        ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                <a href="tampil.php" class="btn btn-action btn-back">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <a href="form_update.php?nis=<?php echo $data['nis']; ?>" class="btn btn-action btn-edit">
                    <i class="fas fa-edit"></i> Edit Data
                </a>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
