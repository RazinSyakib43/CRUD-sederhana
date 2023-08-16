<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "magang_kami";

$koneksi = new mysqli($hostname, $username, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

echo "Koneksi sukses!";
