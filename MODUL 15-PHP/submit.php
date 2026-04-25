<?php
session_start ();

$namuser = $_POST['username'];
$password = $_POST['password'];

if ('login sukses')

echo "<p> Selamat datang <b>" . $_SESSION['namauser']."</b></p>;
echo "<p> "