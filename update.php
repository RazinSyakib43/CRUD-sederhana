<?php
include "koneksi.php";

$id_mentee = $_POST['id_mentee'] ?? '';
$nama = $_POST['nama'] ?? '';
$jenis_kelamin = $_POST['jenis_kelamin'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$telp = $_POST['tlp'] ?? '';

if (!empty($id_mentee)) {
    $query = "UPDATE mentee
              SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_tlp='$telp'
              WHERE id_mentee = '$id_mentee'";
    
    $result = $koneksi->query($query);
    
    if ($result) {
        echo "Berhasil Update
             <meta http-equiv='refresh' content='1;url=data_mentee.php'>";
    } else {
        echo "Gagal Update";
    }
} else {
    echo "ID mentee tidak valid.";
}

$koneksi->close();
