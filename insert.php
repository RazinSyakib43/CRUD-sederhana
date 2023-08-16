<?php
include("koneksi.php");

$koneksi = new mysqli($hostname, $username, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$nama = $_POST['nama'] ?? '';
$jk = $_POST['jenis_kelamin'] ?? '';
$almt = $_POST['alamat'] ?? '';
$telepon = $_POST['tlp'] ?? '';

//Perintah Query untuk proses insert ke database

$sql_mentee = "INSERT INTO mentee (nama,jenis_kelamin,alamat,no_tlp)
               VALUES ('$nama','$jk','$almt','$telepon')";

if ($koneksi->query($sql_mentee) === TRUE) {
    echo "Berhasil Simpan!
          <meta http-equiv='refresh' content='3;url=input_mentee.php'>";
} else {
    echo "Gagal simpan!
         <meta http-equiv='refresh' content='3;url=input_mentee.php'>";
}

$koneksi->close();
