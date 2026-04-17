<?php
include "koneksi.php";
$query = "SELECT * FROM tb_siswa";
$hasil = mysqli_query($koneksi, $query);
$no = 1;
$jumlah = mysqli_num_rows($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran Ekstrakurikuler</title>
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
            margin-top: 20px;
        }
        .header-title {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
        }
        .stats-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .stats-card i {
            font-size: 2rem;
            color: #667eea;
        }
        .btn-tambah {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        .btn-tambah:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
            color: white;
        }
        .table-custom {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        .table-custom thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .table-custom thead th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            padding: 15px;
            border: none;
        }
        .table-custom tbody tr {
            transition: all 0.3s ease;
        }
        .table-custom tbody tr:hover {
            background-color: #f8f9ff;
            transform: scale(1.01);
        }
        .btn-action {
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
            margin: 2px;
        }
        .btn-detail {
            background: #17a2b8;
            border: none;
            color: white;
        }
        .btn-detail:hover {
            background: #138496;
            transform: translateY(-2px);
        }
        .btn-edit {
            background: #ffc107;
            border: none;
            color: #000;
        }
        .btn-edit:hover {
            background: #e0a800;
            transform: translateY(-2px);
        }
        .btn-delete {
            background: #dc3545;
            border: none;
            color: white;
        }
        .btn-delete:hover {
            background: #c82333;
            transform: translateY(-2px);
        }
        .empty-state {
            text-align: center;
            padding: 50px 20px;
        }
        .empty-state i {
            font-size: 4rem;
            color: #dee2e6;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="container-custom">
            <div class="header-title">
                <h2 class="mb-0"><i class="fas fa-users"></i> Data Pendaftaran Ekstrakurikuler</h2>
            </div>
            
            <div class="stats-card">
                <div>
                    <h5 class="mb-1">Total Siswa Terdaftar</h5>
                    <p class="mb-0 text-muted">Semua data siswa yang sudah mendaftar</p>
                </div>
                <div class="text-end">
                    <h2 class="mb-0 fw-bold text-primary"><?php echo $jumlah; ?></h2>
                    <small class="text-muted">siswa</small>
                </div>
            </div>
            
            <div class="mb-4">
                <a href="insert.php" class="btn btn-tambah">
                    <i class="fas fa-plus"></i> Tambah Data Siswa
                </a>
            </div>
            
            <?php if ($jumlah > 0): ?>
            <div class="table-responsive">
                <table class="table table-custom table-hover mb-0">
                    <thead>
                        <tr>
                            <th width="4%">No</th>
                            <th width="7%">NIS</th>
                            <th width="10%">Nama</th>
                            <th width="6%">Kelas</th>
                            <th width="8%">TTL</th>
                            <th width="9%">Kota</th>
                            <th width="4%">JK</th>
                            <th width="12%">Hobi</th>
                            <th width="12%">Ekskul</th>
                            <th width="28%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = mysqli_fetch_array($hasil)): ?>
                        <tr>
                            <td class="text-center align-middle"><?php echo $no++; ?></td>
                            <td class="align-middle"><strong><?php echo htmlspecialchars($data['nis']); ?></strong></td>
                            <td class="align-middle"><?php echo htmlspecialchars($data['nama']); ?></td>
                            <td class="text-center align-middle">
                                <span class="badge bg-info"><?php echo htmlspecialchars($data['kelas']); ?></span>
                            </td>
                            <td class="align-middle"><?php echo date('d-m-Y', strtotime($data['ttl'])); ?></td>
                            <td class="align-middle"><?php echo htmlspecialchars($data['kota']); ?></td>
                            <td class="text-center align-middle">
                                <?php if($data['jk'] == 'L'): ?>
                                    <span class="badge bg-primary">L</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">P</span>
                                <?php endif; ?>
                            </td>
                            <td class="align-middle">
                                <small><?php echo htmlspecialchars($data['hobi']); ?></small>
                            </td>
                            <td class="align-middle">
                                <small><?php echo htmlspecialchars($data['ekskul']); ?></small>
                            </td>
                            <td class="text-center align-middle">
                                <div class="btn-group" role="group">
                                    <a href="detail.php?nis=<?php echo $data['nis']; ?>" class="btn btn-action btn-detail" title="Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="form_update.php?nis=<?php echo $data['nis']; ?>" class="btn btn-action btn-edit" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="delete.php?nis=<?php echo $data['nis']; ?>" class="btn btn-action btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <?php else: ?>
            <div class="empty-state">
                <i class="fas fa-inbox"></i>
                <h4>Belum Ada Data</h4>
                <p class="text-muted">Klik tombol "Tambah Data Siswa" untuk menambahkan data baru</p>
            </div>
            <?php endif; ?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
