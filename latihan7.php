<?php
echo "<h1>Operasi String</h1><br>";

$komentar = "Hello...!"; // Variable dengan tipe data string
$komentar2 = "Selamat Datang di pemrograman web"; // Variable dengan tipe data string

// Menggabungkan variabel string dengan spasi
$komentar3 = $komentar . " " . $komentar2; 
// Menggunakan operator titik (.) untuk menggabungkan string, hasilnya akan menjadi "Hello...! Selamat Datang di pemrograman web"
// Jika tidak menggunakan titik (.) maka hasilnya akan menjadi "Hello...!Selamat Datang di pemrograman web" tanpa spasi di antara kedua kalimat

// Menampilkan nilai variabel string
echo "kalimat1 = $komentar<br>"; // Menampilkan nilai variabel komentar : "Hello...!"
echo "kalimat2 = $komentar2<br>"; // Menampilkan nilai variabel komentar2 : "Selamat Datang di pemrograman web"

// Menampilkan hasil gabungan
echo "Gabungan kalimat adalah = $komentar3<br>"; // Menampilkan hasil gabungan dari kedua variabel string : "Hello...! Selamat Datang di pemrograman web"
?>