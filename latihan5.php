<?php
echo "<h1> Konstanta </h1>";
// Mendefinisikan konstanta dengan define()
define("SEKOLAH", "SMKN 4"); // define adalah variabel untuk membuat konstanta (Variabel yang tidak bisa di ubah setelah di definisikan) dengan nama SEKOLAH dan nilai "SMKN 4"
// Menggunakan const
const KELAS = "XI RPL 1"; // const adalah variabel untuk membuat konstanta dengan nama KELAS dan nilai "XI RPL 1"

echo "Sekolah : " . SEKOLAH . "<br>"; // Menampilkan nilai konstanta SEKOLAH : "SMKN 4"
echo "Kelas : " . KELAS . "<br>"; // Menampilkan nilai konstanta KELAS : "XI RPL 1"
?>
// Penjelasan:
// Pada kode di atas, kita mendefinisikan dua konstanta (variabel), SEKOLAH dan KELAS, menggunakan "define()" dan "const." Konstanta ini menyimpan informasi tentang nama sekolah dan kelas. 
Setelah didefinisikan, nilai dari konstanta ini tidak dapat diubah selama eksekusi program. Kita kemudian menampilkan nilai dari kedua konstanta tersebut menggunakan echo.