<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Input mentee</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <form action="insert.php" method="post">
        <table align="center">
            <tr>
                <td colspan="3">
                    <h3>Form Input mentee</h3>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Masukan Nama" required="required"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</td>
                <td><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea cols="30" rows="5" name="alamat" class="ckeditor"></textarea></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><input type="text" name="tlp"></td>
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