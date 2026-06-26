<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "db_belajar"; // Ubah sesuai nama database di phpMyAdmin-mu

// Menghubungkan ke MySQL
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek apakah koneksi berhasil atau gagal
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>