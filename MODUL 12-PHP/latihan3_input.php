<html>
<head>
    <title>Input Nilai Kelulusan</title>
</head>
<body>
    <h2>Input Nilai Siswa - Mata Pelajaran DDK</h2>
    
    <!-- Form untuk input nilai -->
    <form method="POST" action="">  <!-- Tambahkan code ini untuk mengirimkan nilai -->
        <label for="nilai">Masukkan Nilai:</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required>
        <button type="submit" name="submit">Cek Kelulusan</button>
    </form>
    
    <hr>
    
    <?php
    // Cek apakah form sudah disubmit
    if (isset($_POST['submit'])) {
        // Ambil nilai dari form dan konversi ke integer
        $nilai = (int)$_POST['nilai'];
        
        // Menampilkan nilai yang diinput
        echo "<h3>Hasil:</h3>";
        
        // Pernyataan if-elseif-else untuk menentukan grade
        if ($nilai >= 86 && $nilai <= 100) {
            echo "Nilai Anda <strong>A - Sangat Baik</strong><br>";
            echo "Status: <span style='color: green;'>LULUS</span>";
        }
        elseif ($nilai >= 76 && $nilai <= 85) {
            echo "Nilai Anda <strong>B - Baik</strong><br>";
            echo "Status: <span style='color: green;'>LULUS</span>";
        }
        elseif ($nilai >= 66 && $nilai <= 75) {
            echo "Nilai Anda <strong>C - Cukup</strong><br>";
            echo "Status: <span style='color: green;'>LULUS</span>";
        }
        elseif ($nilai >= 0 && $nilai <= 65) {
            echo "Nilai Anda <strong>D - Kurang</strong><br>";
            echo "Status: <span style='color: red;'>TIDAK LULUS</span>";
        }
        else {
            echo "Nilai Diluar Range (0-100)";
        }
    }
    ?>
    
</body>
</html>
