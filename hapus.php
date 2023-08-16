<?php

include("koneksi.php");

$id_hapus = $_GET['hapus_id'] ?? '';

if (!empty($id_hapus)) {
    $sql_hapus = "DELETE FROM mentee WHERE id_mentee = '$id_hapus'";
    $result = $koneksi->query($sql_hapus);

    if ($result) {
        echo "<script type='text/javascript'> alert('Data Berhasil di Hapus!')</script>
             <meta http-equiv='refresh' content='4;url=data_mentee.php'>";
    } else {
        echo "Hapus Data Gagal!";
    }
} else {
    echo "ID untuk penghapusan tidak valid.";
}
