<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Input mentee</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<body>

    <!-- Form Edit mentee Karyawan -->

    <?php
    include("koneksi.php");
    $id_edit = $_GET['edit_id'] ?? '';

    if (!empty($id_edit)) {
        $query = "SELECT * FROM mentee WHERE id_mentee = '$id_edit'";
        $result = $koneksi->query($query);

        if ($result) {
            $data = $result->fetch_assoc();
            $id_mentee = $data["id_mentee"];
            $nama = $data["nama"];
            $jk = $data["jenis_kelamin"];
            $almt = $data["alamat"];
            $tlp = $data["no_tlp"];
        } else {
            echo "Error: " . $koneksi->error;
        }
    }
    ?>

    <form action="update.php" method="post" enctype="multipart/form-data">
        <table align="center">
            <input type="hidden" name="id_mentee" value="<?php echo $id_mentee ?>">
            <tr>
                <td colspan="3">
                    <h3>Form Input mentee</h3>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($jk == 'Laki-laki') echo "checked" ?>>Laki-laki</td>
                <td><input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($jk == 'Perempuan') echo "checked" ?>>Perempuan</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea cols="30" rows="5" name="alamat"><?php echo $almt ?></textarea></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><input type="text" name="tlp" value="<?php echo $tlp ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="submit" value="Send">
                    <input type="reset" name="reset" value="Clear">
                </td>
            </tr>
        </table>
    </form>

    <h4><a href="data_mentee.php">Lihat Data</a></h4>
</body>

</html>