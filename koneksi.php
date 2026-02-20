<?php
$koneksi = mysqli_connect("localhost", "root", "", "toko_online");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
mysqli_set_charset($koneksi, "utf8mb4");
?>
