<html>
<head>
    <title>Latihan For - Tabel Harga Kuas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .form-container {
            text-align: center;
            margin-bottom: 20px;
        }
        input, button {
            padding: 10px;
            margin: 5px;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">Tabel Harga Kuas Lukis</h2>
    
    <!-- Form untuk input harga satuan -->
    <div class="form-container">
        <form method="GET" action="">
            <label>Harga Satuan: </label>
            <input type="number" name="harga" value="<?php echo isset($_GET['harga']) ? $_GET['harga'] : 5; ?>" min="1">
            <button type="submit" name="tampilkan">Tampilkan Tabel</button>
        </form>
    </div>
    
    <hr>
    
    <?php
    // Cek apakah tombol "Tampilkan Tabel" sudah ditekan
    if (isset($_GET['tampilkan'])) {
        // Ambil nilai harga dari form
        $brush_price = (int)$_GET['harga'];
        
        // Validasi: harga harus lebih dari 0
        if ($brush_price < 1) {
            echo "<p style='color: red; text-align: center;'>Error: Harga harus lebih dari 0!</p>";
        } else {
            // Buat tabel dengan border dan align center
            echo "<table border=\"1\" align=\"center\">";
            echo "<tr><th>Quantity</th>";
            echo "<th>Price</th></tr>";
            
            // for = struktur perulangan (looping)
            // Struktur: for (inisialisasi; kondisi; increment)
            // $counter = 10 = inisialisasi: counter dimulai dari 10
            // $counter <= 100 = kondisi: loop selama counter ≤ 100
            // $counter += 10 = increment: counter bertambah 10 setiap iterasi
            // Iterasi: 10, 20, 30, 40, 50, 60, 70, 80, 90, 100 (total 10 iterasi)
            for ($counter = 10; $counter <= 100; $counter += 10) {
                echo "<tr><td>";
                echo " $counter";
                echo "</td><td>";
                // Hitung dan tampilkan harga total
                // Rumus: harga satuan × quantity
                echo $brush_price * $counter;
                echo "</td></tr>";
            }
            
            echo "</table>";
        }
    } else {
        // Jika belum submit, tampilkan tabel default dengan harga = 5
        $brush_price = 5;
        
        echo "<table border=\"1\" align=\"center\">";
        echo "<tr><th>Quantity</th>";
        echo "<th>Price</th></tr>";
        
        for ($counter = 10; $counter <= 100; $counter += 10) {
            echo "<tr><td>";
            echo " $counter";
            echo "</td><td>";
            echo $brush_price * $counter;
            echo "</td></tr>";
        }
        
        echo "</table>";
    }
    ?>
    
</body>
</html>
