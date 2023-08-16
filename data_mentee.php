<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Data mentee</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<body>

    <h1 align="center">Data mentee</h1>
    <table border="1" align="center">
        <tr>
            <td>No</td>
            <td>Id mentee</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>No Telpon</td>
            <td colspan="2">Aksi</td>
        </tr>
        <?php
        include("koneksi.php");
        $sql_mentee = "SELECT * FROM mentee";
        $result = $koneksi->query($sql_mentee);

        if ($result) {
            $no = 1;
            while ($data_mentee = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data_mentee['id_mentee'] ?></td>
                    <td><?php echo $data_mentee['nama'] ?></td>
                    <td><?php echo $data_mentee['jenis_kelamin'] ?></td>
                    <td><?php echo $data_mentee['alamat'] ?></td>
                    <td><?php echo $data_mentee['no_tlp'] ?></td>
                    <td><a href='edit_mentee.php?edit_id=<?php echo $data_mentee['id_mentee'] ?>'>Edit</a></td>
                    <td><a href='hapus.php?hapus_id=<?php echo $data_mentee['id_mentee'] ?>'>Hapus</a></td>
                </tr>
        <?php
                $no++;
            }
            $result->free();
        } else {
            echo "Error: " . $koneksi->error;
        }
        ?>
    </table>

    <h4><a href="input_mentee.php">+Tambah Data</a></h4>
</body>

</html>